On peut créee un session en php tout simplement
    On utilise la fonction "session_start()" Pour lancer une section.

    Cela nous permettra d'accéder au variables superglobale $_SESSIONS sur toute les pages.

    "$_SESSION" nous permet de crée des variables superglobales de sessions qu'on pourrait utiliser s/p+ page

    Pour deconnecter un utilise on utilise la fonction "session_destroy()"
        On peut betement la placée à la fin et après un certain temps d'inactivité sa déconnetra l'utilisateur.


        Si on veut le déconnecter mannuelement
            on crée un lien qui mene vers une page qui appel la fonction "session_destroy".

        