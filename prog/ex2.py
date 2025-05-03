début
Ecrire("Entrez  entier a")
Lire(a)
Ecrire("Entrez entier b")
Lire(b)
Ecrire("Entrez entier c")
Lire(c)
Si a = 0 Alors
    Si b = 0 Alors
        Si c = 0 Alors
            Ecrire("L'équation est vraie pour tout x réel")
        Sinon:
            Ecrire("L'équation ", c, "  n'a pas de solution")
        FinSi
   
Sinon:
    d <- b*b - 4*a*c
    Si d < 0 Alors
        Ecrire("l'équation n'a pas de solution réelle ")
    Sinon
        Si d = 0 Alors
            x1 <- -b / (2*a)
            Ecrire( x1)
    FinSi
FinSi
Fin