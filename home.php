<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>StoryTeller</title>

<style type="text/css">
	#a
{
text-decoration: none;
font-weight: bold;

		}
		#b
		{
			     float: right;
			     margin-left: 30px;
		}

.cn
{
margin-left:15px;
padding:0px;
font-family:Geneva, Arial, Helvetica, sans-serif;
background:#333333;
background-attachment:fixed;
 position: sticky;
  position: -webkit-sticky;
  width: 800px;
  height: 400px;
  }

.silde
{
width:1280px;
min-height:500px;
background:#000000;
margin:20px auto 0;
display:flex;
flex-wrap:wrap;
flex-direction:row;
 position: sticky;
  position: -webkit-sticky;


}
.silde .box
{
position:relative;
height:300px;
width:300px;
background:#0000CC;
margin:10px;
display:inline-block;
box-sizing:border-box;
 
}
.silde .box .imgbox
{

overflow:hidden;

}
.silde .box .imgbox img
{
height:300px;
width:300px;
transition:transform 2s;

background-attachment:fixed;
}

.silde .box:hover .imgbox img
{
transform:scale(1.2);
}

.silde .box .details
{
position:absolute;
top:10px;
left:10px;
bottom:10px;
right:10px;
background:rgba(0,0,0,.8);
transform:scaleY(0);
transition:transform .5s;
}
.silde .box:hover .details
{
transform:scaleY(1);

}



.silde .box .details .h9
{
margin:0;
padding:0;
font-size:20px;
text-align:center;
color:#FFFFFF;
margin-top:20px;
}
#x{
	text-align: center;
	font-size: 20px;
	color: #2471A3;

}

	</style>

	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">StoryTeller</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="#">Home</a></li>
         <li ><a href="story1.php">Story</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav><br><br><br><br>
    <!--<h2 class="text-center text-success">WELCOME <?php 	echo $_SESSION['username'];?></h2>-->
  <p id="x"><b>Story Title</b></p><center><p id="x" class="glyphicon glyphicon-hand-down"></p></center>

<div class="cn">

<div  class="silde">

<a href="story1.php"><div class="box"><div class="imgbox"><img  src="img/1.jpg"/> </div>
<div class="details"><h2 class="h9"> The Miser and his gold</h2><h4 class="h9">Nothing makes you feel better than when you get........ </h4></div>
 </div></a>
<a href="story1.php"><div class="box"> <div class="imgbox"> <img src="img/2.jpg" class="img-fluid" /> </div>
<div class="details"><h2 class="h9">The Queen</h2><h4 class="h9">Once upon a time, there was a beautiful rose plant in a garden. One rose flower on the plant was proud of its beauty............</h4></div>
</div></a>
 <a href="story1.php"><div class="box"> <div class="imgbox"> <img src="img/3.jpg"/></div>
<div class="details"><h2 class="h9">Dreams</h2><h4 class="h9">A boy named Raj was upset because he had done poorly in his English test. He was sitting in his room when his grandmother came......</h4></div>
</div></a>
<a href="story1.php"><div class="box"> <div class="imgbox"> <img src="img/4.jpg"/></div>
<div class="details"><h2 class="h9">Devernding story</h2> <h4 class="h9"> Once there lived a greedy man in a small town. He was very rich, and he loved gold and all things fancy. But he loved his daughter..........</h4></div>
</div></a>
<a href="story1.php"><div class="box"> <div class="imgbox"><img src="img/5.jpg"/></div>
<div class="details"><h2 class="h9">The magic pot</h2> <h4 class="h9">There was once a woodcutter, working hard in the forest, getting wood to sell for some food. As he was cutting a tree, his axe accidentally fell into........</h4></div>
</div></a>
<a href="story1.php"><div  class="box"> <div class="imgbox"><img src="img/6.jpg"/></div>
<div class="details"><h2 class="h9"> Count Wisely</h2> <h4 class="h9">One day, king Akbar asked a question in his court that left everyone in the courtroom puzzled. As they all tried to figure out the answer......</h4></div>
</div></a>
<a href="story1.php"><div class="box"> <div class="imgbox"><img src="img/7.jpg"/></div>
<div class="details"><h2 class="h9">The Lion and the Mouse </h2><h4 class="h9">A lion was once sleeping in the jungle when a mouse started running up and down his body just for fun. This disturbed the lion’s sleep,and.....</h4></div>
</div></a>
<a href="story1.php"><div class="box"> <div class="imgbox"><img src="img/8.jpg"/></div>
<div class="details"><h2 class="h9"> Treasure</h2><h4 class="h9">n a village, lived a carefree boy with his father. The boy’s father told him that he was old enough to...........</h4></div>
</div></a>

</div>
</div>





</body>
</html>