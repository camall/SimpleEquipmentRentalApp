<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
 <head>
	<title><?php echo $title ?></title>
	<?php echo HTML::style("/static/css/bootstrap.css", array('media' => 'screen')).PHP_EOL ?>	
	<script src="<?php echo URL::serve('js/jquery.min.js'); ?>" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body> 		
		<?php echo $content ?>	
 </body> 
</html>