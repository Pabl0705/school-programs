import sys, os

pid=os.fork()

if pid != 0:
#   os.wait()
    print("Programa pare:", os.getpid(), pid)
    sys.exit(0)

os.execvp ("python3",["python3","signals.py","-i",70])