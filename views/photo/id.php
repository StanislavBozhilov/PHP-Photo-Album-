<div id="control-panel">
	<ul>
		<li><a href="/photos/add">Upload Photo</a></li>
	</ul>
</div>

<div id="photo" class="photo-holder">
	<h1 class="photos-header">Photo</h1>
	<ul>
	    <?php foreach ($this->viewBag['photo'] as $photo) : ?>
	    	<li><a>
	    		<h1><?= $photo['name'] ?></h1>
	    		<h2>From Category: <?= $photo['categoryName'] ?></h2>
	    		<h2>From Album: <?= $photo['albumName'] ?></h2>
	    		<img src="/<?= $photo['path']?>"/>
	    		</a>
	    	</li>
	    <?php endforeach ?>
	</ul>
</div>