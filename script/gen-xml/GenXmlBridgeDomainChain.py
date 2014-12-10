__author__ = 'Amorim'

import sys


def WriteXmlPhysicalDomain(config) :
    FileXml=open('/var/www/API-frontend/xml/xml-chain/05-Bridge-Domain-Chain.xml','w+')

    TextBEG='''<polUni>
	<fvTenant name="'''+config['tenant']+'''">'''

    TextEND='''
    </fvTenant>
</polUni>'''
    FileXml.write(TextBEG)


    Srange=int(config['startRange'])
    for i in range(0,int(config['numBridge'])):
        TextBD ='''
		<fvCtx name="'''+config['Namectx']+'''"/>
		<fvBD arpFlood="yes" name="'''+config['bridge']+'''-'''+str(Srange+i)+''' ">
			<fvRsCtx tnFvCtxName="'''+config['Namectx']+'''"/>
			<fvSubnet ip="'''+config['subnet']+'''"/>
		</fvBD>'''

        FileXml.write(str(TextBD))

    FileXml.write(TextEND)
    FileXml.close()

def input_info() :
    config={}
    print('Please insert required informations')
    config['tenant']=raw_input("Tenant Name (required) :")
    config['numBridge']=raw_input("Bridge Domain number (required) :")
    config['startRange']=raw_input("Tenant Name (required) :")
    config['bridge'] = raw_input("Bridge Domain radical Name (required) :")
    config['Namectx'] = raw_input("Private Network Name (required) :")
    config['subnet'] = raw_input("Subnet (required) :")

    if config['tenant'] == None or config['bridge'] == None or config['Namectx'] == None or config['subnet'] == None or config['numBridge'] == None or config['startRange'] == None :
        print("Error parameter insertion")
        sys.exit(0)
    return config

if __name__ == '__main__':
    config={}
    try:
        config['tenant'] = sys.argv[1]
        config['numBridge'] = sys.argv[2]
        config['startRange'] = sys.argv[3]
        config['bridge'] = sys.argv[4]
        config['Namectx'] = sys.argv[5]
        config['subnet'] = sys.argv[6]

    except Exception as e:
        print str(e)
        config=input_info()
    WriteXmlPhysicalDomain(config)
