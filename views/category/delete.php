<div class="center">
    <h1>Choose category to delete:</h1>
    <form method="post" action="/category/delete">
        <label for="category-id">Choose category: </label>
        <select name="category-id">
            <?php foreach ($this->categories as $category) : ?>
                <option><?= htmlspecialchars($category['id']) . '-' . htmlspecialchars($category['name']) ?></option>
            <?php endforeach ?>
        </select>
        <br/>
        <input type="submit" value="Delete"/>
    </form>
</div>