# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
# popen_sql.py -c num_cli [-c num_cli ...]
# ---------------------------------------
import sys,argparse
from subprocess import Popen,PIPE      # Hem d'evitar conflicte de noms

parser = argparse.ArgumentParser(\
    description = "Show file list",\
    prog = "popensqlinjectat2.py",\
    epilog = "Hasta luego lucas!")

parser.add_argument("-c", "--clientes", type=int,\
                    help="consulta de base de dades",\
                    action="append", dest="num_clie_list", required=True)

args = parser.parse_args()

# ---------------------------------------

command = "PGPASSWORD=passwd psql -qtA -F',' -h localhost -U postgres training"

pipeData = Popen(command, shell=True, bufsize=0, universal_newlines=True, stdin=PIPE, stderr=PIPE, stdout=PIPE)

for num_clie in args.num_clie_list:
    sqlStatement="select * from clientes where num_clie=%s;" % (num_clie)
    pipeData.stdin.write(sqlStatement+"\n")
    line=pipeData.stdout.readline()
    print(line,end="")
exit(0)

# 2101, 2102, 2103