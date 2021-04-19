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

//set theme
$theme = "light";
if( isset( $_GET['theme'])){
  $theme = $_GET['theme'];
}

?>
<body class="<?php echo $theme?>">

<nav id="nav">
<ul class="left">
  <li><a href="index.php?page=download&amp;lang=<?php echo $lang?>&amp;theme=<?php echo $theme?>" id="<?php if($page == "download"){echo "play_button_active";} else {echo "play_button";}?>"><?php echo ($txt->{'buttons'})[0]?></a></li>
  <li><a href="index.php?page=home&amp;lang=<?php echo $lang?>&amp;theme=<?php echo $theme?>" id="<?php if($page == "home"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[0]?></a></li>
  <li><a href="index.php?page=team&amp;lang=<?php echo $lang?>&amp;theme=<?php echo $theme?>" id="<?php if($page == "team"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[1]?></a></li>
  <li class="dropdown"><a href="index.php?page=project&amp;lang=<?php echo $lang?>&amp;theme=<?php echo $theme?>" id="<?php if($page == "project"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[2]?></a>
  <div class="dropdown-content">
      <a href="index.php?page=project&amp;lang=<?php echo $lang?>&amp;theme=<?php echo $theme?>#doc"><?php echo ($txt->{'dropdown-content'})[0]?></a>
      <a href="index.php?page=project&amp;lang=<?php echo $lang?>&amp;theme=<?php echo $theme?>#progress"><?php echo ($txt->{'dropdown-content'})[1]?></a>
    </div>
  </li>
</ul>

<div class="right">
 <li class="dropdown"><a id="settings_title"><?php echo ($txt->{'dropdown'})[3]?></a>
 <div class="dropdown-content" id="dropdown-settings">
      <a href="index.php?page=<?php echo $page?>&amp;lang=<?php echo $page?>&amp;lang=<?php if($lang=="en"){echo "fr";}else{echo "en";}?>&amp;theme=<?php echo $theme?>"><?php echo ($txt->{'dropdown-content'})[2]?></a>
      <a href="index.php?page=<?php echo $page?>&amp;lang=<?php echo $lang?>&amp;theme=<?php if($theme=="dark") {echo "light";} else {echo "dark";}?>"><?php if($theme=="dark") {echo $txt->{"theme"}[0];} else {echo $txt->{"theme"}[1];}?></a>
    </div>
  </li>
</div>

</nav>


<div class="menu-btn" id="nav_ico" onclick="menu();">
<div class="menu-btn_burger"></div>
<script src="script.js"></script>
</div>
<span class="responsive" id="respmenu"></span> 
<span class="responsive" id="respbar"></span>
<span class="responsive" id="settings">
  <li><a href="index.php?page=<?php echo $page?>&amp;lang=<?php echo $page?>&amp;lang=<?php if($lang=="en"){echo "fr";}else{echo "en";}?>&amp;theme=<?php echo $theme?>"><?php echo ($txt->{'dropdown-content'})[2]?></a></li>
  <li><a href="index.php?page=<?php echo $page?>&amp;lang=<?php echo $lang?>&amp;theme=<?php if($theme=="dark") {echo "light";} else {echo "dark";}?>"><?php if($theme=="dark") {echo "Light mode";} else {echo "Dark mode";}?></a></li>
</span>
<span><a href="index.php?lang=<?php echo $lang ?>"><img src="icon/C10.png" width="40px" id="logo"></a></span>

<script src="script.js"></script>

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