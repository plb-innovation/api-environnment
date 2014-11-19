__author__ = 'Amorim'

from cobra.model.fv import Subnet

from util import *


key_args = [{'name': 'tenant', 'help': 'Tenant name'},
            {'name': 'bridge_domain', 'help': 'Bridge Domain'},
            {'name': 'subnet', 'help': 'Subnet IP'},
            ]

def input_key_args(msg='\nPlease specify the Subnet:'):
    print msg
    args = []
    args.append(get_raw_input("Tenant name (required): ", required=True))
    args.append(get_raw_input("Bridge Domain (required): ", required=True))
    args.append(get_raw_input("Subnet IP (required): ", required=True))
    return args


def delete_subnet(modir, tenant, bridge_domain, subnet):

    # Query a parent
    fv_subnet = modir.lookupByDn('uni/tn-'+tenant+'/BD-'+bridge_domain+'/subnet-['+subnet+']')

    if isinstance(fv_subnet, Subnet):
        fv_subnet.delete()
    else:
        print 'Subnet', subnet, 'does not exist.'
        return

    print_query_xml(fv_subnet)
    commit_change(modir, fv_subnet)

if __name__ == '__main__':

    # Try mode one: arguments from CLI
    try:
        host_name= sys.argv[1]
        user_name= sys.argv[2]
        password=sys.argv[3]
        tenant=sys.argv[4]
        bridge_domain=sys.argv[5]
        subnet=sys.argv[6]

    except SystemExit:
        if len(sys.argv)>6:
            print 'Invalid input arguments.'

    # Login to APIC
    modir = apic_login_cobra(host_name, user_name, password)

    # Execute the main function
    delete_subnet(modir, tenant, bridge_domain, subnet)

    modir.logout()