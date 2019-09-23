import base64


def stringToBase64(s):
    return base64.b64encode(s.encode('utf-8'))


def base64ToString(b):
    return base64.b64decode(b).decode('utf-8')


f = open("intermediatedata", "r")
contents = f.read()
# print(contents)

num = base64ToString(contents)
print(num)
