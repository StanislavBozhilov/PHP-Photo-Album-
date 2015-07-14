<div class="center">
    <h1>Choose album to delete:</h1>
    <form method="post" action="/album/delete">
        <label for="album-id">Choose category: </label>
        <select name="album-id">
            <?php foreach ($this->albums as $album) : ?>
                <option><?= htmlspecialchars($album['id']) . '-' . htmlspecialchars($album['name']) ?></option>
            <?php endforeach ?>
        </select>
        <br/>
        <input type="submit" value="Delete"/>
    </form>
</div>