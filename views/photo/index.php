<div id="control-panel">
	<ul>
		<li><a href="/photo/add">Upload Photo</a></li>
	</ul>
</div>

<div id="photos" class="photo-holder">
	<h1 class="photos-header">All Photos</h1>
	<ul>
	    <?php foreach ($this->viewBag['photos'] as $photo) : ?>
            <div>
                <h4><?= $photo['name'] ?></h4>
                <!--	    		<h6>Category: --><?//= $photo['categoryName'] ?><!--</h6>-->
                <!--	    		<h6>Album: --><?//= $photo['albumName'] ?><!--</h6>-->
                <img src="/<?= $photo['path']?>"/>
            </div>
	    <?php endforeach ?>
	</ul>
</div>

