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

<div class="wrapper">

<nav id="nav" style="background-color: #FFE5D0;">
<ul>
  <li><a href="#home" id="play_button"><?php echo ($txt->{'buttons'})[0]?></a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><?php echo ($txt->{'buttons'})[1]?></a>
    <div class="dropdown-content">
      <a href="index.php?page=home&amp;lang=<?php echo $lang?>" ><?php echo ($txt->{'dropdown'})[0]?></a>
      <a href="index.php?page=download&amp;lang=<?php echo $lang?>"><?php echo ($txt->{'dropdown'})[1]?></a>
      <a href="index.php?page=<?php echo $page?>&amp;lang=<?php if($lang=="en"){echo "fr";}else{echo "en";}?>"><?php echo ($txt->{'dropdown'})[2]?></a>
    </div>
  </li>
</ul>
<a href="index.php?lang=<?php echo $lang ?>"><img src="" id="logo" width="43px" height="50px"></a>
</nav>

<div class="content">
<?php
include "content/".$page.".php"
?>

</div>

</div>

</body>
</html>