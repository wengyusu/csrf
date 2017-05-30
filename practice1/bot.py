from ghost import Ghost
import sys
import os
ghost = Ghost()
with ghost.start() as session:
    session.open("result/{0}".format(sys.argv[1]))
    print("succeed")



