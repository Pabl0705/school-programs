# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
# daytime-server.py
# ---------------------------------------

import sys,socket
from subprocess import Popen,PIPE 

HOST = ''
PORT = 50001
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)

s.bind((HOST,PORT))
s.listen(1)
conn, addr = s.accept()
print ("Conn: ", type(conn), conn)
print ("Connected by:", addr)

command = "date"
pipeData = Popen(command, shell=True, stdout=PIPE)

for line in pipeData.stdout:
    conn.send(line)

conn.close()
sys.exit(0)