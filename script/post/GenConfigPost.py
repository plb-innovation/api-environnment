__author__ = 'Amorim'

import sys

def WriteConfigRequest(config):
    FileConfig=open("/var/www/API-frontend/config/request.cfg","w+")

    TextInfo='''host: '''+config['host']+'''
name:  '''+config['name']+'''
passwd:  '''+config['passwd']+'''
tests:
    - type: '''+config['type']+'''
      path: '''+config['path']+'''
      file: '''+config['file']+'''
      wait: '''+config['wait']+'''
'''
    FileConfig.write(TextInfo)
    FileConfig.close()


def input_info() :
    config={}
    print('Please insert required informations')
    config['host']=raw_input("Host Name (required) :    ")
    config['name']= raw_input("Login (required) :         ")
    config['passwd']=raw_input("Password (required) : ")
    config['type'] =raw_input("Type File (required) : ")
    config['path'] =raw_input("Path (required) : ")
    config['file'] =raw_input("File Name (required) : ")
    config['wait'] =raw_input("Wait (required) : ")

    if config['host'] == None or config['name'] == None or config['passwd'] == None or config['type'] == None or config['path'] == None or config['file'] == None or config['wait'] == None:
        print("Error parameter insertion")
        sys.exit(0)
    return config

if __name__ == '__main__':
    config={}
    config['test']='type'
    config['test']='path'
    config['test']='file'
    config['test']='wait'

    try:
        config['host'] = sys.argv[1]
        config['name'] = sys.argv[2]
        config['passwd'] = sys.argv[3]
        config['type'] = sys.argv[4]
        config['path'] = sys.argv[5]
        config['file'] = sys.argv[6]
        config['wait'] = sys.argv[7]
    except Exception as e:
        print str(e)
        config=input_info()
    WriteConfigRequest(config)