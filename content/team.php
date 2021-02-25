<span class="globe">
    <div style="margin-top: 63px"></div>
    <div class="content_project">
    <div id="bigtitle" style="text-align: center;">Présentation de l'équipe</div>
    <table id="tbl">
    <tr>
    <tr style="" id="">
        <td><?php echo ($txt->{"team"}[0]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[1]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[2]->{"name"})?></td>
        <td><?php echo ($txt->{"team"}[3]->{"name"})?></td>
    </tr>
    <tr style="background-color: #512500; color: white">
        <td><?php echo ($txt->{"team"}[0]->{"txt"})?></td>
        <td><?php echo ($txt->{"team"}[1]->{"txt"})?></td>
        <td><?php echo ($txt->{"team"}[2]->{"txt"})?></td>
        <td><?php echo ($txt->{"team"}[3]->{"txt"})?></td>
    </tr>
    <tr>
        <td><?php foreach($txt->{"team"}[0]->{"work"} as $src){echo "<span title='".$src."'><img src='icon/work/".$src.".png'></span> ";}?></td>
        <td><?php foreach($txt->{"team"}[1]->{"work"} as $src){echo "<span title='".$src."'><img src='icon/work/".$src.".png'></span> ";}?></td>
        <td><?php foreach($txt->{"team"}[2]->{"work"} as $src){echo "<span title='".$src."'><img src='icon/work/".$src.".png'></span> ";}?></td>
        <td><?php foreach($txt->{"team"}[3]->{"work"} as $src){echo "<span title='".$src."'><img src='icon/work/".$src.".png'></span> ";}?></td>
        
    </tr>
    </table>
</div>

<footer>
    <span class="footer_txt">Nous réseaux :</span>
    <span class="footer_img" style=""><a href="https://github.com/BeyondStyx"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/1200px-Octicons-mark-github.svg.png" height="30" width="30"></a></span>
</footer>

</span>

 