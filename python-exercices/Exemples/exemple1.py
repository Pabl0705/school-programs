#! /usr/bin/python3
#-*- coding: utf-8-*-
#
# @edt ASIX M06 Curs 2023-2024
# Alumne: Pablo Ruz
# ----------------------------------------------------
import sys

MAX=5
contador=0
fileIn=sys.stdin

if len(sys.argv) == 2:
    fileIn=open(sys.argv[1],"r")

for line in fileIn:
    contador += 1
    print(line,end="")
    if contador == MAX: break
fileIn.close()
exit(0)