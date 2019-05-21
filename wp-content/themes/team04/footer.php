<style type="text/css">
	/*footer {
	    background: #777;
	    padding: 60px 0 70px;
	}*/
	#copyright {
	    background: #000;
	    padding: 25px 0;
	    width: 100%;
	}
	.copy_links a {
	    color: #fff;
	    font-family: 'HelveticaLTStdBold';
	    font-size: 14.06px;
	    padding: 0 30px;
	    letter-spacing: 1px;
	}
	footer {
	    background: #000000c2;
	    padding: 60px 0 70px;
	    color: white;
	    padding: 50px;
	}
	.logo_foot a {
	    color: white;
	}
	.logo_menu a {
	    color: white;
	}
	.copy_links ul {
	    padding-left: 0;
	    text-align: center;
	    margin-bottom: 0;
	}
	.copy_links li {
	    list-style: none;
	    display: inline-block;
	}
</style>	
<section>
<footer>
  <div class="container-flex">
    <div class="row">
      <div class="col-md-5">
        <div class="logo_foot">
          <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
        </div>
      </div>

    
      <div class="col-md-3 col-md-offset-1">
        <div class="logo_menu">
          <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
        </div>
      </div>

      <div class="col-md-2 col-md-offset-1">
        <div class="logo_menu">
         <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
        </div>
      </div>


    </div>
  </div>
</footer>
</section>

<section id="copyright">
    <div class="row">
      <div class="col-md-12">
        <div class="copy_links">
          <ul>
            <li> <a href="#"> @Copyright 2019 | Ian Kirkwood. </a> </li>
          </ul>
        </div>
      </div>
    </div>

</section>
<script src="js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
