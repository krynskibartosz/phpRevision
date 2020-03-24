<p>Bonjour !</p>

<p>Je sais comment tu t'appel, tu t'appel <?php echo htmlspecialchars($_POST['prenom']); ?>!</p>

<p>Si tu veux changer de prénom, <a href="index.php">Click ici</a></p>

<?php
// ! test si le fichier à bien été envoyée sans erreur
    if (isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0){

        // ! test si le fichier n'est pas trop lourd
        if($_FILES['monfichier']['size'] <= 1000000){

            // ! test si l'extension est autorisée
                //  "pathinfo" nous renvoie un tableau contenant l'extensions du fichiers.
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extension_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            // !(in_array) vérifie si le premier tableau contient un des éléments du second tableau.
            if (in_array($extension_upload, $extension_autorisees)){
                // ! On valide le fichier et on le stock définitivement
                // "move_uploaded_file" prend en 1e param le nom temporaire du fichier & en second le chemin de ou sera stocker le fichiers définitivement.
                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . 
                // "basename" nous renverra le nom complet du fichier "fichier.png"
                basename($_FILES['monfichier']['name']));
                echo "L'envoi a bien été effectué";
            }
        }
    }
?>