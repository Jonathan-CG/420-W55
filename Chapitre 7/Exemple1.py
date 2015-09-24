# -*- coding: utf-8 -*-

import urllib.request, codecs, sys
from bs4 import BeautifulSoup

response = urllib.request.urlopen('http://python.org/')
html = response.read()

#print (html)

soup = BeautifulSoup(html)

print (soup.prettify().encode('cp850', 'replace').decode('cp850'))