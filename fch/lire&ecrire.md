P/lire&écrire dans 1fch i php à besoin des droits chmod qui lui le autoriseront.

Il y a une fonction pour ouvrir un fichier
    => fopen('fch.ext', mode)

    les modes

        r
            Ouvre le fichier en lecture seule. Cela signifie que vous pourrez seulement lire le fichier.

        r+

            Ouvre le fichier en lecture et écriture. Vous pourrez non seulement lire le fichier, mais aussi y écrire (on l'utilisera assez souvent en pratique).

        a

            Ouvre le fichier en écriture seule. Mais il y a un avantage : si le fichier n'existe pas, il est automatiquement créé.

        a+

            Ouvre le fichier en lecture et écriture. Si le fichier n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera ajouté à la fin.



    P/lire dans un fichiers on utilise la méthode "fgets()"

    P/écrire "fputs"


    P/fermer le fichier "fclose()".



    On gros tout sa nous permet d'enregistrer des info sur le serveur. ce n'est pratique que si les info enregistrer sont très simples
    