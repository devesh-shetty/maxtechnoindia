<?php
include_once 'head.php';
?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-cog fa-spin fa-fw"></i>  MAX TECHNOLOGY & CO.
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#products">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">MAX TECHNOLOGY & CO.</h1>
                        <p class="intro-text">Manufacturers Of Soldering & Desoldering Equipments.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Us</h2>
                <p>We here have a variety of our products to present you.</p>
                <p>We here have a variety of our products to present you.</p>
                <p>We here have a variety of our products to present you.</p>
                <p>We here have a variety of our products to present you.</p>
                <p>We here have a variety of our products to present you.</p>
                <p>We here have a variety of our products to present you.</p>
                
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="text-center">
        <div class="products-section">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
					  <!--Dotted Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>
					
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    
					    <div class="item active">
					      <img src="<?php echo $base;?>images/550_blu.jpg" alt="max-550">
					      <div class="carousel-caption ">
					        <h2>MAX 550</h2>
								<p> <input type="button" class ="btn btn-primary btn-text" value="Know more" onclick="document.location.href='book.php';"\> </p>
					      </div>
					    </div>
					
					    <div class="item">
					      <img src="<?php echo $base?>images/7805_blue.jpg" alt="max-7805">
					      <div class="carousel-caption ">
					        <h2>MAX 7805</h2>
						
					        <p> <input type="button" class ="btn btn-primary btn-text" value="Book now" onclick="document.location.href='book.php';" \> </p>
					      </div>
					    </div>
					    
					    <div class="item">
					      <img src="<?php echo $base?>images/850_type1.jpg" alt="max-850">
					      <div class="carousel-caption bottom-margin">
					        <h2>MAX 850</h2>
							<p> <input type="button" class ="btn btn-primary btn-text" value="Book now" onclick="document.location.href='book.php';" \> </p>
					      </div>
					    </div>
					     <div class="item">
					      <img src="<?php echo $base?>images/8550_blue.jpg" alt="8550">
					      <div class="carousel-caption bottom-margin">
					        <h2>MAX 8550</h2>
								<p> <input type="button" class ="btn btn-primary btn-text" value="Book now" onclick="document.location.href='book.php';" \> </p>
					      </div>
					    </div>
					  </div>
					
					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php 
include_once 'foot.php';