<span class="globe">
    <div style="margin-top: 63px"></div>
    <div class="content_project">
    <div id="bigtitle" style="text-align: center;"><?php echo ($txt->{"team_title"})?></div>
    <table id="tbl" style="width: 100%;
  border-spacing: 10px;
  border-collapse: separate;" class="pc">
    <tr>
    <tr style="" id="">
        <td><?php echo ($txt->{"team"}[0]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[1]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[2]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[3]->{"name"})?></td>
    </tr>
    <tr style="background-color: #512500; color: white;" id="test">
        <td class="tbl_txt"><?php echo ($txt->{"team"}[0]->{"txt"})?></td>
        <td class="tbl_txt"><?php echo ($txt->{"team"}[1]->{"txt"})?></td>
        <td class="tbl_txt"><?php echo ($txt->{"team"}[2]->{"txt"})?></td>
        <td class="tbl_txt"><?php echo ($txt->{"team"}[3]->{"txt"})?></td>
    </tr>
    <tr>
        <td>
            <table id="tbl">
                <tr>
                    <?php foreach($txt->{"team"}[0]->{"work"} as $src){echo "<td><span title='".$src."'><img src='icon/work/".$src.".png'></span></td> ";}?>
                </tr>
                <tr>
                <?php foreach($txt->{"team"}[0]->{"work"} as $src){echo "<td>".$src."</td> ";}?>
                </tr>
            </table>
        </td>
        
        <td>
            <table id="tbl">
                <tr>
                    <?php foreach($txt->{"team"}[1]->{"work"} as $src){echo "<td><span title='".$src."'><img src='icon/work/".$src.".png'></span></td> ";}?>
                </tr>
                <tr>
                <?php foreach($txt->{"team"}[1]->{"work"} as $src){echo "<td>".$src."</td> ";}?>
                </tr>
            </table>
        </td>
        
        <td>
            <table id="tbl">
                <tr>
                    <?php foreach($txt->{"team"}[2]->{"work"} as $src){echo "<td><span title='".$src."'><img src='icon/work/".$src.".png'></span></td> ";}?>
                </tr>
                <tr>
                <?php foreach($txt->{"team"}[2]->{"work"} as $src){echo "<td>".$src."</td> ";}?>
                </tr>
            </table>
        </td>
        
        <td>
            <table id="tbl">
                <tr>
                    <?php foreach($txt->{"team"}[3]->{"work"} as $src){echo "<td><span title='".$src."'><img src='icon/work/".$src.".png'></span></td> ";}?>
                </tr>
                <tr>
                <?php foreach($txt->{"team"}[3]->{"work"} as $src){echo "<td>".$src."</td> ";}?>
                </tr>
            </table>
        </td>
        
    </tr>
    </table>
    <!-- mobile version!-->
    <div class="resposive">
        <?php 
            foreach ($txt->{"team"} as $member) {
                echo '<div id="bigtitle" style="text-align: center;">'.$member->{"name"}.'</div>';
                echo $member->{"txt"};
                foreach ($member->{"work"} as $src){
                    echo "<span title='".$src."'><img src='icon/work/".$src.".png'></span>";
                }
            }
        ?>
    </div>
</div>

<footer>
    <?php include "content/footer.php"?>
</footer>

</span>

 