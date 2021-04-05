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
                <iframe src="documents/cdc.pdf" width="100%" height="500px">
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
                <iframe src="documents/1st.pdf" width="100%" height="500px">
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
                <iframe src="documents/cdc.pdf" width="100%" height="500px">
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
                <iframe src="documents/cdc.pdf" width="100%" height="500px">
                    <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[4]->{"details"})?></a>
                </iframe>
            </div>
            
            <div class="reponsive">
                <br><a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[4]->{"details"})?></a>
            </div>
        </details>

    <!-- Progression -->
    <span id="progress"></span>
    <div id="bigtitle" style="text-align: center;"><?php echo ($txt->{"progress_title"})?></div>
        <div style="text-align: center; ">
            <?php echo ($txt->{"progress_description"})?>
        </div> 
        <div class="flex" id="txt_right">
        <div class="img_flex" style=""><span id="bigtitle"><?php echo $txt->{"progress"}[0]->{"date"}?></span></div> 
        <div class="txt_flex">
            <span id="bigtitle"><?php echo $txt->{"progress"}[0]->{"achievement"}?></span>
            <div>
                <?php echo $txt->{"progress"}[0]->{"details"}?>
            </div>
        </div>
    </div>
    <div class="flex" id="txt_left">
        <div class="txt_flex">
            <span id="bigtitle"><?php echo $txt->{"progress"}[1]->{"achievement"}?></span>
            <div>
                <?php echo $txt->{"progress"}[1]->{"details"}?>
            </div>
        </div>
        <div class="img_flex"><span id="bigtitle"><?php echo $txt->{"progress"}[1]->{"date"}?></span></div>
    </div>
    

    <div class="push"></div>   

    
</div>

    

<footer>
    <?php include "content/footer.php"?>
</footer> 
</span>
