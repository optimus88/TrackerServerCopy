<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
$teamName_1=$_POST['teamName1'];
$teamName_2=$_POST['teamName2'];
//echo $order;
$matchType=$_POST['matchDate'];

//echo $version;
$match_details_id = $_POST['match_details_id'];
$matchResultDecide = "SELECT * FROM tally_match_details WHERE tally_match_flag=0 AND match_details_id=$match_details_id";
$result1 = $ob-> fetch_values($matchResultDecide);
?>

<form  action="result_manupulation.php" method="post" id="" name="match_result" >
<table class="login-page" style="width: 100%; cellpadding=15px; cellspacing=20px">
<th colspan="9"><h3><b><i>Match Result Declaration :</i></b></h3></th>
<tr style="font-weight: bold;"><td>Teams</td><td>Match Type</td><td>Match Venue</td><td>Match Date</td><td>Match Result</td></tr>
<?php
if ($result1 == "false" || $result1 == null)
{
    echo '<script>alert("No Match for deciding the Result..!!!"); window.location = "sudo_welcome.php"</script>';
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
<tr><td><?php echo $teamName_1; ?> <b>vs</b> <?php echo $teamName_2 ?> </td><td><?php echo $matchType; ?></td><td><?php echo $matchVenue; ?></td><td><?php echo $matchdate; ?></td>
<td colspan="2" style="cellpadding=10px; cellspacing=10px"><input type="radio" name="teamName" id="teamName" value="<?php echo $teamName_1;?>"/><?php echo $teamName_1;?>
                <input type="radio" name="teamName" id="teamName" value="<?php echo $teamName_2;?>"/><?php echo $teamName_2;?></td>
</tr>  
<?php      
    }
    } 
?>

<tr><td colspan="5" style="padding-left: 200px;">
<input class="styled-button-1" type="button" name="back" value="Back" onclick="window.history.go(-1); return false;" />&nbsp;&nbsp;&nbsp;
<input class="styled-button-1" type="submit" name="Submit Result" value="Submit Result" />
</td>
<tr>
    
        <input type="hidden" name="matchID" value="<?php echo $match_id;?>"  id="matchID" />
        <input type="hidden" name="matchDate" value="<?php echo $matchdate;?>"  id="matchDate" />
    
</tr></tr>
</table>
</form>
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
<?php
}
include ('footer.php'); 
?>