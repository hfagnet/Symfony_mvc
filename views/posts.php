

<table class="table table-bordered table-stripped">
    <thead>
        <th>#</th><th>Titre</th><th>Description</th><th>Actif ?</th><th>Crée le</th><th>Commentaires</th>
    </thead>
    <tbody>
        <?php foreach ($data as $d):?>
        <tr>
            <td><?php echo $d['id'] ?></td>
            <td><?php echo $d['title'] ?></td>
            <td><?php echo $d['description'] ?></td>
            <td><?php echo $d['active'] ?></td>
            <td><?php echo $d['created_at'] ?></td>
            <td><a href="index.php?action=comments-list&id=<?php echo $d['id'];?>"><button>Voir</button></a></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>