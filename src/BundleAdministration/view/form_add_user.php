
<form id="add_user" action="http://localhost/UB_Collaboration/administration/utilisateur/saveUtilisateur" method="post">
    <div class="modal-content">
        <div class="header">Ajouter un utilisateur</div >
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_nom">Le nom ici</label>
                <input type="text" name="nom" id="lbl_nom" />
            </div>
            <div class="input-field col s6 ">
                <label for="lbl_pnom">Le prenom ici</label>
                <input type="text" name="prenom" id="lbl_pnom" />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_mat">Le matricule</label>
                <input type="text" name="matricule" id="matricule" />
            </div>
            <div class="input-field col s6 ">
                <select class="browser-default" name="type_utilisateur">
                    <option value="" disabled selected>Le type d'utilisateur</option>
                    <?php foreach ($data as $type): ?>
                    <option value="<?php echo $type['id_type']; ?>"> <?php echo $type['libelle_type']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="reset" id="submit_user" class="btn red waves-effect waves-red" value="annuler">²
        <input type="submit" id="submit_user" class="btn green waves-effect waves-green" value="terminer">
    </div>
</form>