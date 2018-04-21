<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
?>
 				<form style="padding-left: 70px;" action="sudo_follow_up.php" id="" name="" method="post" onsubmit="return welcome_validate();">
                    <table class="login-page" style="width: 80%;">
                        <th ><h3><b><i>Please Select :</i></b></h3></th>
				        <legend style="font-family: Monotype Corsiva,arial,sans-serif; font-size:18px;"></legend>
                        <tr><td><p style="font-family: Monotype Corsiva,arial,sans-serif; font-size:20px;"><a href="match_details_selection.php">Create Match Details</a></p>
    <p style="font-family: Monotype Corsiva,arial,sans-serif; font-size:20px;"><a href="match_list.php">Match List</a></p>
    <p style="font-family: Monotype Corsiva,arial,sans-serif; font-size:20px;"><a href="guest_welcome.php">Tally For Bidders</a></p>
    <p style="font-family: Monotype Corsiva,arial,sans-serif; font-size:20px;"><a href="pageMul_1.php">Pagination</a></p></td></tr>
                     </table>   
			   </form>
                     		<div style="clear: both;">&nbsp;</div> 
      </div> 
        <div class="post">                
   <!-- Including the new code for Tally Quick View (BEGIN) ------!>
   	<table class="login-page">
    <th colspan="5" ><h3><b><i>Current Stats of Bidders :</i></b></h3></th>
    <tr style="font-weight: bold;">
        <td>Bidders in Game :</td><td>IPL Tally :</td><td>WT20 Tally :</td><td>Net Profit/Loss :</td><td>Current Status :</td></tr>
<?php
	$getUserQuery="Select * from tally_bidders";
	$UserQueryResult = $ob-> fetch_values($getUserQuery);
	if ($UserQueryResult == 'false' || $UserQueryResult == null )
	{
		echo "Sorry No records fetched";
	}
	else
	{
		while ($row = mysqli_fetch_array($UserQueryResult))
        {
            $userID = $row['bidder_id'];
      		$bidderName = $row['bidder_name'];
      		$IPLQuery="SELECT tnt.tally_net_amt,tmd.tally_series_type FROM tally_bidders tb 
                        INNER JOIN tally_net_transaction tnt ON tb.bidder_id=tnt.tally_net_bidder_name
                        INNER JOIN tally_match_details tmd ON tmd.match_details_id=tnt.tally_net_match_details_id_fk
                        INNER JOIN tally_transaction_details ttd ON ttd.tally_transc_id=tnt.tally_net_transc_details_id_fk
                        WHERE tb.bidder_id=$userID AND tmd.tally_series_type='IPL' AND YEAR(tmd.tally_match_date)= 2017";
            $WCT20Query="SELECT tnt.tally_net_amt,tmd.tally_series_type FROM tally_bidders tb 
                        INNER JOIN tally_net_transaction tnt ON tb.bidder_id=tnt.tally_net_bidder_name
                        INNER JOIN tally_match_details tmd ON tmd.match_details_id=tnt.tally_net_match_details_id_fk
                        INNER JOIN tally_transaction_details ttd ON ttd.tally_transc_id=tnt.tally_net_transc_details_id_fk
                        WHERE tb.bidder_id=$userID AND tmd.tally_series_type='WCT20' AND YEAR(tmd.tally_match_date)= 2017" ;
            
                //echo $IPLQuery;
    //echo $WCT20Query;
    $IPL_Result = $ob-> fetch_values($IPLQuery);
    $WCT20_Result = $ob-> fetch_values($WCT20Query);
    //echo $WCT20_Result;
    //echo $IPL_Result;
    //echo "hello";
    if ($IPL_Result == 'false' || $IPL_Result == null )
    {
        $total_Net_Amount_IPL=0;
        
    }
    else
    {
        $total_Net_Amount_IPL=0;
        while ($row = mysqli_fetch_array($IPL_Result))
            {
               $tally_net_amt_IPL = $row['tally_net_amt'];
               $total_Net_Amount_IPL=$tally_net_amt_IPL+$total_Net_Amount_IPL; 
            }
    }
    if ( $WCT20_Result == 'false' || $WCT20_Result == null )
        {
            $total_Net_Amount_WCT20=0;
            //echo "in the if of WCT20";
        }
    else
    {
        $total_Net_Amount_WCT20=0;
        while ($row = mysqli_fetch_array($WCT20_Result))
            {
               $tally_net_amt_WCT20 = $row['tally_net_amt'];
               $total_Net_Amount_WCT20=$tally_net_amt_WCT20+$total_Net_Amount_WCT20; 
            }
    }
    $total_Net_Amount=$total_Net_Amount_WCT20+$total_Net_Amount_IPL;
    ?>
        <tr>
        <td><?php echo ucfirst("$bidderName"); ?></td>
        <td>Rs. <?php echo $total_Net_Amount_IPL; ?></td>
        <td>Rs. <?php echo $total_Net_Amount_WCT20; ?></td>
    <?php
            if ($total_Net_Amount > 0)
        {
            $netStatus="Profit";
            echo '<td><b style="color:green">Rs.'. $total_Net_Amount . '</b></td>';
            echo '<td><b style="color:green">'. $netStatus . '</b></td>';    
        }
        
            elseif ($total_Net_Amount == 0)
        {
            $netStatus="Neutral";
            echo '<td><b style="color:blue">Rs.'. $total_Net_Amount . '</b></td>';
            echo '<td><b style="color:blue">'. $netStatus . '</b></td>';    
        }
        
        else
        {
            $netStatus="Loss";
            echo '<td><b style="color:red">Rs.'. $total_Net_Amount . '</b></td>';
            echo '<td><b style="color:red">'. $netStatus . '</b></td>';
        }
    }
    ?></tr>
    </table><br />
	

<!-- Including the new code for Tally Quick View (END) ------!>   
      
      
      
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

<?php } 
include ('footer.php'); 
}
else
{
  include ('index.php');
}
?>