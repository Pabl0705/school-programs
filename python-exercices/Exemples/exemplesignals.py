# /usr/bin/python3
#-*- coding: utf-8-*-
# @ Abril 2024
# exemplesignals.py
# ---------------------------------------

import sys, os, signal

def myhandler(signum, frame):
    print("Signal handler with signal: ", signum)
    print("Sayounara")
    sys.exit(0)

def handler2(signum, frame):
    print("Signal handler with signal", signum)
    print("No hem dona la gana de plegar!")

# Assignar un handler al senyal

signal.alarm(60)  # Set a 60 seconds alarm

signal.signal(signal.SIGUSR1,myhandler)    #10 SIGUSR1

signal.signal(signal.SIGUSR2,handler2)     #12 SIGUSR2

signal.signal(signal.SIGALRM,myhandler)     #14 SIGALRM

signal.signal(signal.SIGINT, signal.SIG_IGN) #15 SIGTERM, IGNORED

print(os.getpid())

while True:
    pass
