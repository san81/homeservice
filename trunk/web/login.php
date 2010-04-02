<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(isset($_REQUEST['username']))
    {
        if($_REQUEST['username']=='Admin' && $_REQUEST['password']=='pass'){
            $_SESSION['userloggedin']=true;
            $_SESSION['loggedin_user']= $_REQUEST['username'];
            header('Location:index.php');
        }else {
            $errorMsg='Invalid login details';            
        }
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Welcome to USS Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
	</div>
</div>
</div>
 <div id="page_wrapper">
	<!-- BEGIN :: LEFT SIDEBAR -->
	<div id="page_login">
		<div class="borderbox">
		<div class="leftcol_box">
		<div id="books_search">
			<h2><span>Login</span></h2>
			<div class="content">
                <div style='color:red'>
                    <?php if(isset($errorMsg)) echo $errorMsg; ?>
                </div>
				<form method="post" action="login.php">
					<div>
                    
					<input type="text" name="username" />
					<input type="password" name="password"/>
					<input type="image" src="img/booksearch_button.gif" class="submit" />
					</div>
				</form>
			</div>
		</div>
		</div>
		</div>
    </div>
		<!-- BEGIN :: LEFT SIDEBAR -->
</div>
<div id="page_spacing">
<div id="page_footer">
	<div id="rights">
&copy; Copyright for USS
	</div>
	<div id="links">

	</div>
</div>
</div>
<div id="page_credit">
<a href="http://www.spconsultancy.com">Powered by S P Consultancy Services</a>
</div>
<div class="clearthis">.</div>
</body>
</html>