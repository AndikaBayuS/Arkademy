from __future__ import print_function

data = [
    ["a", "b", "c"],
    ["d", "e", "f"],
    ["g", "h", "i"],
    ["j", "k", "l"]
]

for x in range(0, len(data)):
    for y in range(0, len(data[0])):
        print (data[x][y], end=" "),
    print
