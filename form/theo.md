Dans une balise <form> on a 2 méthode importante
    
    la méthode (methode)
    &
    la cible(action) défini la page qui revcois les donnée

        GET :
            les données transiteront par l'URL

        POST:
            Permet d'envoyer autant de donnée que l'on veut





    P/ écahpper du code html il faut utilisr la fonction (htmlspecialchars)
        elle transforme les chevrons des balises "<>" en "&lt".
        Cela nous permettra d'afficher la balise au lieu de l'executer.

        
            

    On peut permettre à l'utilisateur d'uploader un fichier
    On peut le faire tout simplement en html 
    avec une balise input de type file

    Avec la méthode $_FILES['']
        On peut récuperer les informations concernant le fichier.
        comme:
            le nom du fichier,
            le type,
            la taille,
            l'emplacement temporaire du fichier(qui attend de savoir si le serveur l'enregistre ou pas),
            Un code d'erreur pour savoir si l'envoie c'est bien effectuer ou pas.(0) si il y en a pas