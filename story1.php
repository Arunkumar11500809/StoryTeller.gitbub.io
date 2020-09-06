
<!DOCTYPE html>
<html>
<head>
  <title>StoryTeller</title>
</head>
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
		#c
		{
			margin-left:20px;


		}
		#c
		{
			height: 200px;
			width: 200px;
		}
    #x
    {
      background-color: lightgrey;
      margin-left: 10px;
    
      height: 800px;
      width: 1200px;
    }
    #content
    {
      margin: 0px;
      padding: 0px;
      width: 100%;
      display: flex;
      background: #ECF0F1 ;
      padding: 20px;
      box-sizing: border-box;
      flex-direction: row;
    
    }
    #content3
    {
      margin-left:10px;
      flex: 1;
      background: #2980B9;
      font-size: 16px;
      font-family: 'Roboto',sans-serif;
      color:white;

    }

    #content1
    {

      margin-left:10px;
      flex: 1;
      background: #2980B9;
      font-size: 16px;
      font-family: 'Roboto',sans-serif;
      color:white;

    }
    #content2
    {

      margin-left:10px;
      flex:1;
      background:#2980B9;
      font-size: 16px;
      font-family: 'Roboto',sans-serif;
      color:white;
    }
    @media screen and (max-width:750px)
    {
      #content
      {
        flex-direction: column-reverse;
      }

    }
    #y{
  text-align: center;
  font-size: 20px;
  color: #2471A3;

}
#z
{
   font-size: 20px;
  color: #2471A3;
  float: right;
  margin-right: 10px;
  font-weight: bold;

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
      <a class="navbar-brand active" href="#">StoryTeller</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="home.php">Home</a></li>
         <li class="active"><a href="#">Story</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav><br><br><br><br>
<p id="z"> <?php  
  
session_start(); 
   
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
               echo "Vistor_Count = ".$_SESSION['views']; 
  
?></p>

  <p id="y"><b>Story</b></p>
  

<div id="content">
  <div id="content1"><h1>The Lion and the Mouse</h1><img src="img/1.jpg" class="img-responsive" width="80%"><br>
  <b>A lion was once sleeping in the jungle when a mouse started running up and down his body just for fun. This disturbed the lion’s sleep, and he woke up quite angry. He was about to eat the mouse when the mouse desperately requested the lion to set him free. “I promise you, I will be of great help to you someday if you save me.” The lion laughed at the mouse’s confidence and let him go.One day, a few hunters came into the forest and took the lion with them. They tied him up against a tree. The lion was struggling to get out and started to whimper. Soon, the mouse walked past and noticed the lion in trouble. Quickly, he ran and gnawed on the ropes to set the lion free. Both of them sped off into the jungle</b></div>

  <div id="content2"><h1>Count Wisely</h1><img src="img/2.jpg" class="img-responsive" width="80%"><br><b>One day, king Akbar asked a question in his court that left everyone in the courtroom puzzled. As they all tried to figure out the answer, Birbal walked in and asked what the matter was. They repeated the question to him.The question was, “How many crows are there in the city?”
Birbal immediately smiled and went up to Akbar. He announced the answer; he said there were twenty-one thousand, five hundred and twenty-three crows in the city. When asked how he knew the answer, Birbal replied, “Ask your men to count the number of crows. If there are more, then the relatives of the crows must be visiting them from nearby cities. If there are fewer, then the crows from our city must be visiting their relatives who live outside the city.” Pleased with the answer, Akbar presented Birbal with a ruby and pearl chain.</b></div>

<div id="content3"><h1> The Golden Touch</h1><img src="img/7.jpg" class="img-responsive" width="80%"><br><b>Once there lived a greedy man in a small town. He was very rich, and he loved gold and all things fancy. But he loved his daughter more than anything. One day, he chanced upon a fairy. The fairy’s hair was caught in a few tree branches. He helped her out, but as his greediness took over, he realised that he had an opportunity to become richer by asking for a wish in return (by helping her out). The fairy granted him a wish. He said, “All that I touch should turn to gold.” And his wish was granted by the grateful fairy.
The greedy man rushed home to tell his wife and daughter about his wish, all the while touching stones and pebbles and watching them convert into gold. Once he got home, his daughter rushed to greet him. As soon as he bent down to scoop her up in his arms, she turned into a gold statue. He was devastated and started crying and trying to bring his daughter back to life. He realised his folly and spent the rest of his days searching for the fairy to take away his wish</b></div>


  
</div>

<div id="content">
  <div id="content1"><h1>The pencil boy</h1><img src="img/6.jpg" class="img-responsive" width="80%"><br><b>A boy named Raj was upset because he had done poorly in his English test. He was sitting in his room when his grandmother came and comforted him. His grandmother sat beside him and gave him a pencil. Raj looked at his grandma puzzled, and said he didn’t deserve a pencil after his performance in the test.His grandma explained, “You can learn many things from this pencil because it is just like you. It experiences a painful sharpening, just the way you have experienced the pain of not doing well on your test. However, it will help you be a better student. Just as all the good that comes from the pencil is from within itself, you will also find the strength to overcome this hurdle. And finally, just as this pencil will make its mark on any surface, you too shall leave your mark on anything you choose to.” Raj was immediately consoled and promised himself that he would do better.</b></div>

  <div id="content2"><h1>The Crystal Ball</h1><img src="img/5.jpg" class="img-responsive" width="80%"><br>
<b>Nasir, a small boy, found a crystal ball behind the banyan tree of his garden. The tree told him that it would grant him a wish. He was very happy and he thought hard, but unfortunately, he could not come up with anything he wanted. So, he kept the crystal ball in his bag and waited until he could decide on his wish.
Days went by without him making a wish but his best friend saw him looking at the crystal ball. He stole it from Nasir and showed it to everyone in the village. They all asked for palaces and riches and lots of gold, but could not make more than one wish. In the end, everyone was angry because no one could have everything they wanted. They became very unhappy and decided to ask Nasir for help. Nasir wished that everything would go back to how it was once – before the villagers had tried to satisfy their greed. The palaces and gold vanished and the villagers once again became happy and content.</b></div>

<div id="content3"><h1>The Fox and the Grapes</h1><img src="img/8.jpg" class="img-responsive" width="80%"><br><b>On a hot summer day, a fox wandered across the jungle in order to get some food. He was very hungry and desperately in search of food. He searched everywhere, but couldn’t find anything that he could eat. His stomach was rumbling and his search continued. Soon he reached a vineyard which was laden with juicy grapes. The fox looked around to check if he was safe from the hunters. No one was around, so he decided to steal some grapes. He jumped high and high, but he couldn’t reach the grapes. The grapes were too high but he refused to give up. The fox jumped high in the air to catch the grapes in his mouth, but he missed. He tried once more but missed again. He tried a few more times, but couldn’t reach. It was getting dark and the fox was getting angry. His legs hurt, so he gave up in the end. Walking away, he said, “I’m sure the grapes were sour anyway.</b></div>



  
</div>







</body>
</html>

