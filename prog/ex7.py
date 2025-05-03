Début
 
    Ecrire("Donner l'emplacement du lot (A, B ou C) : ")
    Lire(e)
    Ecrire("Donner la surface du lot : ")
    Lire(surface)
    Si (emplacement = 'A' et (surface = 500 ou surface = 1000)) Alors
        Si surface = 500 Alors
            prix_m2<--100
        Sinon
            prix_m2 <-- 90
        FinSi

    SinonSi (emplacement = 'B' et (surface = 500 ou surface = 1000)) Alors
        Si surface = 500 Alors
            prix_m2 <-- 120
        Sinon
            prix_m2 <-- 100
        FinSi

    SinonSi (emplacement = 'C') Alors
        Si surface = 500 Alors
            prix_m2 <--150
        SinonSi surface = 1000 Alors
            Ecrire("Erreur : surface 1000 non disponible à l’emplacement C")
            Sortir
        SinonSi surface <= 300 Alors
            prix_m2 <-- 200
        Sinon
            Ecrire("Erreur : surface invalide pour l’emplacement C")
            Sortir
        FinSi

    Sinon
        Ecrire("Erreur : emplacement ou surface invalide")
        Sortir
    FinSi

    prix_total <-- surface * prix_m2
    Ecrire("Le prix total du lot est : ", prix_total, " dinars")

Fin
