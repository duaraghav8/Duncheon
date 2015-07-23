password = "136ilovebunnies247"

enc = ""

for c in password:
    enc += chr(255-ord(c))

f = open('password.txt', 'w')
f.write(enc)
