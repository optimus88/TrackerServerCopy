<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
$teamSeriesQuery = "SELECT team_series FROM tally_teams GROUP BY team_series";
$result1 = $ob-> fetch_values($teamSeriesQuery);
if($result1 != 'false')
{
?>

<form style="padding-left: 60px;" class="form-style" id="matchSeriesForm" action="match_details.php" name="matchSeriesForm" method="post" onsubmit="return match_details_selection();" > 
    <table class="login-page" style="width: 80%; cellpadding=15px; cellspacing=20px">
    <th colspan="2"><h3><b><i>Please Select Series :</i></b></h3></th>
       <tr>
            <td><b>Tournament Series :</b></td>
                <td><select name="series_name" id="series_name"  >
                                <option value="select" >-----------------Select-----------------</option>
                                <?php 
                                while($row = mysqli_fetch_array($result1))
                                    {
    	                           echo '<option value="'. $row['team_series'] . '">'. $row['team_series']  . '</option>';
                                    }
                               ?>
                    </td>            
    
        </tr>
        <tr>
            <td colspan="2" style="padding-left: 130px;">
                     <input class="styled-button-1" type="submit" name="submit_match_details_selection" value="Submit" />&nbsp;&nbsp;
                     <input class="styled-button-1" type="reset" name="Cancel" value="Cancel" />&nbsp;&nbsp;
                     <input class="styled-button-1" type="button" name=" Back " value=" Back "onclick="window.history.go(-1); return false;" /></td>
        </tr>
    </table>
</form>
<?php 
}
else
{
    echo '<script>alert("Sorry..!!! No Records Fetched.."); window.location = "index.php"</script>';
}
}
?>
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
include ('footer.php');
?>