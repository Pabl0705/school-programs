import sys, os, signal

def hola(signum, frame):
    print("Signal received:", signum)
    print("Hola")

def adeu(signum, frame):
    print("Signal received:", signum)
    print("Adeu")
    sys.exit(0)

print("Hola, començament del programa principal")
print("PID pare: ", os.getpid())

pid=os.fork()
if pid != 0:
    sys.exit(0)
else:
    print("Programa fill: ", os.getpid(), pid)

    signal.signal(signal.SIGUSR1,hola)    #10 SIGUSR1

    signal.signal(signal.SIGUSR2,adeu)     #12 SIGUSR2

    while True:
        pass


