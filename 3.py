from __future__ import print_function


def draw_kotak(draw):
    for i in range(1, draw+1):
        if (i == 1 or i == draw):
            print("*" * draw)
            print("*" * draw)
        else:
            print("*"+" "*(draw-3), end=" ")
            print("*")


draw_kotak(5)
