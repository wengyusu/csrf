from ghost import Ghost
from pyvirtualdisplay import Display
import sys
import os
display = Display(visible=0, size=(800,800))
display.start()
ghost = Ghost()
with ghost.start() as session:
    session.open("{0}/csrf/practice1/confirm.php".format(sys.argv[1]),method='post',body='username=admin&password=6965bbadaa25af2e23816c3d9194301c')
    print("{0}/csrf/practice1/{1}".format(sys.argv[1],sys.argv[2]))
    session.open("{0}/csrf/practice1/{1}".format(sys.argv[1],sys.argv[2]))
    print("succeed")


