<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alcoholic – Wine Shop and Liquor Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For Profile Assets -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Custom Assets -->
  <link href="<?php echo FRONTEND_ASSET . 'css/main.css'; ?>">
  <link href="<?php echo FRONTEND_ASSET . 'css/elegant-icon.css'; ?>">
  <link href="<?php echo FRONTEND_ASSET . 'css/liner-icon.css'; ?>">
  <link href="<?php echo FRONTEND_ASSET . 'css/slick.css'; ?>">
  <link href="<?php echo FRONTEND_ASSET . 'css/slick-theme.css'; ?>">
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First <?php appName(); ?></h1>
  <p>Resize this responsive page to see the effect!</p>
  <?php if ($user->isLoggedIn()): ?>
    <h3 align="right">Hello,  <?php echo $user->data()->name;?></h3>
   <?php endif; ?>
</div>

