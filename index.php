<doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css?<?php echo time()?>" rel="stylesheet">
<title>Projet S2</title>
</head>

<body>

<?php 
//set the language
$lang="fr";
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
  <li><a href="index.php?page=project&amp;lang=<?php echo $lang?>" id="<?php if($page == "project"){echo "active";}?>"><?php echo ($txt->{'dropdown'})[2]?></a></li>
</ul>

<div class="right">
 <li><a href="index.php?page=<?php echo $page?>&amp;lang=<?php if($lang=="en"){echo "fr";}else{echo "en";}?>"><?php echo ($txt->{'dropdown'})[3]?></a></li>
</div>

<a href="index.php?lang=<?php echo $lang ?>"><img src="icon/C10.png" id="logo" width="40px" ></a>
</nav>

<div class="content">
<?php
include "content/".$page.".php"
?>

</div>



</body>
</html>