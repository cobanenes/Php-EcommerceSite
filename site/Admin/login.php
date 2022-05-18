<!DOCTYPE html>
<html lang="en">
<head>
	<title>GL Yönetim Paneli</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--=============sadasd==================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<div class="gradient-shadow">
	<div class="limiter">
		
			<div class="wrap-login100 p-b-160 p-t-50" style="margin-left: auto;margin-right: auto; margin-top: 15vh;">

				
						
	
				
				<!--<form action="islem/islem.php" method="post"class="login100-form validate-form">
				
					
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Kullanıcı adınızı girin!">
						<input class="input100" type="text" name="kadi">
						<span class="label-input100">Kullanıcı Adı</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Şifrenizi girin!">
						<input class="input100" type="password" name="sifre">
						<span class="label-input100">Şifre</span>
					</div>

					<div class="container-login100-form-btn">
						<button name="girisyap" class="login100-form-btn">
							Giriş yap
						</button>
					</div>
					
					
				</form>      ---->
<div class="text-center w-full p-t-23">
						<a >
							<?php
           if (@$_GET['durum']=="hata") { ?>
        
        <p style="color:red" class="login100-form validate-form">       Kullanıcı adı ya da şifre hatalı !
     <?php      }
       elseif (@$_GET['durum']=="gulegule") { ?>
        <p style="color:black" class="login100-form validate-form">      
     <?php      }
           else{
            
           }
         ?>

						</a>
					</div>
					<form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="kadi" type="text" class="form-control" placeholder="Kullanıcı adı">
          
        </div>
        <div class="input-group mb-3">
          <input name="sifre" type="password" class="form-control" placeholder="Şifre">
          
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="girisyap" type="submit" class="btn btn-success btn-block">Giriş yap</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>