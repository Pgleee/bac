Début
    Répéter
        Ecrire("Donner un entier X  : ")
        Lire(X)
    Jusquà X mod 3 = 0


    Répéter
        Ecrire("Donner un réel Y  : ")
        Lire(Y)
    Jusquà Y >= -5 et Y <= 55


    Répéter
        Ecrire("Donner l'opérateur (+, -, *, /, %) : ")
        Lire(op)
    Jusquà op = '+' ou op = '-' ou op = '*' ou op = '/' ou op = '%'

    Si op faire
        '+' : resultat <-- X + Y
        '-' : resultat <-- X - Y
        '*' : resultat <-- X * Y
        '/' :
        Sinon 
            Si Y =! 0 Alors
                resultat <--X / Y
            Sinon
                Ecrire("Erreur : division par zéro")
                Sortir
            FinSi
            FinSi 
        '%' :
            Si Y =! 0 Alors
                resultat <-- X mod Y
            Sinon
                Ecrire("Erreur : division par zéro")
                Sortir
            FinSi
    FinSelon


    Ecrire("Le résultat de l'opération est : ", resultat)

Fin
 