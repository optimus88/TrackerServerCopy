<?php
include('blogic.php');
$ob = new blogic();
session_start();
if( isset($_SESSION["guest"]) )
{
include ('sudo_header.php');
//if(isset($_SESSION['admin']))
    $userID = $_SESSION["guest_id"];
    $queryPlayerDetails="SELECT * FROM tally_bidders where bidder_id = $userID ";
    $playerResultSet = $ob-> fetch_values($queryPlayerDetails);
    if ($playerResultSet != false && $playerResultSet != null)
        {
            
?>
<form style="padding-left: 50px;" id="myForm" action="match_calc_result.php" name="myForm" method="post" onsubmit="return player_selection();" >
   	<table class="login-page" style="width: 90%; ">
    <th colspan="2" ><h3><i>Bidder Selection : </i></h3></th>
<tr>
<td >Please Select Bidder :</td>
<td>
                            <select name="bidderName" id="bidderName"  >
                            <option value="select" >-----------------Select-----------------</option>
                            <?php 
                            while($row = mysqli_fetch_array($playerResultSet))
                                {
	                           echo '<option value="'. $row['bidder_id'] . '">'. $row['bidder_name']  . '</option>';
                                }
                           ?>
                            

</td>
</tr>
<tr>
<td>Match Date FROM :</td>
<td><input type="text" name="matchdate" size="24px" id="matchDate" value="dateFrom" onfocus="if (this.value=='dateFrom') this.value='';" onblur="if(this.value == ''){this.value='dateFrom';}" /></td>

</tr>
<tr>
<td>Match Date TO :</td>
<td><input type="text" name="matchdate1" size="24px" id="matchDate1" value="dateTo" onfocus="if (this.value=='dateTo') this.value='';" onblur="if(this.value == ''){this.value='dateTo';}" /></td>

</tr>


<!--<tr><td>Match Date TOO :</td>
<td><input type="text" name="matchdate2" size="24px" id="matchDate2" value="dateToo" onfocus="javascript:NewCssCal('matchDate2','yyyyMMdd')" onblur="if(this.value == 'dateToo'){this.value='dateToo';}" />
<img src="images/cal.gif" onclick="javascript:NewCssCal('matchDate2','yyyyMMdd')" style="cursor:pointer"/>
</td></tr>--!>


<tr>
<td colspan="2" style="padding-left: 140px; alignment-adjust: middle;">
<input class="styled-button-1" type="submit" name="submit_bidder" value="Submit" />
<input class="styled-button-1" type="reset" name="Cancel" value="Cancel" />
<input class="styled-button-1" type="button" name=" Back " value=" Back "onclick="window.history.go(-1); return false;" /></td>
</td></tr>
</table>
</form>
<br />
<?php            
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
	<!-- end #page -->

<?php
include ('footer.php');        
}
//session_start();
//if(isset($_SESSION['admin']))
elseif( isset($_SESSION["admin"]) )
{
    include ('sudo_header.php');
    $userID = $_SESSION["admin"];
    $queryPlayerDetails="SELECT * FROM tally_bidders ";
    $playerResultSet = $ob-> fetch_values($queryPlayerDetails);
    if ($playerResultSet != false && $playerResultSet != null)
        {
            
?>
<form style="padding-left: 50px;" id="myForm" action="match_calc_result.php" name="myForm" method="post" onsubmit="return player_selection();" >
   	<table class="login-page" style="width: 90%; ">
    <th colspan="2" ><h3><i>Bidder Selection : </i></h3></th>
<tr>
<td >Please Select Bidder :</td>
<td>
                            <select name="bidderName" id="bidderName"  >
                            <option value="select" >-----------------Select-----------------</option>
                            <?php 
                            while($row = mysqli_fetch_array($playerResultSet))
                                {
	                           echo '<option value="'. $row['bidder_id'] . '">'. $row['bidder_name']  . '</option>';
                                }
                           ?>
                            

</td>
</tr>
<tr>
<td>Match 'FROM' Date :</td>
<td><input type="text" name="matchdate" size="24px" id="matchDate" value="dateFrom" onfocus="if (this.value=='dateFrom') this.value='';" onblur="if(this.value == ''){this.value='dateFrom';}" /></td>

</tr>
<tr>
<td>Match 'TO' Date :</td>
<td><input type="text" name="matchdate1" size="24px" id="matchDate1" value="dateTo" onfocus="if (this.value=='dateTo') this.value='';" onblur="if(this.value == ''){this.value='dateTo';}" /></td>

</tr>


<!--<tr><td>Match Date TOO :</td>
<td><input type="text" name="matchdate2" size="24px" id="matchDate2" value="dateToo" onfocus="javascript:NewCssCal('matchDate2','yyyyMMdd')" onblur="if(this.value == 'dateToo'){this.value='dateToo';}" />
<img src="images/cal.gif" onclick="javascript:NewCssCal('matchDate2','yyyyMMdd')" style="cursor:pointer"/>
</td></tr>--!>


<tr>
<td colspan="2" style="padding-left: 140px; alignment-adjust: middle;">
<input class="styled-button-1" type="submit" name="submit_bidder" value="Submit" />
<input class="styled-button-1" type="reset" name="Reset" value="Reset" />
<input class="styled-button-1" type="button" name=" Back " value=" Back "onclick="window.history.go(-1); return false;" /></td>
</td></tr>
</table>
</form>
<br />
<?php            
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
	<!-- end #page -->


<?php
include ('footer.php');
}
else
{

   echo $_SESSION["guest"];
   echo '<script>alert("Please Login to see the details...!!!"); window.location = "index.php"</script>';
}
?>