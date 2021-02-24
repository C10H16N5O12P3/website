
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
    <div id="bigtitle">Beyond Styx</div>
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
    
</div>

</div>

