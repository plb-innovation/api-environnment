__author__ = 'Amorim'

import sys
from pprint import pprint

import requests

from util import *


def RecupVlansValuesJson(data) :
    result= [[]]
    data=convert(data)
    imdata=data['imdata']
    cpt=0
    #for t in imdata :
    #    cpt=cpt+1
    #    Stab=t['fvBD']
    #    for u in Stab :
            #result.append(Stab['attributes']['name'])
            #result.append(Stab['attributes']['mac'])
    #result.sort()
    #return result
    return 0

def GetVlanName(config, cookies):
    url='https://'+config['host']+'/api/node/mo/uni/tn-'+config['tenant']+'.json?query-target=children&target-subtree-class=fvBD'
    #print '++++++++ REQUEST GET ++++++++'
    #print url
    #print '------------------------------'

    r = requests.get(url,cookies=cookies, verify=False)
    #print r.status_code

   # print '++++++++ RESPONSE GET ++++++++'
    pprint (convert(r.json()))
    #print '-------------------------------'

    return RecupVlansValuesJson(r.json())

def input_log_info() :
    config={}
    print('Please insert required informations')
    config['host']=raw_input("Host Name (required) :    ")
    config['name']=raw_input("User Name (required):     ")
    config['passwd']=raw_input("Password (required):    ")
    config['tenant']=raw_input("Tenant Name (required): ")

    if config['host'] == None or config['name'] == None or config['passwd'] == None or config['tenant'] == None :
        print("Error parameter insertion")
        sys.exit(0)

    return config

if __name__ == '__main__':
    config={}
    try:
        config['host'] = sys.argv[1]
        config['name'] = sys.argv[2]
        config['passwd'] = sys.argv[3]
        config['tenant'] = sys.argv[4]

    except Exception as e:
        print str(e)
        config=input_log_info()

    cookies=LoginApicRequest(config)
    print GetVlanName(config, cookies)

