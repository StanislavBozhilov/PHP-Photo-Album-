<div class="center">
    <h1>All albums</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>CategoryId</th>
        </tr>
        <?php foreach ($this->albums as $album) : ?>
            <tr>
                <td><?= htmlspecialchars($album['id']) ?></td>
                <td><a href="/photo/album/<?php echo $album['id'] ?>"><?= htmlspecialchars($album['name']) ?></a></td>
                <td><?= htmlspecialchars($album['category_id']) ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <button onclick="location.href='/album/create'">Add New Album</button>
    <button onclick="location.href='/album/delete'">Delete Album</button>
</div>