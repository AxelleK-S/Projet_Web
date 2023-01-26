from random import *

role =['animateur','scribe','secrétaire','GestionnaireDeTemps']
membres =['Landry','Rayan','Giselle','Lula','Gloria','Yoann','Navy','Olsenick','Leslie','Hervé','Oneal']
print(role)
n = randint(0,3)
y = randint(0,10)
attribution= []

while    :

    if membres[y] not in attribution and role[n] not in attribution:
        attribution.append(role[n])
        attribution.append(membres[y])

    else:
        n = randint(0,3)
        y = randint(0,10)