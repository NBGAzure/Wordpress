<?php get_header();
while(have_posts()) {
  the_post();

?>

<?php include("inc/heroimage.inc") ?>

<div class="sidenav">
  <a href="#">name</a>
  <a href="#">name</a>
  <a href="#">name</a>
  <a href="#">Blog name</a>
</div>

<div class="sidenavsidecontext">
  <div class="container-fluid text-center mt-5 pt-2">
  <a href="#"><h2 class="section-heading"><?php the_title(); ?></h2></a>
  </div>

<div class="card-image container-fluid">
  <?php if(has_post_thumbnail()) { ?>
<a href="#"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" width="400" height="300" style="max-width: 80%; height: auto; float: right; padding: 16px; margin-top: 40px;"></a>
<?php } ?>
<p id="texts">
<?php the_content(); ?>
</p>
</div>


<?php } ?>


<div id="comments-section">
  Comments Section
</div>
</div>


</div>
</div>
<?php get_footer(); ?>
