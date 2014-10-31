__author__ = 'Amorim'

import sys

def WriteXmlTenant(config):
    FileXml=open('/var/www/API-frontend/xml/01-Tenant.xml','w+')

    TextTenant = '''
<polUni>
	<fvTenant name="'''+config['fvTenant']+'''">

	</fvTenant>
</polUni>
    '''
    FileXml.write(TextTenant)
    FileXml.close()


def input_info() :
    config={}
    print('Please insert required informations')
    config['fvTenant']=raw_input("fvTenant Name (required) :    ")


    if config['fvTenant'] == None or config['fvCtx'] == None or config['NumberBD'] == None or config['To'] == None or config['From'] == None or config['fvAp'] == None :
        print("Error parameter insertion")
        sys.exit(0)
    return config

if __name__ == '__main__':
    config={}
    try:
        config['fvTenant'] = sys.argv[1]
    except Exception as e:
        print str(e)
        config=input_info()
    WriteXmlTenant(config)