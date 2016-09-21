<h4 class="header">Liste des types d'utilisateurs</h4>
<hr>
<table class="bordered striped centered">
    <tr>
        <th data-field='Numero'>Numero</th>
        <th data-field='Nom' >libelle du type</th>
        <th colspan="2" >Actions</th>
    </tr>
    <?php foreach ($data as $user){ ?>
    <tr>
        <td><?php echo $user['id_type']; ?></td>
        <td><?php echo $user['libelle_type']; ?></td>
        <td><i class="fa fa-edit"></i></td>
        <td><i class="fa fa-remove"></i></td>
    </tr>
    <?php } ?>
</table>