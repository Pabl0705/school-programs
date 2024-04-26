#! /usr/bin/python3
#-*- coding: utf-8-*-
#
# @edt ASIX M06 Curs 2023-2024
# Alumne: Pablo Ruz
#
# head [-n nlin 5|10|15] file ...
# default = 10
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

parser.add_argument('-v', '--verbose',\
                    action='store_true', dest="verbose",\
                    help="increase action's verbose")

parser.add_argument("file", type=str,\
                    help="fitxer a processar",\
                    metavar="file", nargs="+")

args = parser.parse_args()
print(args)

#--------------------------------

MAX=args.nlin

def headFile(fitxer):
    contador=0
    fileIn=open(fitxer,"r")

    for line in fileIn:
        contador += 1
        print(line,end="")
        if contador == MAX: break
    fileIn.close()
    return

if args.file:
    for file in args.file:
        if args.verbose:
            print("\n Head of",file,"file", 20*"-","\n")

        headFile(file)

exit(0)