TantQue dateValide = Faux Faire
    Ecrire("Entrez le jour (jj) : ")
    Lire(jj)
    Ecrire("Entrez le mois (mm) : ")
    Lire(mm)
    Ecrire("Entrez l'année (aaaa) : ")
    Lire(aaaa)
    dateValide <- Vrai  
    Si mm < 1 OU mm > 12 Alors
        Ecrire("Mois invalid! Doit être entre 1 et 12")
        dateValide <- Faux
    FinSi
    Si dateValide = Vrai Alors
            Si jj < 1 OU jj > 31 Alors
                Ecrire("Jour invalide pour ce mois Doit être entre 1 et 31")
                dateValide <- Faux
            FinSi
        
            Si jj < 1 OU jj > 30 Alors
                Ecrire("Jour invalide pour ce mois Doit être entre 1 et 30")
                dateValide <- Faux
            FinSi
        Sinon
            Si jj < 1 OU jj > 28 Alors
                Ecrire("Jour invalide pour février Doit être entre 1 et 28")
                dateValide <- Faux
            FinSi
        FinSi
    FinSi
    Si aaaa < 0 Alors
        Ecrire("Année invalide Doit être positive")
        dateValide <- Faux
    FinSi
FinTantQue
Ecrire("Format jj/mm/aaaa : ", jj, "/", mm, "/", aaaa)
Ecrire("Format jj-mm-aa : ", jj, "-", mm, "-", aa)