<?php
if(isset($_SESSION['admin']))
{
  //$biddersDetails = "SELECT * FROM b17_14312762_tallyworld.tally_transaction_details WHERE tally_match_details_id_fk='$match_id'";
  $biddersDetails = "SELECT * FROM b17_14312762_tallyworld.tally_transaction_details, b17_14312762_tallyworld.tally_bidders WHERE tally_bidder_name=bidder_id AND tally_match_details_id_fk='$match_id' ";
  $resultBiddersDetails = $ob-> fetch_values($biddersDetails);
  if ($resultBiddersDetails == true || $resultBiddersDetails != null)
  {
?>
<table class="login-page" style="width: 90%;">
<th colspan="6" ><h3><i>Bidders in the Game :</i></h3></th>
<tr><td>Bidder Name</td><td>Bidding Team</td><td>Bidding Rate</td><td>Bidding Amount</td><td colspan="2">Edit/Del</td></tr>
<?php
while ($row = mysqli_fetch_array($resultBiddersDetails))
{
    $bidderId = $row['bidder_id'];
    $biddersName = $row['bidder_name'];
    $BiddersTeanName= $row['tally_team_name'];
    $BiddingRate= $row['tally_rate'];
    $BiddingAmount= $row['tally_amt'];
    $transc_id= $row['tally_transc_id'];
    //$matchdate= $row['tally_match_date'];

?>

<tr><td><?php echo $biddersName; ?> </td><td><?php echo $BiddersTeanName; ?></td><td><?php echo $BiddingRate; ?></td><td><?php echo $BiddingAmount; ?></td>
<td><a href="edit_n_delete.php?id=<?php echo $transc_id;?>&pid=<?php echo $bidderId;?> ">Edit</a></td><td><a href="edit_n_delete.php">Delete</a></td></td>
</tr>
<?php 
    }?>
</table>    
       <br />
            </div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
                <li>
					<!--<h2>News Updates :</h2>-->
					<ul>
                        <!--<li><img src="images/login_1.png" width="280px" height="280px"/></li>
                        <li><img src="images/teamLogo/kkr.png"/><img src="images/teamLogo/mi.png"/></li>
                        <li><img src="images/teamLogo/pune.png"/><img src="images/teamLogo/punjab.png"/></li>
                        <li><img src="images/teamLogo/rcb.png"/><img src="images/teamLogo/srh.png"/></li>
                   </ul>-->
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
    else
    {
        echo '<strong><i>Bidders yet to be Added for the Match..!!!<i></strong>';
    }
}
?>