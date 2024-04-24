# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
#programa.py ruta
# ---------------------------------------
import sys,argparse
from subprocess import Popen,PIPE      # Hem d'evitar conflicte de noms

parser = argparse.ArgumentParser(\
    description = "Show file list",\
    prog = "exemplepopen.py",\
    epilog = "Hasta luego lucas!")

parser.add_argument("file",type=str,\
                    help="fitxer a processar",\
                    metavar="file")

args = parser.parse_args()

# ---------------------------------------

command = ["ls",args.file]    # Aquesta ordre és un subprocess
pipeData = Popen(command, stdout=PIPE)

for line in pipeData.stdout:
    print(line.decode("utf-8"),end="")
exit(0)