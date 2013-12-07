<div class="jumbotron">
	
	<?php 
		/* -------------------------------------
			Only show slider if page is in home
		   ------------------------------------- */
	?>
    
	<?php if($page == 'home'): ?>
        <!-- START SLIDER -->
        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-captions" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
            </ol>
            
            <div class="carousel-inner">
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#777:#777" src="/assets/images/slider/img1.jpg">
                    <div class="carousel-caption">
                      <h3>First slide label</h3>
                      <p></p>
                    </div>
                </div>
                <div class="item active">
                    <img data-src="holder.js/900x500/auto/#777:#777" src="/assets/images/slider/img2.jpg">
                    <div class="carousel-caption">
                      <h3>Second slide label</h3>
                      <p></p>
                    </div>
                </div>
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#777:#777" src="/assets/images/slider/img3.jpg">
                    <div class="carousel-caption">
                      <h3>Third slide label</h3>
                      <p></p>
                    </div>
                </div>
            </div>
            
            <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <hr>
    <?php endif; ?>
    <!-- END SLIDER -->
	<div class="row">
    	<!-- RIGHT PANEL-->
        <div class="col-md-9">
        	<?php 
				/* --------------------------------
			   	   	This is the key of toogle page
					since content page are dynamic
				   -------------------------------- */
			?>
        	<?php include('page/'.$page.'.php');?>
        </div>
        
    	<!-- LEFT PANEL-->
  		<div class="col-md-3">
        	<?php 
				/* --------------------------------
			   	   	Load one one left panel since this 
					one is a static page for all content
					page
				   -------------------------------- */
			?>
			<?php include('left-panel.php');?>
        </div>
    </div>
</div>
    