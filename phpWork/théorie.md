Url === Uniform Ressource Locator

    =>  celà sert à représenter un adresse sur le web


https://monsite.com/bonjour.php?nom=Dupont&prenom=Jean


https://monsite.com.bonjour.php? === nom de la page php


nom === nom du 1er paramètre
Dupont === valeur du premier paramètre

on peut avoir autant de paramètre que l'on veut

Une URL ne devrait pas dépasser 256caractères.

Ensuite pour récuperer les informations et les afficher dans l'URL on peut utiliser la méthode __GET['paramètres'];


pour afficher la valeur du paramètres.


P/la sécurité du site on va utiliser une méthode appeler isset()
    => elle va nous permettre de vérifier si il y a belle et bien une variable qui existe
    Du coup on peut renseigner une erreur.
    