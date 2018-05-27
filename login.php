<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Pakar Diagnosis Penyakit Sugar Glider</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="static/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="/static/Login_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/static/img/sugar-glider.png" alt="IMG">
				</div>
				<?php
        include("include/connection.php");

        if(isset($_POST['submit'])) {
          $user = mysqli_real_escape_string($mysqli, $_POST['username']);
          $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

          if($user == "" || $pass == "") {
            echo "Sila isi katanama dan katalaluan.";
            echo "<br/>";
            echo "<a href='login.php'>Kembali</a>";
          } else {
            $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
            or die("Could not execute the select query.");

            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)) {
              $validuser = $row['username'];
              $_SESSION['valid'] = $validuser;
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];
            } else {
              echo "Katanama dan katalaluan tidak sah.";
              echo "<br/>";
              echo "<a href='login.php'>Kembali</a>";
            }

            if(isset($_SESSION['valid'])) {
              header('Location: index.php');
            }
          }
        } else { ?>
				<form class="login100-form validate-form"  method="post" >
					<span class="login100-form-title">
						Sistem Pakar Diagnosis Penyakit Sugar Glider
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="username" placeholder="Emel">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Kata Laluan">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn">
							Log Masuk
						</button> -->
						<input class="login100-form-btn" type="submit" name="submit" value="Log Masuk">
					</div>

					<div class="text-center p-t-12">
						<!-- <span class="txt1">
							Terlupa
						</span>
						<a class="txt2" href="#">
							Katalaluan?
						</a> -->
					</div>

					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</form>
			<?php } ?>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="/static/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="/static/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/static/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/static/Login_v1/js/main.js"></script>

</body>
</html>
