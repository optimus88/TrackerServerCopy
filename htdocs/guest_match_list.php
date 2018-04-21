<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['guest']))
{
$userID = $_SESSION["guest_id"];
include ('sudo_header.php');
$num_rec_per_page=10;
if (isset($_GET["page"])) 
	{ 
	$page  = $_GET["page"];
    //$series_name = $_GET['seriesName'];
	} 
else 
	{ 
	$page=1;
    //$series_name = $_GET['seriesName'];
	}; 
$start_from = ($page-1) * $num_rec_per_page; 
//$matchListDisplay = "SELECT * FROM tally_match_details ORDER BY tally_match_date DESC ";
$matchListDisplay = "SELECT * FROM tally_match_details WHERE YEAR(tally_match_date)= 2017 ORDER BY tally_match_date DESC LIMIT $start_from, $num_rec_per_page ";
$matchDetailsList = $ob-> fetch_values($matchListDisplay);
?>

<form class="form-style" style="padding-left: 70px;" >
<table class="match-listing" >
<th colspan="6" ><h3><b><i>IPL 2017 Match Fixtures :</i></b></h3></th>
<tr><td>Teams</td><td>Match Type</td><td>Match Venue</td><td>Match Date</td><td>Match Result</td></tr>
<?php
while ($row = mysqli_fetch_array($matchDetailsList))
{
    $match_id = $row['match_details_id'];
    $teamName_1= $row['tally_team1'];
    $teamName_2= $row['tally_team2'];
    $matchType= $row['tally_match_type'];
    $matchVenue= $row['tally_match_venue'];
    $matchdate= $row['tally_match_date'];
    $flag=$row['tally_match_flag'];
    if ($flag == 0)
    {
        $flag_value="In Progress";
    }
    else
    {
        $flag_value="Decided";
    }
    ?>
<tr><td><a href="guest_match_details_display.php?id=<?php echo $match_id;?> "><?php echo $teamName_1; ?> vs <?php echo $teamName_2; ?></a></td><td><?php echo $matchType; ?></td><td><?php echo $matchVenue; ?></td><td><?php echo $matchdate; ?></td>
<?php
if ( $flag_value == "Decided" )
        {
            echo '<td><b style="color:green">'. $flag_value . '</b></td>';    
        }
        else
        {
            echo '<td><b style="color:blue">'. $flag_value . '</b></td>';
        }

?>
</tr>

<?php 
}
?>
<tr><td colspan="6" style="text-decoration: none; padding-left: 150px;">
<?php
// ===== Pagination code for the Guest series listing ===== //
$sqlRecord = "SELECT * FROM tally_match_details WHERE YEAR(tally_match_date)= 2017"; 
$rs_result = $ob-> fetch_values($sqlRecord); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

//echo "<a href='match_list.php?page=1'>".'|<'."</a> ";  //Goto 1st page  
echo "<a href='guest_match_list.php?page=1'>".'First Page |'."</a> ";
for ($i=1; $i<=$total_pages; $i++) 
    { 
            echo "<a href='guest_match_list.php?page=".$i."'>Page ".$i." |</a> "; 
    }; 
echo "<a href='guest_match_list.php?page=$total_pages'>".'| Last Page'."</a> ";


// ======= Pagination code ends here ==================== //

?>

</table>    
</form>
<br />
            </div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
                <li>
					<h2>News Updates :</h2>
					<ul>
                        <li><img src="images/teamLogo/delhi.png"/><img src="images/teamLogo/guj.png"/></li>
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
?>
