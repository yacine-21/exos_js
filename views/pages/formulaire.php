<form action="#" method="get" id="inscription">
    <fieldset>
    <legend>Inscription</legend>
    <p><label>Nom<input type="text" name="nom"></label></p>
    <p><label>Prénom<input type="text" name="prenom"></label></p>
    <p><label>Tel<input type="text" maxlength="10" name="telephone"></label></p>
    <p><label>Email<input type="text" name="mail"></label></p>
    <p><input type="submit" name="valider" value="Valider"></p>
    </fieldset>
</form>

<style>
.erreur{
     background: red;
}
</style>


<script src="../../assets/js/lib/formulaire.js"></script>