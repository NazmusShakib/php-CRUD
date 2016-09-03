<?php include("header.php"); ?>

<div id="mainpage" class="normalpage">
<div id="left" class="widepage">
<div class="post">


		<form action="session.php" method="POST" style="text-align: center; " >
		<h1>Login</h1><br>
			<table>
				<tr>
				<td>Email: </td>        
				<td> <input Type="email" name="login_email" placeholder="Email Here" required/></td>        
				</tr>
				<tr>
				<td>Password:</td>              
				<td><input Type="password" name="login_pass"  placeholder="Password Here" required/></td>        
				</tr>
				
				<tr>
				<td>&nbsp;</td>
				<td><input Type="submit"value="Submit"/>&nbsp;&nbsp;<input Type="Reset"/></td>        
				</tr>
			</table>
		</form>


</div>
<div class="clear"></div>
</div>

<?php include("footer.php");?>