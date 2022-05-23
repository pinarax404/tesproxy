import requesocks
import requests

s = requesocks.session()
s.proxies = {'http':  'socks5://localhost:9050',
            'https': 'socks5://localhost:9050'}

s.get('https://ipwhois.app/json/').json()
print(s)
