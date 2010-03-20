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
		<div id="header_search">
			<form method="post" action="http://www.uss.spconsultancy.com">
			<div>
			<h3><span>Find:</span></h3>
			<input type="text" />
			<input type="image" src="img/search_button.gif" class="submit" />
			</div>
			</form>
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
			</div>
		</div>
	</div>
   <div id="page_wrapper">
	<!-- BEGIN :: LEFT SIDEBAR -->
	<div id="page_leftcol"></div>
	<!-- BEGIN :: MAIN COL -->
	<div id="page_maincol">
		<div id="bestsellers">
			<?php echo $sf_content ?>
		</div>
	</div>
	<!-- BEGIN :: RIGHT SIDEBAR -->
	<div id="page_rightcol"></div>
   </div>
  </body>
</html>
