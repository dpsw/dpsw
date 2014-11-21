<h1>Congratulations!</h1>
<p>You're now flying with Phalcon. Great things are about to happen!</p>

<?php foreach ($Shops as $shop) { ?>
	<?php echo $shop->getName(); ?>
	<br>
	<?php foreach ($shop->getProduct() as $product) { ?>
		&ensp;	<?php echo $product->getName(); ?>
	<?php } ?>
	<br>
<?php } ?>
