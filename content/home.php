
<script>home();</script>
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

