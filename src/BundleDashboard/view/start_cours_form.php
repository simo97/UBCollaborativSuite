
<form id="create_start_courses" action="#http://localhost/UB_Collaboration/dashboard/cours/startCourses" method="post">
    <div class="modal-content">
        <h4 class="header">Configurer une nouvelle session de cour video svp !!!!</h4 >
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_nom">Le nom de la session </label>
                <input type="text" required name="nom" id="lbl_nom" />
            </div>
            <div class="input-field col s6 ">
                <label for="lbl_pnom">Message de bienvenu</label>
                <input type="text" name="wlc_msg" id="wlc_msg" />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_mat">Mot de passe pour l'enseignant</label>
                <input type="password" required name="pass_mod" id="pass_mod" />
            </div>
            <div class="input-field col s6 ">
                <label for="lbl_mat">Mot de passe pour l'enseignant (repeter)</label>
                <input type="password" required name="pass_mod2" id="pass_mod2" />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 ">
                <label for="lbl_mat">Mot de passe pour les etudiants</label>
                <input type="password" required name="pass_stud" id="pass_stud" />
            </div>
            <div class="input-field col s6 ">
                <label for="lbl_mat">Mot de passe pour les etudiants (repeter)</label>
                <input type="password" required name="pass_stud2" id="pass_stud2" />
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="reset" id="submit_user" class="btn red waves-effect waves-red" value="annuler">²
        <input type="submit" id="submit_user" class="btn green waves-effect waves-green" value="terminer">
    </div>
</form>