
<div class="background"></div> 
<div class="center-box">
    <div id="bigtitle">Beyond Styx</div>
    <div id="description"><?php echo ($txt->{'description'})?></div>
    
    <div id="presentation">
    
    <div class="flex" id="txt_right">
        <div class="img_flex">image</div> 
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
        <div class="img_flex">image</div>
    </div>

</div>



</div>