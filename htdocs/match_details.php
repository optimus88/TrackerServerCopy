<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
if(isset($_POST['submit_match_details_selection']))
    {  
        $series_name = $_POST['series_name'];
        //echo "name of the series : $series_name";
        $teamSelectQuery = "SELECT team_id,team_name FROM tally_teams WHERE team_series='$series_name' AND team_active_flag=1 ORDER BY team_name ASC ";
        //echo $teamSelectQuery;
        $result1 = $ob-> fetch_values($teamSelectQuery);
        $result2 = $ob-> fetch_values($teamSelectQuery);
        //echo "Result value :";
        //echo $result1;
        if($result1 != 'false')
        {
?>
<form class="form-style" id="myForm" action="match_details_addition.php" name="myForm" method="post" onsubmit="return match_details_validate();" >
<table class="login-page" style="width: 80%; cellpadding=15px; cellspacing=20px">
<th colspan="2" ><h3><b><i>Please Create Match Details :</i></b></h3></th>
<!--<form id="myForm" action="match_details_player_addition.php" name="myForm" method="post" onsubmit="return match_details_validate();" >
<table class="profile_table" style="cellpadding=15px; cellspacing=20px">-->
<tr>
<td style="width: 50% ;"><b>Team Name (T1) :</b></td>
<td>
                            <select name="teamName_1" id="teamName_1"  >
                            <option value="select" >-----------------Select-----------------</option>
                            <?php 
                            while($row = mysqli_fetch_array($result1))
                                {
	                           echo '<option value="'. $row['team_id'] . '">'. $row['team_name']  . '</option>';
                                }
                           ?>
                            

<tr>
<td></td>
<td><label id="vs"><b>VS</b></label></td>
</tr>                            
</td> 
</tr>
<tr>
<td><b>Team Name (T2) :</b></td>
<td>
                            <select name="teamName_2" id="teamName_2"  >
                            <option value="select" >-----------------Select-----------------</option>
                            <?php 
                            while($row = mysqli_fetch_array($result2))
                                {
	                           echo '<option value="'. $row['team_id'] . '">'. $row['team_name']  . '</option>';
                                }
	        
                            ?>

                            </select>
<?php 
}
    else
    echo '<script>alert("Sorry..!!! No Records Fetched.."); window.location = "index.php"</script>';
 ?>                           
</td> 
</tr>
<tr>
<td><b>Match Type :</b></td>
<td>
                            <select name="matchType" id="matchType" >
                            <option value="select" >-----------------Select-----------------</option>
                            <option value="Day">Day</option>
                            <option value="D/N">Day & Night</option>
                            </select>
</td>
</tr>
<tr>
<td><b>Match Venue :</b></td>
<td>

		
							<select name="matchVenue" id="matchVenue" >
                            <option value="select" >-----------------Select-----------------</option>
							<option value="Delhi">Delhi</option>
							<option value="Punjab">Punjab</option>
							<option value="Chennai">Chennai</option>
                            <option value="Mumbai">Mumbai</option>
							<option value="Kolkata">Kolkata</option>	
							<option value="Hydrabad">Hydrabad</option>
							<option value="Rajsthan">Rajsthan</option>
							<option value="Bangalore">Bangalore</option>
                            </select>
							
</td> 
</tr>
<tr>
<td><b>Match Date :</b></td>
<td><input type="text" name="matchdate" size="24px" id="matchDate" /></td>

</tr>
<tr>
                      <!--<td></td>--!>
                      <td colspan="2" style="padding-left: 140px; alignment-adjust: middle;">
                      <input type="hidden" name="seriesType" id="seriesType" value="<?php echo $series_name; ?>" />
                        <input class="styled-button-1" type="submit" name="submit_match_details" value="Submit" />
                        <input class="styled-button-1" type="reset" name="Cancel" value="Cancel" />
                        <input class="styled-button-1" type="button" name="Back" value="Back" onclick="window.history.go(-1); return false;" /></td>
                        
                      </tr>
</table>
</form>
<?php 
    }
    else
    {
        echo '<script>alert("Sorry..!!! SomeError Occoured.."); window.location = "sudo_welcome.php"</script>';
    }
} ?>
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
include ('footer.php'); ?>
