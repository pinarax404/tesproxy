import requesocks
import requests

session = requesocks.session()
session.proxies = {
    'http': 'socks5://127.0.0.1:9050',
    'https': 'socks5://127.0.0.1:9050'
}
r = session.get('https://www.instagram.com')
print(r.status_code)
print(r.headers['content-type'])
print(r.text)
