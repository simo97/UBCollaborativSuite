
<form id="" action="http://localhost/UB_Collaboration/administration/matiere/saveMatieres" method="post">
    <div class="modal-content">
        <div class="header">Ajouter un type d'utilisateur</div >
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_nom">Le nom ici</label>
                <input type="text" name="nom" id="lbl_nom" />
            </div>
            <div class="input-field col s6 ">
                <label for="lbl_coef">coeficient</label>
                <input type="text" name="coef" id="lbl_coef" />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_tmp">Temps(heures)</label>
                <input type="text" name="temps" id="lbl_tmp" />
            </div>
            <div class="input-field col s6 ">
                <label for="lbl_lib">Libelle</label>
                <input type="text" name="libelle" id="lbllib" />
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="reset" id="submit_user" class="btn red waves-effect waves-red" value="annuler">²
        <input type="submit" id="submit_user" class="btn green waves-effect waves-green" value="terminer">
    </div>
</form>