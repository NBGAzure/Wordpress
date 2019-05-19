
<?php get_header(); ?>

      <div class="container-fluid text-center py-5 bg-light">
  <a href="#"><h3 class="section-heading mb-3">Heading</h3></a>
  <p>Description</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img class="img-responsive mb-3 border border-danger imageoverlay" src="wp-content/themes/team04/img/1.jpg" alt="Sustanability" style="max-width: 100%;" title="Sustanability" >
      <div class="transformations">
      <div class="overlaytext">Tagline</div>
      </div>
    </div>
    <div class="col-sm-4">
      <img class="img-responsive mb-3 border border-danger imageoverlay" src="wp-content/themes/team04/img/1.jpg" alt="Motorcycling" style="max-width: 100%;" title="motorcycling">
      <div class="transformations">
      <div class="overlaytext">Tagline</div>
      </div>
    </div>
    <div class="col-sm-4">
     <img class="img-responsive mb-3 border border-danger imageoverlay" src="wp-content/themes/team04/img/1.jpg" alt="Education" style="max-width: 100%;" title="Education">
     <div class="transformations">
     <div class="overlaytext">Tagline</div>
     </div>
    </div>
  </div>
</div>


<div class="container-fluid text-center py-5">
<a href="<?php echo site_url('/blog'); ?>"><h2 class="section-heading">All Blogs</h2></a>
</div>

          <section>



            <?php
            $args = array(
            	'post_type' => 'post',
            	'posts_per_page' => 2

            );
            $blogposts = new WP_Query($args);

            while ($blogposts->have_posts()) {

            	$blogposts->the_post();


            ?>
<div class="card mb-3">

    <div class="card-description">
<div class="container-fluid">
<div class="mt-3 px-2">

<p>
<div class="card-image">
  <a href="<?php the_permalink(); ?>">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" width="400" height="300" style="max-width: 80%; height: auto; float: right; padding: 16px;"></a>
</div>

<h3 class="section-heading ml-2"><?php the_title();?></h3>
<p id="texts"><?php echo wp_trim_words(get_the_excerpt(),40);?></p>


                    <div class="text-center">
                    <a href="<?php the_permalink();?>"><button type="button" class="btn btn-outline-danger">Read more</button></a><br><br>
                  </div>
</div>
</div>
</div>
</div>
</div>
<?php }
wp_reset_query(); ?>

            </section>




            <section>
              <div class="card mb-3">
                  <div class="card-description">
              <div class="container-fluid">
              <div class="mt-3 px-2">
              <h3 class="text-left">Info</h3>
              <p>
              <div class="card-image">
              <a href="blogpost.html"><img src="wp-content/themes/team04/img/1.jpg" width="400" height="300" style="max-width: 80%; height: auto; float: right; padding: 16px;"></a>
              <p id="texts">Few words for blog description of what he likes sharing</p>
                                  <p id="texts">nkvnlernvlkernvlknerklvnerlknvklernvklnelknfklrenklfnreflknreklfnerlknflkrenflkrenflkernflkrenflkrenflkrenflkrenfklrenfrelknflreknfrlenflnfrleknflernflkenrlkfnelrknflerknflenflekfnlernfrlenlnflknerl! </span>
                                  <p id="texts">nkvnlernvlkernvlknerklvnerlknvklernvklnelknfklrenklfnreflknreklfnerlknflkrenflkrenflkernflkrenflkrenflkrenflkrenfklrenfrelknflreknfrlenflnfrleknflernflkenrlkfnelrknflerknflenflekfnlernfrlenlnflknerl!</p>
                                  <p id="texts">nkvnlernvlkernvlknerklvnerlknvklernvklnelknfklrenklfnreflknreklfner</p>
                                  <div class="text-center">
                                  <a href="#"><button type="button" class="btn btn-outline-danger">Read more</button></a><br><br>
                                </div>
              </div>
              </div>
              </div>
              </div>
              </div>

              <div class="card mb-3">
                  <div class="card-description">
              <div class="container-fluid">
              <div class="mt-3 px-2">
              <h3 class="text-left">Blogs</h3>
              <p>
              <div class="card-image">
              <a href="blogpost.html"><img src="wp-content/themes/team04/img/1.jpg" width="400" height="300" style="max-width: 80%; height: auto; float: right; padding: 16px;"></a>
              <p id="texts">Few words for blog description of what he likes sharing</p>
              <p id="texts">nkvnlernvlkernvlknerklvnerlknvklernvklnelknfklrenklfnreflknreklfnerlknflkrenflkrenflkernflkrenflkrenflkrenflkrenfklrenfrelknflreknfrlenflnfrleknflernflkenrlkfnelrknflerknflenflekfnlernfrlenlnflknerl! </span>
              <p id="texts">nkvnlernvlkernvlknerklvnerlknvklernvklnelknfklrenklfnreflknreklfnerlknflkrenflkrenflkernflkrenflkrenflkrenflkrenfklrenfrelknflreknfrlenflnfrleknflernflkenrlkfnelrknflerknflenflekfnlernfrlenlnflknerl!</p>
              <p id="texts">nkvnlernvlkernvlknerklvnerlknvklernvklnelknfklrenklfnreflknreklfner</p>
                                  <div class="text-center">
                                  <a href="#"><button type="button" class="btn btn-outline-danger">Read more</button></a><br><br>
                                </div>
              </div>
              </div>
              </div>
              </div>
              </div>

        </section>

  <?php get_footer(); ?>
