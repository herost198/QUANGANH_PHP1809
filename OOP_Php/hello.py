from urllib.request import urlopen
f = urlopen('http://www.python.org')
print(f.read())