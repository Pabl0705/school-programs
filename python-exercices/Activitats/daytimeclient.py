# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
# daytime-client.py
# ---------------------------------------

import sys,socket

HOST = ''
PORT = 50001
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
#s.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
s.connect((HOST, PORT))

while True:
    data = s.recv(1024)
    if not data: break
    print("Received:", repr(data))

s.close()
sys.exit(0)