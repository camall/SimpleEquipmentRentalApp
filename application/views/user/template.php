<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="SSST's page for equipment rental">
        <meta name="author" content="Cickero&Kemica">
        <?php echo HTML::style("/static/css/bootstrap.css", array('media' => 'screen')).PHP_EOL ?>  
        <?php echo HTML::style("/static/css/style.css", array('media' => 'screen')).PHP_EOL ?> 
    </head>
    <body>
        <div class="container admin-home-page">
            <div class="row">
              <div class="span12">
                <div class="navbar">
                  <div class="navbar-inner">
                    <span class="brand">Equipment Rentals</span>
                    <ul class="nav">
                      <li class="divider-vertical"></li>
                      <li class="<?php echo $s1 ?>"><a href="<?php echo URL::site('/user_student'); ?>">Home</a></li>
                      <li class="divider-vertical"></li>
                      <li class="<?php echo $s2 ?>"><a href="<?php echo URL::site('/user_equipmentstudentstaff'); ?>">Equipment</a></li>
                      <li class="divider-vertical"></li>
                      <li class="<?php echo $s3 ?>"><a href="<?php echo URL::site('/user_currentrentalsstudentstaff'); ?>">Current Rentals</a></li>
                      <li class="divider-vertical"></li>
                      <li class="<?php echo $s4 ?>"><a href="<?php echo URL::site('/user_pastrentalsstudentstaff'); ?>">Past Rentals</a></li>
                    </ul>
                    <div class="username pull-right">
                      <span>Admin: (<?php echo $user ?>)</span>
                      <span><a href="<?php echo URL::site('/admin_logout'); ?>">logout</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php echo $content ?>
        <script src="<?php echo URL::serve('js/jquery.min.js'); ?>"></script>
        <script src="<?php echo URL::serve('js/bootstrap.min.js'); ?>"></script>
        <script>//$('.dropdown-toggle').dropdown()</script>
    </body>
</html>