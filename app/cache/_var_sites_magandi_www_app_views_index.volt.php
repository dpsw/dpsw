<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
		<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/bootstrap-theme.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/style.css'); ?>
	</head>
	<body>
		<?php echo $this->getContent(); ?>
		
		<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
	</body>
</html>