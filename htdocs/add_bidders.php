<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
$matchID=$_POST['match_id'];
//echo $matchID;
$teamSelectQuery = "SELECT * FROM b17_14312762_tallyworld.tally_match_details WHERE match_details_id=$matchID";
//echo $teamSelectQuery;
$result1 = $ob-> fetch_values($teamSelectQuery);
$bidderSelectQuery = "SELECT * FROM b17_14312762_tallyworld.tally_bidders";
$result2 = $ob-> fetch_values($bidderSelectQuery);
$row = mysqli_fetch_array($result1);
$team1= $row['tally_team1'];
$team2= $row['tally_team2'];
?>
<!-- Begining of the player addition form -->

<form id="myForm" action="sudo_add_bidders.php"  name="myForm" method="post" onsubmit="return follow_up_validate();" >
<table class="login-page" style="width: 80%; cellpadding=15px; cellspacing=20px">
<th colspan="4"><h3><b><i>Adding Bidders :</i></b></h3></th>
<input type="hidden" value="<?php echo $row['match_details_id']; ?>" name="match_details_id" id="match_details_id" />
<input type="hidden" value="<?php echo $row['tally_match_date']; ?>" name="match_date" id="match_date" />
<tr>
<td><b>Select Bidder :</b></td><td>
                            <select name="playerName" id="playerName"  >
                            <option value="select" >-----------------Select-----------------</option>
                            <?php
                            while($row = mysqli_fetch_array($result2))
                                {
	                           echo '<option value="'. $row['bidder_id'] . '">'. $row['bidder_name']  . '</option>';
                                }
                           ?>

                           </select>
                            
</td></tr> 
<tr><td><b>Bidding Team :</b></td><td>
                            <select name="teamName" id="teamName"  >
                            <option value="select" >-----------------Select-----------------</option>
                            <option value="<?php echo $team1; ?>" ><?php echo $team1; ?></option>
                            <option value="<?php echo $team2; ?>" ><?php echo $team2; ?></option>
                            </select>
</td></tr> 
<tr><td><b>Bidding Rate :</b></td><td><input type="text" name="rate" id="rate" size="10px" value="rate" onfocus="if (this.value=='rate') this.value='';" onblur="if(this.value == ''){this.value='rate';}"/></td></tr>
<tr><td><b>Bidding Amount :</b></td><td><input type="text" name="initialAmount" size="10px" id="initialAmount" value="amount" onfocus="if (this.value=='amount') this.value='';" onblur="if(this.value == ''){this.value='amount';}"/></td></tr>
<tr>
                      
                      <td colspan="4" style="padding-left: 170px;">
                        <input  class="styled-button-1" type="submit" name="submit" value="SAVE" />&nbsp;&nbsp;&nbsp;
                        <input class="styled-button-1" action="action" type="button" value="BACK" onclick="window.history.go(-1); return false;" />
                        <!-- <input type="reset" name="Cancel" value="Cancel" /> -->
                       </td>
                      </tr>

</table>
</form>
<!-- END of the player addition form -->
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
include ('footer.php'); ?>