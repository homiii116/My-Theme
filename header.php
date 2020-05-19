<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<title>Miho-Norge</title>
<?php wp_head(); ?>
</head>

<body>
<!-- header始まり -->
<header>
  <nav class="container-fluid">
    <?php wp_nav_menu( array(
      'theme_location' => 'header') ); ?>
  </nav> 
</header> 
<!-- header終わり -->