
<script>
nav = document.getElementById("nav"); 
nav.style.backgroundColor="transparent"; 
window.addEventListener('scroll', () => {
  let y = window.scrollY ; 
  if(y<500){ //scrolling down
    nav.style.backgroundColor="transparent"; 
  }
  else{ //scrolling up
    nav.style.backgroundColor="#FFE5D0";
  }
})
</script>



<div class="background"></div> 
<div class="center-box">
    <div id="bigtitle"><img src="icon/logo_text_web.png" width="450" ></div>
    <div id="description"><?php echo ($txt->{'description'})?></div>
    
    <div id="presentation">
    
    <div class="flex" id="txt_right">
        <div class="img_flex" style="background-image: url('photos/presentation0.jpg')"></div> 
        <div class="txt_flex">
            <span id="bigtitle"><?php echo $txt->{"presentation"}[0]->{"title"}?></span>
            <div>
                <?php echo $txt->{"presentation"}[0]->{"txt_presentation"}?>
            </div>
        </div>
    </div>
    <div class="flex" id="txt_left">
        <div class="txt_flex">
            <span id="bigtitle"><?php echo $txt->{"presentation"}[1]->{"title"}?></span>
            <div>
                <?php echo $txt->{"presentation"}[1]->{"txt_presentation"}?>
            </div>
        </div>
        <div class="img_flex" style="background-image: url('photos/presentation1.jpg')"></div>
    </div>
    <div class="flex" id="txt_right">
        <div class="img_flex" style="background-image: url('photos/presentation0.jpg')"></div> 
        <div class="txt_flex">
            <span id="bigtitle"><?php echo $txt->{"presentation"}[0]->{"title"}?></span>
            <div>
                <?php echo $txt->{"presentation"}[0]->{"txt_presentation"}?>
            </div>
        </div>
    </div>

<div class="push"></div>    

</div>

<footer>
    <span class="footer_txt">Nous réseaux :</span>
    <span class="footer_img" style=""><a href="https://github.com/BeyondStyx"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/1200px-Octicons-mark-github.svg.png" height="30" width="30"></a></span>
</footer> 
</div>

