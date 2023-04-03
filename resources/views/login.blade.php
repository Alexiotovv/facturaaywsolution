<!doctype html>
<html lang="es">


<!-- Mirrored from codervent.com/mons/syndron/demo/vertical/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2023 12:49:16 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../../../assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../../../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../../../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../../../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../../../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../../../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="../../../assets/css/app.css" rel="stylesheet">
	<link href="../../../assets/css/icons.css" rel="stylesheet">
	<title>AyWSolution</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
                            {{-- Aqui irá el logo de AYW Solution SAC --}}
							<img src="../../../assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h5 class="">Iniciar Sesión</h5>
										
									</div>
									
									<div class="login-separater text-center mb-4"> <span>Login</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Usuario</label>
												<input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Contraseña</label>
												<div class="input-group" >
													<input type="" id="contrasena" name="contrasena" class="form-control border-end-0" id="inputChoosePassword" placeholder="Contraseña"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Recordar</label>
												</div>
											</div>
											{{-- <div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a> --}}
											</div>
											<div class="col-12">
												<div class="d-grid">
													<a type="button" class="btn btn-primary" id="btnAcceder"><i class="bx bxs-lock-open"></i>Acceder</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="../../../assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../../../assets/js/jquery.min.js"></script>
	<script src="../../../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../../../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../../../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script>
        $("#btnAcceder").click(function(e){
            e.preventDefault();
            use=$("#usuario").val();
            pass=$("#contrasena").val();
            ds="{'username': 'alexiotovv', 'password': 'alexitolindo8945#A'}";
			console.log(ds);
			// creden=JSON.parse(ds);
            

			$.ajax({
				method: "POST",
				headers: "Content-Type: application/json",
				dataType: "json",
				url: "https://facturacion.apisperu.com/api/v1/auth/login",
				data: {"username": "alexiotovv", "password":"alexitolindo8945#A"},
				success: function (response) {
					console.log(response);
				}
			});

            // $.ajax({
            //     method: "POST",
            //     url: "https://facturacion.apisperu.com/api/v1/auth/login",
            //     data: ds,
            //     dataType: "json",

			// 	success: function (response) {
            //         console.log(response);
            //     },
				
            // });


			// var http = new XMLHttpRequest();
			// var url = "https://facturacion.apisperu.com/api/v1/auth/login";
			// var email = document.getElementById('usuario');
			// var password = document.getElementById('contrasena');
			// http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
			// http.open("POST", url, true);

			// http.onreadystatechange = function() {
			// 	if(http.readyState == 4 && http.status == 200) { 
			// 	//aqui obtienes la respuesta de tu peticion
			// 	alert(http.responseText);
			// 	}
			// }
			// http.send(JSON.stringify({username:email, password: password}));


        });
    </script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/mons/syndron/demo/vertical/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2023 12:49:16 GMT -->
</html>