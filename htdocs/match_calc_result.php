<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']) || isset($_SESSION['guest']))
{

include ('sudo_header.php');
 if(isset($_POST['submit_bidder']))
 
    {
        $bidderId=$_POST['bidderName'];
        $date1=$_POST['matchdate'];
        $date2=$_POST['matchdate1'];
        $d1="'$date1'";
        $d2="'$date2'"; 
        $bidderName = "SELECT * FROM tally_bidders WHERE bidder_id = $bidderId "; 
        $bidderNameValue = $ob-> fetch_values($bidderName);
            $row = mysqli_fetch_array($bidderNameValue);
            $displayNameDB = $row['bidder_name'];     
        if (($d1 == "'dateFrom'" ) && ($d2 == "'dateTo'" ) )
        {
            //all transaction for the entire session.
            $calculateQuery="SELECT tnt.tally_net_amt,tb.bidder_name,tnt.tally_net_tranc_mdate, tmd.tally_team1, tmd.tally_team2,tmd.tally_match_winner_team,ttd.tally_team_name FROM tally_bidders tb 
            INNER JOIN tally_net_transaction tnt ON tb.bidder_id=tnt.tally_net_bidder_name
            INNER JOIN tally_match_details tmd ON tmd.match_details_id=tnt.tally_net_match_details_id_fk
            INNER JOIN tally_transaction_details ttd ON ttd.tally_transc_id=tnt.tally_net_transc_details_id_fk
            WHERE tb.bidder_id=$bidderId AND YEAR(tmd.tally_match_date)= 2017";
         }
         else
         {
            //incase of the date values are supplied for result fetching.
            $calculateQuery="SELECT tnt.tally_net_amt,tb.bidder_name,tnt.tally_net_tranc_mdate, tmd.tally_team1, tmd.tally_team2,tmd.tally_match_winner_team,ttd.tally_team_name FROM tally_bidders tb 
                                INNER JOIN tally_net_transaction tnt ON tb.bidder_id=tnt.tally_net_bidder_name
                                INNER JOIN tally_match_details tmd ON tmd.match_details_id=tnt.tally_net_match_details_id_fk
                                INNER JOIN tally_transaction_details ttd ON ttd.tally_transc_id=tnt.tally_net_transc_details_id_fk
                                WHERE tb.bidder_id=$bidderId AND YEAR(tmd.tally_match_date)= 2017 AND tnt.tally_net_tranc_mdate BETWEEN $d1 AND $d2";

            
         }
$bidderNetTransactionList = $ob-> fetch_values($calculateQuery);
    }
else
    {
      echo '<script>alert("Please Select a bidder...!!!"); window.location = "guest_welcome.php"</script>';  
    }
if ($bidderNetTransactionList == true || $bidderNetTransactionList != null)
  {
    
?>
<form id="ex3" style="overflow-y: scroll; height: 500px;">
<table class="login-page" style="width: 90%; ">
<th colspan="7" ><h3><i>Bidder's Tally For : <?php echo $displayNameDB; ?> </i></h3></th>

<!--<table class="match-details">--!>
<tr><td>S.No</td><td>Bidder's Name</td><td>Bidding Date</td><td>Match Detail</td><td>Winning Team</td><td>Bidder's Team</td><td>Bidder's Net Amt(Rs.)</td></tr>
<?php   
        $i=1;
        $total_Net_Amount=0;
        while ($row = mysqli_fetch_array($bidderNetTransactionList))
        {
            
            $bidderName = $row['bidder_name'];
            $tally_net_amt = $row['tally_net_amt'];
            $tally_net_tranc_mdate= $row['tally_net_tranc_mdate'];
            $tally_team1= $row['tally_team1'];
            $tally_team2= $row['tally_team2'];
            $tally_match_winner_team= $row['tally_match_winner_team'];
            $bidders_team_name= $row['tally_team_name'];
            //$matchdate= $row['tally_match_date'];
            $total_Net_Amount=$tally_net_amt+$total_Net_Amount;

?>

<tr><td><?php echo $i; ?> </td><td><?php echo $bidderName; ?></td><td><?php echo $tally_net_tranc_mdate; ?></td><td><?php echo $tally_team1; ?>&nbsp;vs&nbsp;<?php echo $tally_team2; ?></td>
<td><?php echo $tally_match_winner_team;  ?></td><td><?php echo $bidders_team_name;  ?></td><td><b style="color:blue"><?php echo 'Rs.'. $tally_net_amt ;?></td>
<?php
            $i++; 
        }
        if ($total_Net_Amount >= 0)
        {
            echo '<tr><td colspan="6"><b>Total Net Earning  :</td><td><b style="color:green">Rs.'. $total_Net_Amount . '</b></td>';    
        }
        else
        {
            echo '<tr><td colspan="6"><b>Total Net Loss  :</td><td><b style="color:red">Rs.'. $total_Net_Amount . '</b></td>';
        } 
    }
?>

</table>
</form>
<br />
<a href="new_report.php?Pid=<?php echo $bidderId;?> "><i>Click Here</i></a>for the Report


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

<?php
include ('footer.php');
}
else
{
   echo '<script>alert("Please Login to see the details...!!!"); window.location = "index.php"</script>';
}
?>