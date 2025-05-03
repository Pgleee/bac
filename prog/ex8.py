Début
    Ecrire("Donner la catégorie de l’employé (A, B ou C) : ")
    Lire(categorie)

    Ecrire("Donner le nombre d’heures supplémentaires : ")
    Lire(nb_heures)
         
    Si (categorie =! 'A' et categorie =! 'B' et categorie =! 'C') ou (nb_heures < 0) Alors
        Ecrire("Erreur : saisie invalide ")
    FinSi
    sinon
    si categorie faire
        ('A') :
            salaire_base <-- 600
            prix_heure_supp <-- 5
        ('B') :
            salaire_base <-- 700
            prix_heure_supp <-- 10
        ('C') :
            salaire_base <-- 900
            prix_heure_supp <--15
    Fin si
    salaire_final ← salaire_base + (nb_heures * prix_heure_supp)

    Ecrire("Le salaire final de l’employé est : ", salaire_final, " unités")

Fin
