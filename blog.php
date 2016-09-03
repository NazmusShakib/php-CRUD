<?php
  session_start();
  //require_once('author.php');
  
  include("db_connection.php"); 
 
  if(isset($_POST['submit'])){
    $nname = $_POST["nname"];
    $email = $_POST["email"];
    $datee = $_POST["datee"];
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    
    $query = "INSERT INTO blog_tbl (name, email, title, descrip, datee) VALUES ('{$nname}','{$email}','{$title}','{$desc}',{$datee})";


    // Perform queries 

    $per = mysqli_query($link, $query);
    if(!$per){
      mysqli_close($link);
      //echo $query;

       header("location: blog.php?status=INSERT_SUCCESSFULLY");
      die("\nInsert Failed"); 
    }else{
      mysqli_close($link);
      header("location: blog.php?status=INSERT_SUCCESSFULLY");
    }
  }

?>

<?php include("header.php"); ?>

<div id="mainpage" class="normalpage">
<div id="left">
  
<div class="post">
	<form action="" method="POST" >
		<div class="formstyle">
		<input type="text" name="datee" value="<?php echo date("m-d-Y");?>" readonly/>
		<label for="name">Name:</label>
		<input class="text_field" name="nname" id="name" type="text" autofocus required/>
		<label for="email">Email:</label>
    <input class="text_field" id="email" name="email" type="text" />
		<label for="title">Title:</label>
		<input class="text_field" name="title" id="title" type="text" required/>
		<label for="Comments">Descripton:</label>
		<textarea class="text_field" id="Comments" name="desc" cols="30" rows="8" required></textarea>
		
		<button type="submit" name="submit" class="submitbutton">Submit</button>
		</div>
	</form>
</div>

  
<?php
  $query = "SELECT * FROM blog_tbl ORDER BY post_id DESC";
  $exe = mysqli_query($link, $query);
?>

<?php
  while($row = mysqli_fetch_array($exe)){
        
?>
  <div class="post">
    <h2> <?= $row['title']; ?></h2>
    <p> <?= $row['descrip']; ?> </p>
    <span class="readmore"><a href="#">Read More</a></span>
    <div class="postbottom">

    <a href="#">Author: <?= $row['name']; ?></a></div>
  </div>

<?php 
     }
?>

  

  
  <div class="post">
  <h2>Others</h2>
  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui  ante, venenatis eleifend,
   condimentum vel, tincidunt eu, nisl. Nulla eu  augue. Vivamus scelerisque sagittis lorem.
    Nunc tincidunt eleifend  risus. Suspendisse laoreet, mi eget dapibus eleifend, risus dolor 
     egestas ante, in luctus est risus ac mi. Mauris in libero eget leo  laoreet rhoncus.
      Nam porta nisi id turpis. Ut ac justo at urna  consequat mollis. Ut interdum sem ac justo.
    Curabitur vestibulum nulla  ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, 
    porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum  eget, aliquam a, dictum eget,
    lectus. Etiam diam leo, ullamcorper vel,  eleifend sodales, fringilla ac, arcu. 
    Pellentesque enim elit, lobortis  ut, egestas sit amet, imperdiet sed, ante. In sit amet urna.
     Nulla  iaculis, est vel scelerisque posuere, ligula nunc condimentum ante, et  
     porta leo libero in nunc. Phasellus nisl. Proin a neque. 
     Pellentesque  ac odio eu leo commodo luctus.  </p>
  <span class="readmore"><a href="#">Read More</a></span>
  <div class="postbottom"><a href="#">Permalink</a> <a href="#">Comments</a> <a href="#">Category</a> <a href="#">Author</a></div>
  </div>
  
<div class="pagenav">
<span class="alignleft"><a href="#">Previous Posts</a></span> <span class="alignright"><a href="#">Next Posts</a></span></div>

</div>

<div id="sidebar">
<h2>Sidebar Menu</h2>
<ul>
  <li><a href="#">
  Suspendisse laoreet</a></li>
  <li><a href="#">mi eget dapibus eleifend</a></li>
  <li><a href="#">risus dolor egestas ante</a></li>
  <li><a href="#">luctus est risus ac mi</a></li>
  <li><a href="#">Mauris in libero eget leo laoreet </a></li>
  <li><a href="#">Nam porta nisi id turpis.</a></li>
  <li><a href="#">Ut ac justo at urna consequat mollis</a></li>
  <li><a href="#">Ut interdum sem ac justo</a></li>
  <li><a href="#">Curabitur vestibulum nulla </a></li>
  <li><a href="#">Praesent imperdiet</a></li>
  <li><a href="#">Morbi lorem sem</a></li>
  <li><a href="#">pulvinar condimentum</a></li>
  <li><a href="#">porttitor ultricies,</a></li>
</ul>
</div>
<div class="clear"></div>
</div>

<?php include("footer.php");?>
