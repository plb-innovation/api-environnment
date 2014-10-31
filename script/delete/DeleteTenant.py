__author__ = 'Amorim'

from util import *


def delete_tenant(modir, tenant_name):
    """Delete a tenant"""
    fv_tenant = modir.lookupByDn('uni/tn-' + tenant_name)
    if isinstance(fv_tenant, Tenant):
        fv_tenant.delete()
    else:
        print 'Tenant', tenant_name, 'does not existed.'
        return

    # print the query in XML format
    print_query_xml(fv_tenant)

    # Commit the change using a ConfigRequest object
    commit_change(modir, fv_tenant)


if __name__ == '__main__':

    key_args = [{'name': 'tenant', 'help': 'Tenant name'}]
    config={}

    try:
        host_name= sys.argv[1]
        user_name= sys.argv[2]
        password=sys.argv[3]
        tenant_name=sys.argv[4]

        #host_name, user_name, password, args = set_cli_argparse('Delete a Tenant.', key_args)
        #tenant_name = args.pop('tenant')

    except SystemExit:

        if len(sys.argv)>4:
            print 'Invalid input arguments.'
            #tenant_name = input_tenant_name()

    modir = apic_login_cobra(host_name, user_name, password)
    delete_tenant(modir, tenant_name)
    modir.logout()
