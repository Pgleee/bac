Début
B <-- Faux
Répéter
Ecrire("Entrez le jour (jj) : ")
Lire(jj)
Ecrire("Entrez le mois (mm) : ")
Lire(mm)
Ecrire("Entrez l'année (aaaa) : ")
Lire(aaaa)


 
    Si (mm < 1) OU (mm > 12) OU (jj < 1) OU (jj > 31) OU (aaaa < 1)  
        AlorsEcrire("Date invalide! Respectez les formats: 1≤mm≤12, 1≤jj≤31")  
    FinSi  
Jusquà (mm ≥ 1) ET (mm ≤ 12) ET (jj ≥ 1) ET (jj ≤ 31) ET (aaaa ≥ 1)  

Si(aaaa MOD 4 = 0 ET aaaaMOD 100 ≠ 0) OU(aaaa MOD 400 = 0)  
    Alors B <-- Vrai 
    Sinon B <-- Faux  
FinSi  
 jj ← jj + 1  
Si jj > JourMax  
    Alors  
        jj ← 1  
        mm <--mm + 1  
        Si mm > 12  
            Alors 
                mm <-- 1  
                aaaa <-- aaaa + 1  
            FinSi  
    FinSi 

 
Ecrire("Date du lendemain : ", jj, "/", mm, "/", aaaa)
fin