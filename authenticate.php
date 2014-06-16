<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Authentication</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div align="center" id="holdSections">
  <?php include_once("template_header.php");?>
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Log in to access admin page</h2>
        //Connecting and selecting the database.
        $errorMsg = "There was an error connecting to the database server.";
        
        mysql_connect("$helios.ite.gmu.edu", "$abeck2", "$project207")or die("$errorMsg");
        mysql_select_db("$db_name")or die ("$errorMsg");
        
        
        $attempt_usr="SELECT*FROM $User WHERE username="$_POST['name'] and $_POST['pw'];
        mysql_query($attempt_usr);
        
        $match=mysql_num_rows($attempt_usr);
        if(match==1){
        	//redirect to login
        } else{ 
        		echo "Incorrect username or password. Please try again.";}
        
      <p>&nbsp; </p>
    </div>
    <br />
  <br />
  <br />
  </div>
  <?php include_once("template_footer.php");?>
</div></body>
</html>
