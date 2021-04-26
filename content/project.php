<span class="globe">
<div style="margin-top: 63px"></div>
<div class="content_project">
    <!-- Documentation -->
    <span id="doc"></span>
    <div id="bigtitle" style="text-align: center;"><?php echo ($txt->{"doc_title"})?></div>
        <div style="text-align: center; ">
            <?php echo ($txt->{"doc_description"})?>
        </div> 

        <details>
            <summary><?php echo ($txt->{"doc"}[0]->{"summary"})?></summary>
            <div class="soft">
            <?php 
                echo ($txt->{"doc"}[0]->{"details"});
                foreach ($txt->{"doc"}[0]->{"soft"} as $soft){
                    $soft_name = $soft->{"name"};
                    $soft_url = $soft -> {"url"};
                    echo "<div class='soft_url'><a href='".$soft_url."' onclick='window.open(this.href); return false'>$soft_name</a></div>";
                }
            ?>
            </div>
        </details>

        <details>
            <summary><?php echo ($txt->{"doc"}[1]->{"summary"})?></summary>
            <div class="pc">
                <iframe src="documents/cdc.pdf#view=Fit" width="100%" height="500px">
                    <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[1]->{"details"})?></a>
                </iframe>
            </div>
            
            <div class="responsive">
                <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[1]->{"details"})?></a>
            </div>
        </details>

        <details>
            <summary><?php echo ($txt->{"doc"}[2]->{"summary"})?></summary>
            <div class="pc">
                <iframe src="documents/1st.pdf#view=Fit" width="100%" height="500px">
                    <br><a href="documents/1st.pdf"><?php echo ($txt->{"doc"}[2]->{"details"})?></a>
                </iframe>
            </div>

            <div class="responsive">
                <br><a href="documents/1st.pdf"><?php echo ($txt->{"doc"}[2]->{"details"})?></a>
            </div>
            
        </details>

        <details>
            <summary><?php echo ($txt->{"doc"}[3]->{"summary"})?></summary>
            
            <div class="pc">
                <iframe src="documents/cdc.pdf#view=Fit" width="100%" height="500px">
                    <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[3]->{"details"})?></a>
                </iframe>
            </div>

            <div class="responsive">
                <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[3]->{"details"})?></a>
            </div>
        </details>

        <details>
            <summary><?php echo ($txt->{"doc"}[4]->{"summary"})?></summary>

            <div class="pc">
                <iframe src="documents/cdc.pdf#view=Fit" width="100%" height="500px">
                    <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[4]->{"details"})?></a>
                </iframe>
            </div>
            
            <div class="reponsive">
                <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[4]->{"details"})?></a>
            </div>
        </details>

    <!-- Progress -->
    <div id="bigtitle" style="text-align: center;">Progrès</div>
    <div style="text-align: center;"><?php echo ($txt->{"progress_description"})?></div> 
    <div class="progress_box"><?php foreach($txt->{"progress_box"} as $p){echo '<div class="progress_descirption"><div>'.$p->{"title"}.'</div><progress value="'.$p->{"value"}.'" max="100"></progress></div>';}?></div>
    
    <!-- Evolution -->
    <span id="progress"></span>
    <div id="bigtitle" style="text-align: center;"><?php echo ($txt->{"evolution_title"})?></div>
        <div style="text-align: center; ">
            <?php echo ($txt->{"evolution_description"})?>
        </div> 
    <?php
    $n = 0; 
    foreach ($txt->{"evolution"} as $p) {
        if ($n%2 == 0){
            echo "<div class='flex' id='txt_right'><div class='img_flex'><span id='bigtitle'>".$p->{"date"}."</span></div><div class='txt_flex'><span id='bigtitle'>".$p->{"achievement"}."</span><div>".$p->{"details"}."</div></div></div>";
        }
        else{
            echo "<div class='flex' id='txt_left'><div class='txt_flex'><span id='bigtitle'>".$p->{"achievement"}."</span><div>".$p->{"details"}."</div></div><div class='img_flex'><span id='bigtitle'>".$p->{"date"}."</span></div></div>";
        }
        $n++;
    }
    ?>
    

    <div class="push"></div>   

    
</div>

    

<footer>
    <?php include "content/footer.php"?>
</footer> 
</span>
