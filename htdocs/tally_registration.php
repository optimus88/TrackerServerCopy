<?php include ('header.php'); ?>
                <h2>Warm welcome to the Team trakers..!!</h2><br />
                <form id="regForm" style="padding-left: 120px;" name="regForm" action="reg_action.php" method="post" onsubmit="return registration_validation();" >
                <table class="login-page">
                <th style="padding-left: 60px;"><h3>Please Register : </h3></th>
                <tr><td>User ID  </td>
                <td><input type="text" name="username" id="username" maxlength="15"/></td>
                </tr>
                <tr><td>Your Name</td>
                <td><input type="text" name="uname" id="uname" /></td>
                </tr>
                <tr><td>Email ID </td>
                <td><input type="text" name="email_id" id="email_id" /></td>
                </tr>
                <tr><td>Password</td>
                <td><input type="password" name="upass" id="upass" maxlength="15"/></td>
                </tr>
                
                
                <tr><td colspan="2" style="padding-left: 50px;"><input  class="styled-button-1" type="submit" value="Submit" name="chk_reg" />
                <input class="styled-button-1" type="reset" value="Reset" />
                <input class="styled-button-1" type="button" value="Cancel" onClick="document.location.href='index.php'"/></td></tr>
                
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
                    <p>Action Begins on 5th April, 2017. Stay Tuned</p>
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