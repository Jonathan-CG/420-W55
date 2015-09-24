import urllib.request
from bs4 import BeautifulSoup

response = urllib.request.urlopen('http://python.org/')
html = response.read()
# Lecture de l'objet et enregistrement de la page dans s.
response.close()

#print(html)
soup = BeautifulSoup(html)
#print (soup)

links = soup.find_all('a')
for link in links:
    names = link.contents[0]
    fullLink = link.get('href')
    
    # Par la suite on peut simplement les afficher
    if (names.string != None):
        print (names.string + " " + fullLink)

