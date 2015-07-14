<div id="control-panel">
    <ul>
        <li><a href="/albums/add">Add Album</a></li>
    </ul>
</div>

<div id="photo" class="photo-holder">
    <h1 class="photos-header">Photo</h1>
    <ul>
        <?php foreach ($this->albums as $album) : ?>
            <li>
                <h1><?= $album['name'] ?></h1>
            </li>
        <?php endforeach ?>
    </ul>
</div>