from ghost import Ghost
import sys
import os
from pyvirtualdisplay import Display

display = Display(visible=0, size=(800, 800))
display.start()
ghost = Ghost()
with ghost.start() as session:
    session.open("{0}/confirm.php".format(sys.argv[3]), method='post', body="username={0}&password={1}")
    # print("{0}/csrf/practice1/{1}".format(sys.argv[1],sys.argv[2]))
    session.open("{0}/{1}".format(sys.argv[1], sys.argv[2]))
    print("succeed")
display.stop()



