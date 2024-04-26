import sys, os
print("Hola, començament del programa principal")
print("PID pare: ", os.getpid())

pid=os.fork()
if pid != 0:
#   os.wait()
    print("Programa pare:", os.getpid(), pid)
    sys.exit(0)

# Programa fill

#os.execv ("/usr/bin/ls",["/usr/bin/ls", "-la","/"])
#os.execl ("/usr/bin/ls","/usr/bin/ls", "-la","/")
#os.execvp ("uname",["uname", "-a"])
#os.execlp ("ls","ls", "-la","/")
os.execle ("/bin/bash","/bin/bash", "show.sh", {"nom":"pere", "edat":"25"})


