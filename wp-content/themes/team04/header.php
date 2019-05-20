<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="js/main.js"></script>
    <?php wp_head();?>

</head>
<body>
  <div id="slideout-menu">
          <ul>
              <li>
                  <a href="<?php echo site_url(''); ?>">Home</a>
              </li>
              <li>
                  <a href="<?php echo site_url('/blog'); ?>">Blog</a>
              </li>
              <li>
                  <a href="<?php echo site_url('/projects'); ?>">projects</a>
              </li>
              <li>
                  <a href="<?php echo site_url('/about'); ?>">about</a>
              </li>
              <li>
                  <a href="about.html">Contact</a>
              </li>
              <li>
                  <input type="text" placeholder="Search Here">
              </li>
          </ul>
      </div>

      <nav>
          <div id="logo-img">
              <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="Ian Kirkwood">
              </a>
          </div>
          <div id="menu-icon">
              <i class="fas fa-bars"></i>
          </div>
          <ul>
              <li>
                  <a href="<?php echo site_url(''); ?>"
                    <?php if(is_front_page()) echo 'class="active"' ?>
                    >Home</a>

              </li>
              <li>
                  <a href="<?php echo site_url('/blog'); ?>"
                    <?php if(get_post_type() == 'post') echo 'class="active"' ?>
                    >Blog</a>
              </li>
              <li>
                  <a href="<?php echo site_url('/projects'); ?>"
                    <?php if(get_post_type() == 'project') echo 'class="active"' ?>
                    >projects</a>
              </li>
              <li>
                  <a href="<?php echo site_url('/about'); ?>"
                    <?php if(is_page('about')) echo 'class="active"' ?>
                    >about</a>
              </li>

              <li>
                  <div id="search-icon">
                      <i class="fas fa-search"></i>
                  </div>
              </li>
          </ul>
      </nav>

      <div id="searchbox">
          <input type="text" placeholder="Search Here">
      </div>


    <div class="carousel">
    <img src="wp-content/themes/team04/img/heroimage.jpg" alt="hero-image-display" class="img-fluid" style="width:100%">
    <div class="carousel-caption">
              <h3>Logo</h3>
              <p>Tagline</p>
            </div>
    </div>
