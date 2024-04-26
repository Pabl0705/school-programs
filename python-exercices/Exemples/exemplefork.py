# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
# exemplefork.py

# ---------------------------------------

import sys, os
print("Hola, començament del programa principal")
print("PID pare: ", os.getpid())

pid=os.fork()
if pid != 0:
#   os.wait()
    print("Programa pare:", os.getpid(), pid)
else:
    print("Programa fill: ", os.getpid(), pid)
    while True:
        pass
print("Hasta luego lucas!")
sys.exit(0)