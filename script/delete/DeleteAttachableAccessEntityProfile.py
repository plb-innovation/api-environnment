__author__ = 'Amorim'

from cobra.model.infra import AttEntityP

from util import *


DEFAULT_ENABLE_INFRASTRUCTURE_VLAN = False

key_args = [{'name': 'profile_name', 'help': 'Attachable Access Entity Profile name'}]


def input_key_args(msg='\nPlease specify the Attachable Access Entity Profile:'):
    print msg
    return get_raw_input("Entity Profile Name (required): ", required=True)

def delete_attachable_access_entity_profile(modir, profile_name):

    # Query a parent
    infra_attentityp = modir.lookupByDn('uni/infra/attentp-'+profile_name)

    if isinstance(infra_attentityp, AttEntityP):
        # delete the Attachable Access Entity Profile
        infra_attentityp.delete()
    else:
        print 'There is no Attachable Access Entity Profile', profile_name, '.'
        return

    print_query_xml(infra_attentityp)
    commit_change(modir, infra_attentityp)

if __name__ == '__main__':

    # Try mode one: arguments from CLI
    try:
        host_name= sys.argv[1]
        user_name= sys.argv[2]
        password=sys.argv[3]
        profile_name=sys.argv[4]

    except SystemExit:
        if len(sys.argv)>4:
            print 'Invalid input arguments.'

    # Login to APIC
    modir = apic_login_cobra(host_name, user_name, password)

    # Execute the main function
    delete_attachable_access_entity_profile(modir, profile_name)
    modir.logout()
