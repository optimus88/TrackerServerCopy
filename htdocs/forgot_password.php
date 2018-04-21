<?php include ('header.php'); ?>
                        <form style="padding-left: 170px;" action="forgot_password_action.php" method="post" onsubmit="return chk_forgot_password();">
                        <table class="login-page">
                        <th colspan="2" style="padding-left: 0px; background-image: url(images/img02.jpg) repeat;"><span><h3>Forgot Passowrd :</h3></span></th>
                        <tr><td>UserName</td>
                        <td><input type="text" name="uname" id="uname" /></td>
                        </tr>
                        <tr><td>New Password</td>
                        <td><input type="password" name="upass" id="upass"/></td>
                        </tr>
                        <tr><td>Re-Enetr Password</td>
                        <td><input type="password" name="upass_1" id="upass_1"/></td>
                        </tr>
                        <tr><td style="padding-left: 90px;" colspan="2"><input class="styled-button-1" type="submit" value="Submit" name="chk_frgt_password" />
                        <input class="styled-button-1" type="reset" value="Reset" />
                        <input class="styled-button-1" type="button" value="Cancel" onClick="document.location.href='index.php'" /></td></tr>
                        </table>
                        </form>
                  <br />
            </div>
		</div>
		<!-- end #content -->
				<div id="sidebar">
			<ul>
                <li>
					<ul>
                        <li><img src="images/forgot_password.png" width="280px" height="280px"/></li>
                        <p><i>Forgot your password..??<br /> Don't worry we got you covered..!!</i></p>
               </li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>

<?php include ('footer.php'); ?>