<html>
	<head>
		<title>Home-P.A.T.N-University</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	
	</head>
	<body>
		<div class="jumbotron">
						
			<div id="container"  bgcolor="black" >
					<div id="header">
						<div id="navi">	
							<nav class="navbar navbar-default navbar-fixed-top sticky"	role="navigation">
							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							    	<img id="lo"src="img/logo.png" alt="PATN Logo" width="100" height="50"/>
							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								    <ul class="nav navbar-nav">
								     	<li><a href="index.html">Home</a></li>
								        <li class="dropdown">
								          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Faculties <span class="caret"></span></a>
								         		<ul class="dropdown-menu">
								            		<li><a href="School of Computing.html">School of Computing</a></li>
								            		<li role="separator" class="divider"></li>
								            		<li><a href="School of Business.html">School of Business</a></li>            
								          		</ul>
								        <li><a href="Programmes.html">Programmes</a></li>
								        <li><a href="e-Learning/e-Learning.php">e-Learning</a></li>
								        <li><a href="News&Event.html">News&amp;Event</a></li>
								        <li><a href="ContactUs.html">ContactUs</a></li>
								        </li>					       					        
								    </ul>
							    	<ul class="nav navbar-nav navbar-right">
							    		<li><a href="e-Learning/e-Learning.php">Log in</a></li>
							    		
							    		
							    		
							      </ul>
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>				
						</div>
						<!--<div id="logo">-->	
					</div>
					<div id="space">
						<!--this is space-->						
					</div>
					<div id="slideshow">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  	<!-- Indicators -->
						  	<ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  	</ol>

						  	<!-- Wrapper for slides -->
						  	<div class="carousel-inner" role="listbox">
						    	<div class="item active">
						     		<img src="img/S1.jpg" alt="...">
						      		<div class="carousel-caption">
						       		 ...
						      		</div>
						    	</div>
						    	<div class="item">
						      		<img src="img/S2.jpg" alt="...">
						      		<div class="carousel-caption">
						        	 ...
						      		</div>
						    	</div>
						    	<div class="item">
						      		<img src="img/S3.jpg" alt="...">
						      		<div class="carousel-caption">
						        	 ...
						      		</div>
						    	</div>
						    	
						    </div>

						  	<!-- Controls -->
						    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
					</div>
					<div id="space">
					<!--this is space-->
					</div>
					<div id="content">
						<div id="news">
							<h2 align="center" class="tcenter"><a href="#">News</a></h2>

								

							


										<a href="#"><div id="nleft">




											<?php


												include("includes/connect.php");

												$select_news = "select * from news LIMIT 1";
												$run_news = mysql_query($select_news);
												while ($row = mysql_fetch_array($run_news)) {
													
													$news_id = $row['News_id'];
													$news_title = $row['News_title'];
													$news_date = $row['News_date'];
													$news_author = $row['News_author'];
													$news_image = $row['News_image'];
													$news_keywords = $row['News_keyword'];
													$news_content = $row['News_content'];
												}


											?>
											<br>						
											<center><img src="img/news/<?php echo $news_image; ?>" width="250" Hight="180"></center>
											<h4 class="tcenter"><?php echo $news_title; ?></h4>
											
										</div></a>
											

										<a href="#"><div id="ncenter">
											


											<?php


												include("includes/connect.php");

												$select_news = "select * from news LIMIT 2";
												$run_news = mysql_query($select_news);
												while ($row = mysql_fetch_array($run_news)) {
													
													$news_id = $row['News_id'];
													$news_title = $row['News_title'];
													$news_date = $row['News_date'];
													$news_author = $row['News_author'];
													$news_image = $row['News_image'];
													$news_keywords = $row['News_keyword'];
													$news_content = $row['News_content'];
												}


											?>
											<br>
											<center><img src="img/news/<?php echo $news_image; ?>" width="250" Hight="180"></center>
											<h4 class="tcenter"><?php echo $news_title; ?></h4>


										</div></a>

											<a href="#">

												<div id="nright">



													<?php


														include("includes/connect.php");

														$select_news = "select * from news LIMIT 3";
														$run_news = mysql_query($select_news);
														while ($row = mysql_fetch_array($run_news)) {
															
															$news_id = $row['News_id'];
															$news_title = $row['News_title'];
															$news_date = $row['News_date'];
															$news_author = $row['News_author'];
															$news_image = $row['News_image'];
															$news_keywords = $row['News_keyword'];
															$news_content = $row['News_content'];
														}


													?>
													<br>
													<center><img src="img/news/<?php echo $news_image; ?>" width="250" Hight="180"></center>
													<h4 class="tcenter"><?php echo $news_title; ?></h4>

													
												</div>

											</a>
									



						</div>
						<div id="cevent">
							<h2 align="center" class="tcenter">Events</h2>









						</div>
						<div id="aboutus">
							<h2 align="center" class="tcenter">About Us</h2>


							<h4 class="tcenter">PATN is located in the capital of Sri Lanka. The University campus is located in the area of  two streets away from Hamra shopping district and not far from Beirut's touristic Downtown district. The street facing the main entrance (Main Gate) to campus is called Bliss Street (named after the founder of AUB Daniel Bliss); whereas the street facing the sea entrances to campus is called Paris Avenue (also known as corniche).
							   The University can be reached from Rafic Hariri International Airport – Beirut by taking the main highway from the airport all the way through Camille Chamoun Highway, Salim Slam Highway and Salim Slam Tunnel. Before reaching Beirut's Downtown district (Ahmad Mokhtar Beyhum Street), you should take a left towards the bridge and then the tunnel (Fouad Chehab Highway) that leads to Kantari Region (Army Street) and then towards Hamra District (Michel Chiha and Banque du Liban streets). Once in Hamra Street, you can take Omar Ben Abdel Aziz Street (through Hamra Street's main intersection) towards Bliss Street and PATN's campus.
							</h4>
						</div>

					</div>
					

			</div>
				
	   		<script type="text/javascript" src="js/jquery.min.js"></script>
	   		<script type="text/javascript" src="js/bootstrap.js"></script>
	   		<script type="text/javascript" src="js/js.js"></script>
	    	<script type="text/javascript">
	      	  $(document).ready(function () {
	          $('.dropdown-toggle').dropdown();
	       		 });
	   		</script>
	   	</div>
	   	
	</body>
</html>