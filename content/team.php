<span class="globe">
    <div style="margin-top: 63px"></div>
    <div class="content_project">
    <div id="bigtitle" style="text-align: center;"><?php echo ($txt->{"team_title"})?></div>
    <div style="text-align: center;"><?php echo ($txt->{"team_description"})?></div>
    <table id="tbl" style="width: 100%; border-spacing: 10px; border-collapse: separate;" class="pc">
    <tr>
    <tr style="" id="">
        <td><?php echo ($txt->{"team"}[0]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[1]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[2]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[3]->{"name"})?></td>
    </tr>
    <tr class="team_txt">
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
    <div class="responsive" style="text-align:center">
        <?php 
            foreach ($txt->{"team"} as $member) {
                echo '<div id="bigtitle" style="margin-top: 100px">'.$member->{"name"}.'</div>';
                echo "<div class='team_txt'>".$member->{"txt"}."</div>";
                echo "<br>";
                echo "<table style='text-align: center; margin-left: auto; margin-right: auto;'>";
                echo "<tr>";
                foreach ($member->{"work"} as $src){
                    echo "<td><span title='".$src."'><img src='icon/work/".$src.".png' width=50 height=50></span></td>";
                }
                echo "</tr><tr>";
                foreach ($member->{"work"} as $work){
                    echo "<td>".$work."</td>";
                }
                echo "</tr>";
                echo "</table>";
            }
        ?>
    </div>
</div>
<div class="push"></div>
<footer>
    <?php include "content/footer.php"?>
</footer>

</span>

 