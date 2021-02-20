<table id="tbl">
  <tr>
  <tr style="">
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
    <td><?php foreach($txt->{"team"}[0]->{"wrok"} as $src){echo "<img src='icon/work".$src."' width='' height=''> ";}?></td>
    <td><?php foreach($txt->{"team"}[0]->{"wrok"} as $src){echo "<img src='icon/work".$src."' width='' height=''> ";}?></td>
    <td><?php foreach($txt->{"team"}[0]->{"wrok"} as $src){echo "<img src='icon/work".$src."' width='' height=''> ";}?></td>
    <td><?php foreach($txt->{"team"}[0]->{"wrok"} as $src){echo "<img src='icon/work".$src."' width='' height=''> ";}?></td>
  </tr>
 </table>