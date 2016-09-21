<h4 class="header">Liste des Matieres</h4>
<hr>
<table class="bordered striped centered">
    <tr>
        <th data-field='Numero'>Numero</th>
        <th data-field='Nom' >Nom</th>
        <th data-field='libelle' >libelle</th>
        <th data-field='Coef' >Coef</th>
        <th data-field='Tempd' >Temps</th>
        <th colspan="2" >Actions</th>
    </tr>
    <?php foreach ($data as $matiere){ ?>
    <tr>
        <td><?php echo $matiere['id_mat']; ?></td>
        <td><?php echo $matiere['nom']; ?></td>
        <td><?php echo $matiere['libelle']; ?></td>
        <td><?php echo $matiere['coef']; ?></td>
        <td><?php echo $matiere['temps']; ?></td>
        <td><i class="fa fa-edit"></i></td>
        <td><i class="fa fa-remove"></i></td>
    </tr>
    <?php } ?>
</table>