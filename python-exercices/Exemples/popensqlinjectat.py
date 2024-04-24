# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
#exemplepopensql.py ruta
# ---------------------------------------
import sys,argparse
from subprocess import Popen,PIPE      # Hem d'evitar conflicte de noms

parser = argparse.ArgumentParser(\
    description = "Show file list",\
    prog = "exemplepopen.py",\
    epilog = "Hasta luego lucas!")

parser.add_argument("sqlStatement", type=str,\
                    help="consulta de base de dades")

args = parser.parse_args()

# ---------------------------------------

command = "PGPASSWORD=passwd psql -qtA -F',' -h localhost -U postgres training"

pipeData = Popen(command, shell=True, bufsize=0, universal_newlines=True, stdin=PIPE, stderr=PIPE, stdout=PIPE)

pipeData.stdin.write(args.sqlStatement+"\n\q\n")
for line in pipeData.stdout:
    print(line,end="")
exit(0)