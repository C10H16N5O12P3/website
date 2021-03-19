<doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Beyond Styx official website">
<meta name="keywords" content="project, video game">
<meta name="author" content="C10H16N5O12P3">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="image/png" href="icon/favicon.png" />
<link href="style.css?<?php echo time()?>" rel="stylesheet">
<title>Beyond Styx</title>
</head>

<body>

<?php 
//set the language
$lang="fr"; //default language
if( isset( $_GET['lang'] ) ) {
    $lang=$_GET['lang']; 
}

$json=file_get_contents("languages/".$lang.".json");
$txt = json_decode($json);

//set include
$page="home";
if( isset( $_GET['page'] ) ) {
  $page=$_GET['page']; 
}
?>



<nav id="nav" style="background-color: #FFE5D0;">
<ul class="left">
  <li><a href="index.php?page=download&amp;lang=<?php echo $lang?>" id="<?php if($page == "download"){echo "play_button_active";} else {echo "play_button";}?>"><?php echo ($txt->{'buttons'})[0]?></a></li>
  <li><a href="index.php?page=home&amp;lang=<?php echo $lang?>" id="<?php if($page == "home"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[0]?></a></li>
  <li><a href="index.php?page=team&amp;lang=<?php echo $lang?>" id="<?php if($page == "team"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[1]?></a></li>
  <li class="dropdown"><a href="index.php?page=project&amp;lang=<?php echo $lang?>" id="<?php if($page == "project"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[2]?></a>
  <div class="dropdown-content">
      <a href="index.php?page=project&amp;lang=<?php echo $lang?>#doc">Documentation</a>
      <a href="index.php?page=project&amp;lang=<?php echo $lang?>#progress">Avancement</a>
    </div>
  </li>
</ul>

<div class="right">
 <li><a href="index.php?page=<?php echo $page?>&amp;lang=<?php if($lang=="en"){echo "fr";}else{echo "en";}?>"><?php echo ($txt->{'dropdown'})[3]?></a></li>
</div>

</nav>
<script src="script.js"></script>
<span class="responsive"><span id="nav_ico" onclick="nav();alert("coucou")">Ouvrir/Fermer</span></span>
<span id="logo"><a href="index.php?lang=<?php echo $lang ?>"><img src="icon/C10.png" width="40px" ></a></span>


<div class="content">
<?php
$path = "content/".$page.".php"; 
if(file_exists($path)){
  include $path; 
}
else{
  include "error/404.php";
}
?>

</div>



</body>
</html>