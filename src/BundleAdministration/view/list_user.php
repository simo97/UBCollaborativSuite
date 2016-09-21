<h4 class="header">Liste des utilisateurs</h4>
<hr>
<table class="bordered striped centered">
    <tr>
        <th data-field='Numero'>Numero</th>
        <th data-field='Nom' >Nom</th>
        <th data-field='Prenom' >Prenom</th>
        <th data-field='Type' >Type</th>
        <th data-field='Matricule' >Matricule</th>
        <th colspan="2" >Actions</th>
    </tr>
    <?php foreach ($data as $user){ ?>
    <tr>
        <td><?php echo $user['id_user']; ?></td>
        <td><?php echo $user['nom']; ?></td>
        <td><?php echo $user['prenom']; ?></td>
        <td><?php echo $user['type_user']; ?></td>
        <td><i class="fa fa-edit"></i></td>
        <td><i class="fa fa-remove"></i></td>
    </tr>
    <?php } ?>
</table>