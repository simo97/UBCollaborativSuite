  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    
  </div>
<ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
       <div class="row">
            <div class="col col s4 m4 l4">
                <img src="http://localhost/UB_Collaboration/assets/img/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col col s8 m8 l8">
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="http://localhost/UB_Collaboration/authentification/default/unauth"><i class="fa fa-mercury"></i> Logout</a></li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"> <?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?>
                    <i class="fa fa-arrows-v right"></i>
                </a>
                <p class="user-roal"><?php echo $_SESSION['libelle_type']; ?><i class=""></i></p>
            </div>
        </div>
    </li>
    <li  class=" active">
        <a href="http://localhost/UB_Collaboration/dashboard/" class="waves-effect waves-cyan"><i class="fa fa-desktop"></i> Mon compte</a>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-mouse-pointer"></i>Cour</a>
              <div class="collapsible-body">
                <ul>
                  <li><a id="start_course" href="#http://localhost/UB_Collaboration/dashboard/cours/ajaxStartCoure"><i class="fa fa-plus "></i>Demarrer</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-mobile"></i>Etudiants</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#"><i class="fa fa-plus "></i>Liste</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-user"></i>Support</a>
              <div class="collapsible-body">
                <ul>
                    <li><a href="#" id="btn_add_user"><i class="fa fa-plus "></i>Nouveau</a></li>
                    <li><a href=#id="btn_list_user"><i class="fa fa-list"></i>Liste</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-play"></i>Reunion</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#"><i class="fa fa-plus "></i>Ajouter</a></li>
                  <li><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                </ul>
              </div>
            </li>
        </ul>
    </li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>