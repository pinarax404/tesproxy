import requesocks
import requests

session = requesocks.session()
session.proxies = {
    'http': 'socks5://localhost:9050',
    'https': 'socks5://localhost:9050'
}
r = session.get('http://ip-api.com/php/')
print(r.status_code)
print(r.headers['content-type'])
print(r.text)
