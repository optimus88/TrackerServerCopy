<?php
  //$biddersDetails = "SELECT * FROM b17_14312762_tallyworld.tally_transaction_details WHERE tally_match_details_id_fk='$match_id'";
  $biddersDetails = "SELECT * FROM tally_transaction_details, tally_bidders WHERE tally_bidder_name=bidder_id AND tally_match_details_id_fk='$match_id' ";
  $resultBiddersDetails = $ob-> fetch_values($biddersDetails);
  if ($resultBiddersDetails == true || $resultBiddersDetails != null)
  {
?>
<form>
<table class="login-page" style="width: 90%;">
<th colspan="6" ><h3><i>Bidders Played the Game :</i></h3></th>
<tr><td id="td-header">Bidder Name</td><td>Bidding Team</td><td>Bidding Rate</td><td>Bidding Amount</td><td colspan="2">Result</td></tr>
<?php
while ($row = mysqli_fetch_array($resultBiddersDetails))
{
    $bidderId = $row['bidder_id'];
    $biddersName = $row['bidder_name'];
    $BiddersTeanName= $row['tally_team_name'];
    $BiddingRate= $row['tally_rate'];
    $BiddingAmount= $row['tally_amt'];
    $transc_id= $row['tally_transc_id'];
    $transc_flag=$row['tally_transc_flag'];
    $transc_result=$row['tally_match_result'];
    if ($transc_result == 'W')
    $result_final="WON";
    else
    $result_final="LOST";
    //$matchdate= $row['tally_match_date'];
 if ($transc_flag == 1) 
 {?>
    <tr><td><?php echo $biddersName; ?> </td><td><?php echo $BiddersTeanName; ?></td><td><?php echo $BiddingRate; ?></td><td><?php echo $BiddingAmount; ?></td>
    <td colspan="2" style="color:blue"><?php echo $result_final;?></td>
    </fieldset> 
 <?php }
    else 
        {
?>

<tr><td><?php echo $biddersName; ?> </td><td><?php echo $BiddersTeanName; ?></td><td><?php echo $BiddingRate; ?></td><td><?php echo $BiddingAmount; ?></td>
<td><a href="edit_n_delete.php?id=<?php echo $transc_id;?>&pid=<?php echo $bidderId;?> ">Edit</a></td><td><a href="edit_n_delete.php">Delete</a></td></td>

<?php 
    } 
    }
    ?>
    </table>
</form>

    <!--BEGIN OF New Code for the Revert of the Result declared --!>
    <form id="revertResult" name="revertResult" action="revertResult.php" method="post" >
    <table>
        <tr>
        <td><input type="hidden" value="<?php echo $match_id ; ?>" id="match_details_id_list" name="match_details_id_list" /></td>
        </tr>
        <tr>
        <td><input class="styled-button-1" type="submit" value="Revert Result" name="revert_result" id="revert_result" onclick="confirm_click();" /></td>
        </tr>
        </table>
    </form>
    <!-- END OF New Code for the Revert of the Result declared --!>
<?php }
    else
    {
        echo '<strong><i>Bidders yet to be Added for Playing the Match...!!!<i></strong>';
    }

?>