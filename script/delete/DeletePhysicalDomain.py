__author__ = 'Amorim'

from cobra.model.phys import DomP

from util import *

DEFAULT_VLAN_POOL = ''

key_args = [{'name': 'physical_domain', 'help': 'Physical Domain name'}]

def input_key_args(msg='\nPlease specify the Physical Domain:'):
    print msg
    return get_raw_input("Physical Domain Name (required): ", required=True)


def delete_physical_domain(modir, physical_domain):

    # Query the physical domain

    phys_domp = modir.lookupByDn('uni/phys-'+physical_domain)
    if isinstance(phys_domp, DomP):
        # delete the Physical Domain
        phys_domp.delete()
    else:
        print 'There is no Physical Domain', physical_domain, '.'
        return

    print_query_xml(phys_domp)
    commit_change(modir, phys_domp)

if __name__ == '__main__':

    # Try mode one: arguments from CLI
    try:
        host_name= sys.argv[1]
        user_name= sys.argv[2]
        password=sys.argv[3]
        physical_domain=sys.argv[4]

    except SystemExit:

        if len(sys.argv)>4:
            print 'Invalid input arguments.'
            #host_name, user_name, password = input_login_info()

    # Login to APIC
    modir = apic_login_cobra(host_name, user_name, password)
    # Execute the main function
    delete_physical_domain(modir, physical_domain)
    modir.logout()
