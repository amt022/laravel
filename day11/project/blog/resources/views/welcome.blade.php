<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form</title>
</head>
<body>
<div class="registration">
	<div class="d-flex justify-content-center">
			<form  action="insert.php" method="post" >
				<div >
				<div class="d-flex justify-content-center">
					<h2>Form</h2>
					<br>
				</div>
			  <div class="form-group">
				<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
              </div>
              <div class="form-group">
				<input type="date" class="form-control" id="birth" placeholder="date of birth" name="dob" required>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="city" placeholder="city" name="city" required>
              </div>
              <div class="form-group">
				<input type="email" class="form-control" id="email" placeholder="Email Id" name="email" required>
              </div>
              <div class="form-group">
				<input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone" required>
			  </div>
			  <div class="d-flex justify-content-center bg-success">
				<button type="submit" name = "submit" class="btn btn-success ">Submit</button>
			  </div>
			</form>
		  </div>
</div>	
</div>
<style>
	

body {
  background: #76b852;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to top, #76b852, #8DC26F);
  background: -moz-linear-gradient(to top, #76b852, #8DC26F);
  background: -o-linear-gradient(to top, #76b852, #8DC26F);
  background: linear-gradient(to top, #76b852, #8DC26F);
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}

.form-group{
		height: 45px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
.form-group:focus{
		background: #e2e2e2;
	}
	.form-group, .btn{        
        border-radius: 1000px;
    }
	.registration{
		width: 390px;
		margin: 30px auto;
	}
	.registration form{
		color: #999;
		border-radius: 10px;
    	margin-bottom: 25px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 50px;
    }
	.registration h2 {
		color: rgb(19, 177, 72);
		font-weight: bold;
        margin-top: 0;
    }
	.registration .form-group{
		margin-bottom: 20px;
	}
	.registration .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #2ce062;
		border: none;
		min-width: 300px;
    }
	 .btn{
  display:block;
  width:100%;
	 }
	
</style>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</body>
</html>