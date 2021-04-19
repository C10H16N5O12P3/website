
<script>
function button_color(buttons, color){
    for(var i=1; i<buttons.length; i++) {
        buttons[i].style.color= color;
    }
}

navcolor = document.body.className == "dark" ? "#FFE5D0" : "#FFE5D0";
nav = document.getElementById("nav"); 
buttons = Array.prototype.slice.call(document.getElementsByTagName("a"));


if(window.innerWidth >= 1218){
    nav.style.backgroundColor="transparent";
    button_color(buttons, "white");
    window.addEventListener('scroll', () => {
  let y = window.scrollY ; 
  if(y<500){ //scrolling down
    nav.style.backgroundColor="transparent"; 
    button_color(buttons, "white"); 
  }
  else{ //scrolling up
    nav.style.backgroundColor= navcolor;
    button_color(buttons, "black");
  }
})
}

</script>



<div class="background"></div> 
<div class="center-box">
    <div id="bigtitle"><img src="icon/logo_text_web.png" width="450" ></div>
    <div id="description"><?php echo ($txt->{'description'})?></div>
    
    <div id="presentation">
    
    <div class="flex" id="txt_right">
        <div class="img_flex" style="background-image: url('photos/presentation0.png')"></div> 
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
        <div class="img_flex" style="background-image: url('photos/presentation1.png')"></div>
    </div>
    <div class="flex" id="txt_right">
        <div class="img_flex" style="background-image: url('photos/presentation2.png')"></div> 
        <div class="txt_flex">
            <span id="bigtitle"><?php echo $txt->{"presentation"}[2]->{"title"}?></span>
            <div>
                <?php echo $txt->{"presentation"}[2]->{"txt_presentation"}?>
            </div>
        </div>
    </div>  

</div>

<div class="push"></div>  

<footer>
    <?php include "content/footer.php"?>
</footer> 
</div>

