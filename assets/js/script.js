$(".dropdown-button").dropdown();
$(".button-collapse").sideNav();

 
  $('.h').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 ,// Creates a dropdown of 15 years to control year
    format : 'yyyy/mm/dd'
  });
  
  $(document).ready(function(){
    $('ul.tabs').tabs();
    $('.modal-trigger').leanModal();
    $('select').material_select();
    Materialize.toast('Bonjour administrateur comment allez-vous aujourd\'hui ?', 5000);
    $('.button-collapse').sideNav({
            //menuWidth: 250, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
        }
    );
    $(".dropdown-button").dropdown();
  });
  
  
  //la partie pour AJAX
  //appel de du formulaire d'ajout de l'utilisateur
  $('#btn_add_user').click(function(){
      //alert('on commence0');
     $.get("http://localhost/UB_Collaboration/Administration/utilisateur/ajaxAddUtilisateur",
        function(data,status){
            $('#modal1').html(data);
            $('#modal1').openModal();
        });
  });
  
  //appel du formulaire d'ajout de type par AJAX
  $('#btn_add_type').click(function(){
      //alert('on commence0');
     $.get("http://localhost/UB_Collaboration/Administration/utilisateur/ajaxAddType",
        function(data,status){
            
            $('#modal1').html(data);
            $('#modal1').openModal();
        });
  });
  
  //appel AJAX du formaulaire d'ajout de matiere
  $('#btn_add_matiere').click(function(){
      //alert('on commence0');
     $.get("http://localhost/UB_Collaboration/Administration/matiere/ajaxAddMatiere",
        function(data,status){
            
            $('#modal1').html(data);
            $('#modal1').openModal();
        });
  });

  //appel ajx pour le formulaire de creation et de demarrage de session
  $('#init_cours').click(function(){
      //alert('on commence0');
     $.get("http://localhost/UB_Collaboration/Dashboard/cours/ajaxStartCoure",
        function(data,status){
            $('#contenu').html(data)
            //$('#modal1').html(data);
            //$('#modal1').openModal();
        });
  });
  
$('#submit_user').submit(function(event){
    e.preventDefault();
    return;
});

$('#chk_all').click(function(){
   
    if($('#chk_all').is(':checked') === true){//si c'est check
        $('input[type=checkbox]').each(function(){
            $(this).prop('checked',true);
        });
    }else{//le cas contraire ici
        $('input[type=checkbox]').each(function(){
            $(this).prop('checked',false);
        });
    }
});

$('#add_user').on('submit',function(e){
    e.preventDefault();
    console.log('adonis');
    alert($this.serialize());
//    var $this = $(this); 
//    //start creating the login whit the name
//    var pass = 'new_user';
//    var login = $('#nom').val();
//    var tab_data = new Array(pass,login) + $this.serialize();  
//    alert ('tab_data');
//    return;
//    $.ajax({
//        url: 'http://localhost/UB_Collaboration/Administration/utilisateur/saveUtilisateur',
//        type: 'post',
//        data: tab_data,
//        success : function(html){
//            alert(html);
//        }
//    });
//    
});

 function control_form(){
    if($('#pass_mod').val() != $('#pass_mod2').val()){
      alert('ls champs de mot de passe de l\'administrateur sont differents');
      return false;
    }

    if($('#pass_stud').val() != $('#pass_stud2').val()){
      alert('ls champs de mot de passe de l\'etudiant sont differents');
      return false;
    }

    return true;
 }
 
$('#start_course').click(function(){
    $.get(
        'http://localhost/UB_Collaboration/Dashboard/cours/startCourses',
        function(data,status){
            if(data == 'Ok'){
                $('#link_curses').html('<a id="join_tech" target=_blanck class="black-text" href="http://localhost/UB_Collaboration/Dashboard/cours/joinCourseAsTeacher">Demarer le cour </a>');
            }
        }
    );
    
});

//$('#join_tech').click(function(){
//    
//});