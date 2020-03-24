<p>
    Cette page ne contient que du HTML.
</p>

<p>
    Veuillez taper votre prénom:
</p>

<form action="cible.php" method="post">
<p>
    <input type="test" name="prenom">
    <input type="submit" name="Valider">
</p>
    <textarea name="message" rows="8" cols="45">
        Votre message ici
    </textarea>

    <select name="choix">
        <option value="choix1">Choix 1</option>
        <option value="choix2">Choix 2</option>
        <option value="choix3" selected="selected">Choix 3</option>
        <option value="choix4">Choix 4</option>
    </select>
    <p>
        <input type="checkbox" name="case" id="case" checked="checked"/> <label for="case">Ma case à cocher</label>
    </p>
    <p>Aimer vous les frites?</p>
    <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
    <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
    <input type="hidden" name="pseudo" value="Mateo21" />
</form>

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>