#! /usr/bin/python3
#-*- coding: utf-8-*-
#
# @edt ASIX M06 Curs 2023-2024
# Alumne: Pablo Ruz
# ----------------------------------------------------
import argparse
parser = argparse.ArgumentParser(\
    description = "Programa d'exemple d'arguments",\
    prog = "exemple2.py",\
    epilog = "Hasta luego lucas!")

parser.add_argument("-n","--nom", type=str,\
                    help="nom usuari")


parser.add_argument("-e","--edat", type=int,\
                    dest="userEdat", help="edat a processar",\
                    metavar="edat")
args = parser.parse_args()

print(args)
print(args.userEdat,args.nom)
exit(0)