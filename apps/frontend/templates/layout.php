<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>
         <?php if (!include_slot('title')): ?>
            HomeService - Your best service partner
        <?php endif; ?>
    </title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
	<div id="page_header">
		<div id="page_title">
		<h1>Ultimate Service Solutions</h1>
		</div>		
	</div>
	<div id="page_spacing">
		<div id="page_header1">
			<div id="links">
				<span><a href="<?php echo url_for('items/index') ?>">Items</a></span>
				<span><a href="<?php echo url_for('areas/index') ?>">Areas</a></span>
				<span><a href="<?php echo url_for('zones/index') ?>">Zones</a></span>
				<span><a href="<?php echo url_for('customer/index') ?>">Customers</a></span>
				<span><a href="<?php echo url_for('employee/index') ?>">Employees</a></span>
				<span><a href="<?php echo url_for('complaints/index') ?>">Complaints</a></span>
                <span><a href="<?php echo url_for('city/index') ?>">City</a></span>
                <span><a href="/logout.php">Logout</a></span>
			</div>
		</div>
	</div>
   <div id="page_wrapper">   </div>
	<!-- BEGIN :: LEFT SIDEBAR -->
	<div id="page_leftcol">
		<div class="borderbox">
		<div class="leftcol_box">
		<div id="books_search">
			<h2><span>Welcome <?php echo $_SESSION['loggedin_user']; ?></span></h2>
			<div class="content">
					<div>
                       Logged in User : <?php echo $_SESSION['loggedin_user']; ?>
                       <br/>
                       Role : Administrator
					</div>	
			</div>
		</div>
		</div>
		</div>
		<div class="borderbox">
		<div class="leftcol_box">
		<div id="catalog">
			<h2><span>Catalog</span></h2>
			<div class="content">
				<ul>
				<li><span><a href="http://www.uss.spconsultancy.com">A</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">B</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">C</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">D</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">E</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">F</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">G</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">H</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">I</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">J</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">K</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">L</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">M</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">N</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">O</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">P</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">Q</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">R</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">S</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">T</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">U</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">V</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">W</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">X</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">Y</a></span></li>
				<li><span><a href="http://www.uss.spconsultancy.com">Z</a></span></li>
				</ul>
				<div class="footnote">
					<h4>Note:</h4>
					Search your books &amp; authors by <em>the first name</em>
				</div>
			</div>
		</div>
		</div>
		</div>
		<div id="knowmore">
			<h2><span>Know More</span></h2>
			<p>
This is a template designed by free website templates
for you
<span class="image">&nbsp;</span>
for free you can replace all the text by your own text.
			</p>
			<div class="readmore"><a href="http://www.uss.spconsultancy.com">Read More</a></div>
		</div>
		<div class="borderbox">
		<div class="leftcol_box">
		<div id="newsletter">
			<h2><span>Newsletter Signup</span></h2>
			<div class="content">
				<form method="post" action="http://www.uss.spconsultancy.com">
					<div>
					<input type="text" value="Enter Email Here" />
					<input type="image" src="img/newsletter_button.gif" class="submit" />
					<div class="clearthis">.</div>
					</div>
				</form>
			</div>
		</div>
		</div>
		</div>
	</div>
	<!-- BEGIN :: MAIN COL -->
	<div id="page_maincol">
       <div id="bestsellers">
			<?php echo $sf_content ?>
		</div>
	</div>
	<!-- BEGIN :: RIGHT SIDEBAR -->
	<div id="page_rightcol"></div>


    <div id="page_spacing">
<div id="page_footer">
	<div id="rights">
&copy; Copyright for USS
	</div>
	<div id="links">
<span><a href="http://www.uss.spconsultancy.com">About US</a></span>
<span><a href="http://www.uss.spconsultancy.com">Contact US</a></span>
	</div>
</div>
</div>
<div id="page_credit">
<a href="http://www.spconsultancy.com">Powered by S P Consultancy Services</a>
</div>
<div class="clearthis">.</div>


  </body>
</html>
