__author__ = 'Amorim'

__author__ = 'Amorim'

import sys


def WriteXmlAttachableAccessEntityProfile(config) :
    FileXml=open('/var/www/API-frontend/xml/04-AAEP.xml','w+')


    TextAAEP ='''<polUni>
	<infraInfra>
		<!-- Attachable Access Entity Profile Creation -->
		<infraAttEntityP name="'''+config['Naaep']+'''">
		    <infraRsDomP tDn="uni/phys-'''+config['physical']+'''"/>
		</infraAttEntityP>'''

    TextPolicy='''
    <!-- Creation of a new Interface Policy Group linked to the new Attachable Access Entity Profile -->
		<infraFuncP>
			<infraAccPortGrp name="'''+config['groupPolicy']+'''">
				<infraRsAttEntP tDn="uni/infra/attentp-'''+config['Naaep']+'''"/>
			</infraAccPortGrp>
		</infraFuncP>'''

    TextEND='''
    </infraInfra>
</polUni>'''

    FileXml.write(TextAAEP)
    FileXml.write(TextPolicy)
   
    for i in range(0,int(config['numIntprofile'])):
        Srange=int(config['range'])+i
        TextIntPro='''
        <!-- Creation of a new Interface Profile for '''+config['nameProfile']+str(i+1)+''' with use of new Policy Group on port 1/3 -->
		<infraAccPortP name="'''+config['nameProfile']+str(i+1)+'''-Interface_Profile">
			<infraHPortS name="'''+config['selector']+'''" type="range">
				<infraPortBlk fromCard="'''+config['numCard']+'''" fromPort="'''+config['fromPort']+'''" name="'''+config['nameCard']+'''" toPort="'''+config['toPort']+'''"/>
				<infraRsAccBaseGrp tDn="uni/infra/funcprof/accportgrp-'''+config['groupPolicy']+'''/"/>
			</infraHPortS>
		</infraAccPortP>'''

        TextSwitchPro='''
        <!-- Create a Switch Profile for '''+config['switchProfile']+str(i+1)+''' and attach associated interface profile -->
		<infraNodeP name="'''+config['switchProfile']+str(i+1)+'''-Switch_Profile">
			<infraLeafS name="'''+config['switchProfile']+str(i+1)+'''" type="range">
				<infraNodeBlk from_="'''+str(Srange)+'''" name="'''+config['infraName']+'''" to_="'''+str(Srange)+'''"/>
			</infraLeafS>
			<infraRsAccPortP tDn="uni/infra/accportprof-'''+config['nameProfile']+str(i+1)+'''-Interface_Profile"/>
		</infraNodeP>'''

        FileXml.write(str(TextIntPro))
        FileXml.write(str(TextSwitchPro))

    FileXml.write(TextEND)
    FileXml.close()

def input_info() :
    config={}
    print('Please insert required informations')
    config['Naaep']=raw_input("AAEP Name (required) :")
    config['groupPolicy']=raw_input("Group Policy Name (required) :")
    config['numIntprofile']=raw_input("Number Interface profile (required) :")
    config['nameProfile']=raw_input("Interface profile radical Name (required) :")
    config['selector']=raw_input("Selector name (required) :")
    config['numCard']=raw_input("From card number (required) :")
    config['nameCard']=raw_input("Name card (required) :")
    config['fromPort']=raw_input("From port (required) :")
    config['toPort']=raw_input("To port (required) :")
    config['switchProfile']=raw_input("Switch profile name (required) :")
    config['infraName']=raw_input("Infrastructure name (required) :")
    config['range']=raw_input("Start Range (required) :")

    if config['Naaep'] == None or config['groupPolicy'] == None or config['numIntprofile'] == None or config['selector'] == None or config['numCard'] == None or config['nameCard'] == None or config['fromPort'] == None or config['toPort'] == None or config['switchProfile'] == None or config['infraName'] == None or config['range'] == None :
        print("Error parameter insertion")
        sys.exit(0)
    return config

if __name__ == '__main__':
    config={}
    try:
        config['Naaep'] = sys.argv[1]
        config['physical'] = sys.argv[2]
        config['groupPolicy'] = sys.argv[3]
        config['numIntprofile'] = sys.argv[4]
        config['nameProfile'] = sys.argv[5]
        config['selector'] = sys.argv[6]
        config['numCard'] = sys.argv[7]
        config['nameCard'] = sys.argv[8]
        config['fromPort'] = sys.argv[9]
        config['toPort'] = sys.argv[10]
        config['switchProfile'] = sys.argv[11]
        config['infraName'] = sys.argv[12]
        config['range'] = sys.argv[13]

    except Exception as e:
        print str(e)
        config=input_info()
    WriteXmlAttachableAccessEntityProfile(config)
