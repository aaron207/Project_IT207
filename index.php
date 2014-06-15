<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div align="center" id="mainWrapper">
<?php include_once("template_header.php");?>
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>User Log in</h2>
        
        <form method="post" action="authenticate.php"> 
            Username: <input type="text" name="name" /><br />
            Password: <input type="text" name="email" /><br />
            <br />
            <input type="submit" value="LOGIN" /> 
        </form>
		
                      
        <a href="register.php">Register Now</a><br />
    </div>
    <br />
  <br />
  <br />
  </div>
<?php include_once("template_footer.php");?>
</div>
</body>
</html>
