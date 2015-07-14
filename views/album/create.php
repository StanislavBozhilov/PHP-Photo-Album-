<div class="center">
    <h1>Create new album: </h1>
    <form action="/album/create" method="post">
        <label for="album-name">Album Name: </label>
        <input type="text" name="album-name"/>
        <br/>
        <label for="category-id">Choose category: </label>
        <select name="category-id">
            <?php foreach ($this->category as $category) : ?>
                <option><?= htmlspecialchars($category['id']) . '-' . htmlspecialchars($category['name']) ?></option>
            <?php endforeach ?>
        </select>
        <br/>
        <input type="submit" value="Add"/>
    </form>
</div>