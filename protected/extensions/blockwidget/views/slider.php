<?php if ($item->content): ?>
<?php 
	$doc=new DOMDocument();
	$doc->loadHTML($item->content);
	$xml=simplexml_import_dom($doc); // just to make xpath more simple
	$images=$xml->xpath('//img');
	// foreach ($images as $img) {
	//     echo $img['src'].'<br>';
	// }
?>
	<div id="without_imgs">
		<?php echo preg_replace('/<img[^>]+\>/i', '', $item->content); ?>
	</div>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php foreach ($images as $key => $value): ?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo ($key == 0)?'active':''; ?>"></li>
			<?php endforeach; ?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php foreach ($images as $key => $value): ?>
					<div class="item <?php echo ($key == 0)?'active':''; ?>">
						<img src="<?php echo $value['src']; ?>" style="width: 100%">
					</div>
			<?php endforeach; ?>
		</div>

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">&nbsp</span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true">&nbsp</span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<?php endif; ?>