# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
# signals.py

# ---------------------------------------

import sys, os, argparse, signal

# Defined handlers

def sum_time(signum, frame):

    global upper_count
    print("Signal handler with signal", signum)
    signal.alarm(signal.alarm(0) + 60)
    print("60 SECONDS ADDED")
    upper_count += 1

def sub_time(signum, frame):
    
    global down_count
    print("Signal handler with signal", signum)
    actual=signal.alarm(0)
    if actual > 60:
        signal.alarm(actual - 60)
        print("60 SECONDS SUBSTRACTED")
        down_count += 1
    else:
        print("Ignored, not enough time")
    

def reset_time(signum, frame):
    print("Signal handler with signal", signum)
    signal.alarm(args.inicial)
    print("TIMER RESTARTED TO INITIAL VALUE")

def show_time(signum, frame):
    print("Signal handler with signal", signum)
    alarm_time=signal.alarm(0)
    print("Remaining time:", alarm_time)
    signal.alarm(alarm_time)


def show_all_info(signum, frame):
    global upper_count
    global down_count
    print("Signal handler with signal", signum)
    alarm_time=signal.alarm(0)
    print("Uppers:", upper_count)
    print("Downs:", down_count)
    print("Time Remaining: ", alarm_time)
    signal.alarm(alarm_time)

# Verificar i creació d'arguments

parser = argparse.ArgumentParser(\
    description = "MOSTRAR LES N PRIMERES LINEAS",\
    prog = "signals.py",\
    epilog = "Hasta luego lucas!")

parser.add_argument("-i","--inicial", type=int,\
                    help="temps d'inicialització de l'alarma en segons", default=60,\
                    metavar="number", dest="inicial")

#Definició de variables

args = parser.parse_args()
upper_count = 0
down_count = 0

# Assignar handlers als senyals

signal.alarm(args.inicial)  # Set a 60 seconds alarm

signal.signal(signal.SIGUSR1,sum_time)    #10 SIGUSR1

signal.signal(signal.SIGUSR2,sub_time)     #12 SIGUSR2

signal.signal(signal.SIGHUP,reset_time)     #1 SIGHUP

signal.signal(signal.SIGTERM,show_time)     #15 SIGTERM

signal.signal(signal.SIGALRM,show_all_info)  #14 ALARM

signal.signal(signal.SIGINT, signal.SIG_IGN) #2 SIGINT, IGNORED

print(os.getpid())

while True:
    pass
