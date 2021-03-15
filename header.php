<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="wp-content/themes/Bluespier/style.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

  <title>Theatre Management</title>
</head>

<?php
wp_head();
?>


<body>
  <div class="container">
    <div id="head">
      <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
    </div>
    <nav>

      <?php wp_nav_menu(
        array(
          'theme_location' => 'top-menu'
        )
      ); ?>


    </nav>
    <div class="head-content">
      <h1 class="theatre-management"><?php the_title(); ?></h1>
      <p>Integrated, effective theatre management</p>
    </div>
    <div class="crazy">
    </div>