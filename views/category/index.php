<div class="center">
    <h1>All categories</h1>
    <table>
        <?php foreach ($this->categories as $category) : ?>
            <tr>
<!--                <td><a href="/photo/album/--><?php //echo $category['id'] ?><!--">--><?//= htmlspecialchars($category['name']) ?><!--</a></td>-->
                <td><?= htmlspecialchars($category['name']) ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <button onclick="location.href='/category/create'">Add New Category</button>
    <button onclick="location.href='/category/delete'">Delete Category</button>
</div>