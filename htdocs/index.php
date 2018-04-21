<?php include ('header.php'); ?>
                
                <form action="login_action.php" method="post" style="padding-left: 200px;">
                  <table class="login-page" style="padding-left: 70px;" >
                    <th colspan="2" style="padding-left: 0px; background-image: url(images/img02.jpg) repeat;"><span><h3>Login Please :</h3></span></th>
                    <tr><td>UserName : </td>
                    <td><input type="text" name="uname" /></td>
                    
                    </tr>
                    
                    <tr><td>Password : </td>
                    <td><input type="password" name="upass" /></td>
                    
                    </tr>
                    
                    <tr><td colspan="2" style="padding-left: 170px;"><input class="styled-button-1" type="submit" value="Submit" name="chk_login" />
                    <input class="styled-button-1" type="reset" value="Cancel" /></td></tr>
                    
                    </table>
                  </form>
                  <br />
                    <table style="padding-left: 300px;" >
                    <tr>
                    <td colspan="2"><p>Forgot Password ? <a href="forgot_password.php" class="styled-button-1">Click Here</a></p></td></tr>
                    <tr><td colspan="2"><p>Not a Member Yet ?  To Join <a href="tally_registration.php" class="styled-button-1">Click Here</a></p></td>
                    </tr></table>
            </div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
                <li>
					<!--<h2>News Updates :</h2>-->
					<ul>
                        <li><img src="images/login_1.png" width="280px" height="280px"/></li>
                        <!--<li><img src="images/teamLogo/kkr.png"/><img src="images/teamLogo/mi.png"/></li>
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

<?php include ('footer.php'); ?>