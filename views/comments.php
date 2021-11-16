<table class="table table-bordered table-stripped">
    <thead>
        <th><?php  ?></th>
    </thead>
    <tbody>
        <?php foreach ($data as $d):?>
        <tr>
            <td><?php echo $d['id'] ?></td>
            <td><?php echo $d['description'] ?></td>
            <td><?php echo $d['post_id'] ?></td>
            <td><?php echo $d['created_at'] ?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>