<div id="control-panel">
	<ul>
		<li><a href="/photo/add">Upload Photo</a></li>
	</ul>
</div>

<div id="photos" class="photo-holder">
	<h1 class="photos-header">Photos</h1>
	<ul>
	    <?php foreach ($this->viewBag['albumPhotos'] as $photo) : ?>
        <div>
            <h4><?= $photo['name'] ?></h4>
            <img src="/<?= $photo['path']?>"/>
        </div>
	    <?php endforeach ?>
	</ul>
</div>

