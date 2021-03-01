<span class="globe">
<div style="margin-top: 63px"></div>
<div class="content_project">    
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
            <iframe src="documents/cdc.pdf" width="100%" height="500px">
                <a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[1]->{"details"})?></a>
            </iframe>
        </details>

        <details>
            <summary><?php echo ($txt->{"doc"}[2]->{"summary"})?></summary>
            <iframe src="documents/cdc.pdf" width="100%" height="500px">
                <a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[1]->{"details"})?></a>
            </iframe>
        </details>


</div>

    

<footer>
    <?php include "content/footer.php"?>
</footer> 
</span>
