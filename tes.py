import requesocks
import requests

s = requesocks.session()
s.proxies = {'http':  'socks5://127.0.0.1:9050',
            'https': 'socks5://127.0.0.1:9050'}

s.get('https://ipwhois.app/json/')
print(s)
