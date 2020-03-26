Les coocki sont des info tmp que l'on stock sur l'ordi du visiteur.

Pour écrire un coockie on utilise la méthode "setcookie".
    elle contient en général 3 paramètre
    1)  nom du cookie
    2) valeur du coockie
    3) date d'expiration du coockie en timestamp(nbr de seconde depuis 1970)

    Si vous voulez supprimer le cookie dans un an, il vous faudra donc écrire :  time() + 365*24*3600 . Cela veut dire : timestamp actuel $+$ nombre de secondes dans une année. Cela aura pour effet de supprimer votre cookie dans exactement un an.

    <?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600); ?>


    P/ avoir un coockie sécurisé
        =>
            <?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>

            le dernier param true nous active le mode (htppOnly) qui nous permet de le rendre plus sécurisé



    P/ récupérer la valeur d'un cocckie on utilise la variable $_SESSION[''].


