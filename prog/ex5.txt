Début
saisieValide ← Faux
Répéter
Ecrire("Entrez les heures  : ")
Lire(h)
Ecrire("Entrez les minutes  : ")
Lire(m)
Ecrire("Entrez les secondes : ")
Lire(s)
    Si (h ≥ 0 ET h ≤ 23 **ET m ≥ 0 **ET** m ≤ 59 ET s ≥ 0 ET s ≤ 59)  
      Alors saisieValide <-- Vrai  
        Sinon
          Ecrire("Erreur: Valeurs invalides Heures, Minutes, Secondes")  
    FinSi
Jusqu à saisieValide = Vrai
s <-- s + 1  
Si s = 60  
    Alors  
        s <-- 0  
        m <-- m + 1  
        Si m = 60  
            Alors
                m <--0  
                h <-- h + 1  
                Si h = 24  
                    Alors h <-- 0  
                FinSi 
        FinSi 
FinSi 
Ecrire(m,h,s)  