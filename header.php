<header>
<div class="navbar navbar-fixed-top navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target=
			".navbar-collapse" data-toggle="collapse" type=
			"button"><span class="icon-bar"></span> <span class=
			"icon-bar"></span> <span class=
			"icon-bar"></span></button> <a class="navbar-brand"
			href="index.php"><img alt="logo" src=
			"img/logo.png"></a>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			    <?php
			      $pageName = basename($_SERVER['PHP_SELF']);
			        if($pageName == "index.php") {
			            echo "<li class='active'><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<b class='caret'></b></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			        else if($pageName == "aboutus.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li class='active'><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<b class='caret'></b></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			         else if($pageName == "trading.php" || $pageName == "priceriskmgmt.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li class='dropdown active'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<b class='caret'></b></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			         else if($pageName == "contact.php" || $pageName == "contact2.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<b class='caret'></b></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li class='active'><a href='contact.php'>Contact</a></li>";
			        }
				?>
			</ul>
		</div>
	</div>
</div>
</header>