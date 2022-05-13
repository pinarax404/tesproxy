import mechanize
import requests
import re
import logging
import argparse
import sys

reload(sys)
sys.setdefaultencoding('utf8')

class starting:
    def __init__(self):
        logging.basicConfig(
            level={
                True: logging.DEBUG,
                False: logging.INFO
            }[arg.level],
            format='\r%(levelname)s:%(name)s: %(message)s'
        )

        self.__main__()

    def _browser_options(self):
        br = mechanize.Browser()
        br.set_handle_robots(False)
        br.set_handle_equiv(True)
        br.set_handle_referer(True)
        br.set_handle_redirect(True)
        if arg.proxy:
            br.set_proxies({"http": arg.proxy,
                "https": arg.proxy,
            })
        br.set_handle_refresh(
            mechanize._http.HTTPRefreshProcessor(),
            max_time = 10
        )
        br.addheaders = [('User-agent', "Mozilla/5.0 (Linux; Android 8.1.0; DRA-L01 Build/HUAWEIDRA-L01; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/100.0.4896.127 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/364.0.0.24.132;]")]

        return br

    def _open_ipwhois(self):
        return self.br.open('https://ipwhois.app/json/').read()

    def __main__(self):
        self.br = self._browser_options()
        res_ip = self._open_ipwhois()
        logging.info(res_ip)

if __name__ == '__main__':
    parse = argparse.ArgumentParser()
    parse.add_argument( '-p', metavar='<IP:PORT>', dest='proxy',
        help='set proxy')
    arg = parse.parse_args()

    if arg.proxy:
        try:
            print('')
            starting()
        except KeyboardInterrupt:
            logging.error('user interrupt..\n')
    else:
        parse.print_help()
