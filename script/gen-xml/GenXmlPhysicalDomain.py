__author__ = 'Amorim'

import sys


def WriteXmlPhysicalDomain(config) :
    FileXml=open("/var/www/API-frontend/xml/03-Physical-Domain.xml","w+")
    TextPD ='''
<polUni>
      <physDomP name="'''+config['name']+'''">
         <infraRsVlanNs tDn="uni/infra/vlanns-'''+config['pool']+'''-static"/>
      </physDomP>
</polUni>
'''
    FileXml.write(TextPD)
    FileXml.close()

def input_info() :
    config={}
    print('Please insert required informations')
    config['name']=raw_input("Physical Domain Name (required) :    ")
    config['pool']=raw_input("Vlan pool Name (required) :    ")

    if config['name'] == None  :
        print("Error parameter insertion")
        sys.exit(0)
    return config

if __name__ == '__main__':
    config={}
    try:
        config['name'] = sys.argv[1]
        config['pool'] = sys.argv[2]
    except Exception as e:
        print str(e)
        config=input_info()
    WriteXmlPhysicalDomain(config)