<?php
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
include('blogic.php');
$ob = new blogic();
$transactionID=$_GET["id"];
$palyerID=$_GET["pid"];
$eventEdit=$_GET["event"];
$transcSelectQuery = "SELECT tally_bidder_name,tally_transc_id,bidder_name,bidder_id,tally_amt,tally_rate,tally_team_name FROM tally_transaction_details,tally_bidders WHERE tally_transc_id='$transactionID' AND bidder_id='$palyerID'";
//echo $teamSelectQuery;
//include ('sql_Queries.properties');
$result1 = $ob-> fetch_values($transcSelectQuery);
$row = mysqli_fetch_array($result1);
$bidder_name= $row['bidder_name'];
$bidder_id= $row['bidder_id'];
$tally_amt= $row['tally_amt'];
$tally_rate= $row['tally_rate'];
$tally_transc_id= $row['tally_transc_id'];
$tally_team_name= $row['tally_team_name'];
}
?>
<!-- Here is the player addition form -->
<fieldset>
<legend>Edit Player Details : </legend>
<form id="myForm" action="sudo_edit_bidders.php"  name="myForm" method="post" onsubmit="return follow_up_validate();" >
<table class="match-details">
<th colspan="4" ><h3><i>Edit Bidder Details :</i></h3></th>
<tr>
    <td><label style="font-weight: bold;">Bidder Name :</label></td>
    <td><label style="font-weight: bold;">Bidding Team :</label></td>
    <td><label style="font-weight: bold;">Bidding Ratio :</label></td>
    <td><label style="font-weight: bold;">Bidding Amount :</label></td>
</tr>
<tr>
      <td><input type="hidden" value="<?php echo $row['tally_transc_id']; ?>" name="tally_transc_id" id="tally_transc_id" />
          <label style="font-weight: bold;"><?php echo ucfirst("$bidder_name");?> </label></td>
      <td><label style="font-weight: bold;"><?php echo $tally_team_name;?></label></td>
      <td><input type="text" name="rate" id="rate" size="10px" value="<?php echo $tally_rate;?>" /></td>
      <td><input type="text" name="initialAmount" size="10px" id="initialAmount" value="<?php echo $tally_amt;?>" />
          <input type="hidden" name="event" size="10px" id="event" value="<?php echo $eventEdit;?>" /></td></tr>
<?php 
//    while($row = mysql_fetch_array($result1))
//        {
//	       echo '<option value="'. $row['team_id'] . '">'. $row['team_name']  . '</option>';
//        }
?>

<tr>
                      
                      <td colspan="4">
                        <input style="alignment-adjust: central;" class="styled-button-1" type="submit" name="edit_submit" value="SAVE" />
                        <input class="styled-button-1" type="button" value="BACK" onclick="window.history.go(-1); return false;" />
                        <!-- <input type="reset" name="Cancel" value="Cancel" /> -->
                       </td>
                      </tr>
</table>
</form>
</fieldset>

            </div>
		</div>
		<!-- end #content -->
        <?php include ('sidebar_teamLogo.php'); ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"></div>
	<!-- end #page -->
</div>
<?php include ('sudo_footer_1.php'); ?>