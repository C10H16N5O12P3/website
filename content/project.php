<span class="globe">
<div style="margin-top: 63px"></div>
<div class="content_project">    
    <div id="bigtitle" style="text-align: center;">Documentation</div>
        <div style="text-align: center; ">
            Sur cette page vous trouverez les differentes phases du projet
        </div> 

        <details>
            <summary><?php echo ($txt->{"doc"}[0]->{"summary"})?></summary>
            <iframe src="documents/cdc.pdf" width="100%" height="500px">
                <a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[0]->{"details"})?></a>
            </iframe>
        </details>

        <details>
            <summary><?php echo ($txt->{"doc"}[1]->{"summary"})?></summary>
            <iframe src="documents/cdc.pdf" width="100%" height="500px">
                <a href="documents/cdc.pdf"><?php echo ($txt->{"doc"}[1]->{"details"})?></a>
            </iframe>
        </details>
</div>

<footer>
    <?php include "content/footer.php"?>
</footer> 
</span>
