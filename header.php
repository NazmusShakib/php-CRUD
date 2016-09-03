<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Recipes Blog</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
<div id="top">

<h1 id="sitename">Blog <em>Of</em> Recipes</h1>
<div id="searchbar">

<form action="#">
<div id="searchfield">
<input type="text" name="keyword" class="keyword" /> <input class="searchbutton" type="image" src="images/searchgo.gif"  alt="search" /></div>

</form>

</div>

</div>
<div id="menu">
<ul>
<li class="active"><a href="index.php"><span>Welcome</span></a></li>
<li><a href="blog.php"><span>Blog</span></a></li>
<li><a href="articles.php"><span>Articles</span></a></li>
<li><a href="members.php"><span>Members</span></a></li>
<li><a href="registration.php"><span>Registration</span></a></li>
<?php
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')){
?>
<li><a href="login.php"><span>login</span></a></li>
<?php }  else { ?>
<li><a href="logout.php"><span>logout</span></a></li>

<?php } ?>
</ul>
</div>
<div id="contentwrap">

<div id="header">


</div>