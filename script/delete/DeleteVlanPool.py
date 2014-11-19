__author__ = 'Amorim'

from cobra.model.fvns import VlanInstP

from util import *


key_args = [{'name': 'vlan_name', 'help': 'VLAN Pool name'},
            {'name': 'allocation_mode', 'help': 'Allocation Mode', 'choices': ['dynamic', 'static']}]

def delete_vlan_pool(modir, vlan_name, allocation_mode):

    # Query to the VLAN pool.
    fvns_vlaninstp = modir.lookupByDn('uni/infra/vlanns-' + vlan_name + '-' + allocation_mode)

    if isinstance(fvns_vlaninstp, VlanInstP):
        # delete the VLAN
        fvns_vlaninstp.delete()
    else:
        print 'There is no VLAN', vlan_name, '(', allocation_mode, ').'
        return

    print_query_xml(fvns_vlaninstp)
    commit_change(modir, fvns_vlaninstp)


if __name__ == '__main__':

    # Try mode one: arguments from CLI
    try:
        host_name= sys.argv[1]
        user_name= sys.argv[2]
        password=sys.argv[3]
        vlan_name=sys.argv[4]
        allocation_mode=sys.argv[5]

    except SystemExit:
        if len(sys.argv)>4:
            print 'Invalid input arguments.'

    # Login to APIC
    modir = apic_login_cobra(host_name, user_name, password)

    # Execute the main function
    delete_vlan_pool(modir, vlan_name, allocation_mode.lower())

    modir.logout()