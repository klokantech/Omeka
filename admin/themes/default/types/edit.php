<?php head(); ?>
<?php common('archive-nav'); ?>
<div id="primary">
<h1><?php echo h($type->name); ?></h1>
<form method="post">
	<?php include 'form.php';?>
	<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php foot(); ?>