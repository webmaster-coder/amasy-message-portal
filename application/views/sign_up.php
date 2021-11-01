<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Login</title>
	<style>
		body{
			background:lightgray;
		}
		.form_submit{
			margin:auto;
			margin-top:70px;
			width:600px;
			background:#e6e6e6;
			border-radius:20px;
			padding:40px;
			box-shadow: -webkit-box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.66);box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.66);
			font-family: 'Cabin', sans-serif;
		}
		.form_submit label{
			font-weight:bold;
		}
		.form_submit table{
			margin:auto
		}
		.form_submit input{
			width:400px; 
			font-weight:bold;
			border-radius:20px;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="form_submit">
					<h3 class="text-center" > Enter Your Bassic Details </h3>
					<table class="">
						<form action="<?php echo base_url('Admin/Sign_Up') ;?>" method="post">
							<tr>
								<td>
									<div class="form-group">
										<label for="email">Email </label>
										<input type="text" required class="form-control" name="ussername" id="">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="email"> Mobile Number </label>
										<input type="text" required class="form-control" name="mobile" id="">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="password"> Password </label>
										<input type="password" required class="form-control" name="password" id="">
									</div>
								</td>
							</tr>
							
							<tr>
								<td>
									<div class="form-group">
										<input type="submit" class="btn btn-success "  value="Submit">
									</div>
									
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>