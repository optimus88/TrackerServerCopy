<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['guest']))
{
include ('sudo_header.php');
$matchIdValue = $_GET["id"];
$teamSelectQuery = "SELECT * FROM tally_match_details WHERE tally_match_flag=0 AND match_details_id=$matchIdValue";
$result1 = $ob-> fetch_values($teamSelectQuery);
$teamSelectQuery_1 = "SELECT * FROM tally_match_details WHERE tally_match_flag=1 AND match_details_id=$matchIdValue";
$result2 = $ob-> fetch_values($teamSelectQuery_1);
if ($result1 == "false" || $result1 == null)
{
    
    while ($row = mysqli_fetch_array($result2))
        {
        $match_id = $row['match_details_id'];
        $teamName_1= $row['tally_team1'];
        $teamName_2= $row['tally_team2'];
        $matchType= $row['tally_match_type'];
        $matchVenue= $row['tally_match_venue'];
        $matchdate= $row['tally_match_date'];
        }?>
        <form>    
            <table class="login-page" style="width: 90%;">
            <th colspan="4" ><h3><i>Match Details :</i></h3></th>
            <tr>
            <td><b>Match</b></td><td><b>Match Date :</b></td><td><label><b>Match Type :</b></label></td><td><label><b>Match Venue :</b></label></td>
            </tr><tr>
            <td><?php echo "$teamName_1"?> vs <?php echo "$teamName_2"?></td>
            <td><label><?php echo "$matchdate" ?></label></td>
            <td><label><?php echo "$matchType" ?></label></td>
            <td><label><?php echo "$matchVenue" ?></label></td>
            </tr>
            </table>
         </form>   
        <form action="match_result.php" method="post" >
            <table>
                <tr>
                <td><input type="hidden" value="<?php echo $match_id ; ?>" id="match_details_id" name="match_details_id" /></td>
                <td><input type="hidden" value="<?php echo "$teamName_1"?>" id="teamName1" name="teamName1" /></td>
                <td><input type="hidden" value="<?php echo "$teamName_2"?>" id="teamName2" name="teamName2" /></td>
                <td><input type="hidden" value="<?php echo "$matchdate"?>" id="matchDate" name="matchDate" /></td>
                <td><input type="hidden" value="<?php echo "yes"?>" id="resultDeclare" name="resultDeclare" /></td>
            
                </tr>
            </table>
            </form>
        </div>        
            <div class="post">
<?php
        if ($match_id != null && $match_id > 0)
            {
                include ('guest_bidding_history_list.php');
            }
    
}
  else
    {
      while ($row = mysqli_fetch_array($result1))
        {
        $match_id = $row['match_details_id'];
        $teamName_1= $row['tally_team1'];
        $teamName_2= $row['tally_team2'];
        $matchType= $row['tally_match_type'];
        $matchVenue= $row['tally_match_venue'];
        $matchdate= $row['tally_match_date'];

?>
<table class="login-page" style="width: 90%;">
<th colspan="4" ><h3><i>Match Details :</i></h3></th>
    <tr>
      <td><b>Match</b></td><td><b>Match Date :</b></td><td><label><b>Match Type :</b></label></td><td><label><b>Match Venue :</b></label></td>
    </tr>
    <tr>
            <td><?php echo "$teamName_1"?> vs <?php echo "$teamName_2"?></td>
            <td><label><?php echo "$matchdate" ?></label></td>
            <td><label><?php echo "$matchType" ?></label></td>
            <td><label><?php echo "$matchVenue" ?></label></td>
            </tr>
<?php      
    }
     
?>
</table>
<br />

<!-- REmOVED FROM HERE --!>
<?php 
//echo $match_id;
    if ($match_id != null && $match_id > 0)
    {
        include ('bidders_in_the_game.php');
    }
    } ?>
    

<div style="clear: both;">&nbsp;</div>
            </div>
		</div>
            	      
		<!-- end #content -->
		<div id="sidebar">
			<ul>
                <li>
					<h2>News Updates :</h2>
					<ul>
                        <li><img src="images/teamLogo/delhi.png"/>VS<img src="images/teamLogo/guj.png"/></li>
                        <li><img src="images/teamLogo/kkr.png"/><img src="images/teamLogo/mi.png"/></li>
                        <li><img src="images/teamLogo/pune.png"/><img src="images/teamLogo/punjab.png"/></li>
                        <li><img src="images/teamLogo/rcb.png"/><img src="images/teamLogo/srh.png"/></li>
                   </ul>
                </li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"></div>
	<!-- end #page -->
    </div>
<?php 
}
include ('footer.php');
?>
