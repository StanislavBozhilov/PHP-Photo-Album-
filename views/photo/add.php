<form method="POST" action="/photo/add" enctype="multipart/form-data">
	<h1 class="photos-header">Upload Photo</h1>
    <div class="center">
        <div>
            <label for="albumId">Album:</label>
            <select name="album" id="albumId">
                <?php foreach ($this->viewBag['albums'] as $album) : ?>
                    <option value="<?= $album['id'] ?>"> <?= $album['name']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="fileToUpload">Choose Photo:</label>
            <input type="file" name="fileToUpload" id="fileToUpload"/>
        </div>
        <input type="submit" value="Add Photo" />
    </div>
</form>