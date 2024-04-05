#! /usr/bin/python3
#-*- coding: utf-8-*-
#
# @edt ASIX M06 Curs 2023-2024
# Alumne: Pablo Ruz
#
# head [-n nlin 5|10|15] file
# default = 10, file o stdin
# 
# ----------------------------------------------------
import sys, argparse

# -------------------------------

parser = argparse.ArgumentParser(\
    description = "MOSTRAR LES N PRIMERES LINEAS",\
    prog = "exemple2.py",\
    epilog = "Hasta luego lucas!")

parser.add_argument("-n","--nlin", type=int,\
                    help="lineas a mostrar", default=10,\
                    metavar="number", choices=[5,10,15])


parser.add_argument("file",type=str,\
                    help="fitxer a processar",\
                    metavar="file")

args = parser.parse_args()

#--------------------------------

MAX=args.nlin
contador=0
fileIn=open(args.file,"r")

for line in fileIn:
    contador += 1
    print(line,end="")
    if contador == MAX: break
fileIn.close()
exit(0)