<?php include('login-header.php');?>

<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
            
			<div class="col-md-4 col-md-offset-4 center-content">
				<div class="panel panel-default" style="text-align:center;">
				  <div class="panel-heading">Login</div>
				  <div class="panel-body">
				  	<?php include('msgbox.php');?>
				<form action="process_login.php" method="post" autocomplete="off">
      <div class="form-group has-feedback">
        <input name="Email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="Password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn form-button">Login</button>
 
          <p class="login-box-msg" style="padding-top:20px">New to GetInn? <a href="registration.php"> Sign Up Now</a></p>
      </div>
        </form>
      </div>
</div>
    
			</div>

		</div>
		<div class="clear"></div>	
		
	</div>
<?php include('footer.php');?>
</div>