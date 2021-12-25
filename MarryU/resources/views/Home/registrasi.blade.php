<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('Template/css/style2.css')}}">
	</head>

<body>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image:url({{asset('Template/images/bg-1.jpg')}});">
                    </div>

                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>

                            <!-- form login -->
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Username" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="name">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="name">No HP</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No HP" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="name">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="name">Kata Sandi</label>
                                    <input type="password" class="form-control" name="kata_sandi" id="kata_sandi" placeholder="Kata Sandi" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="name">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" name="kata_sandiConfirm" id="kata_sandiConfirm" placeholder="Konfirmasi Kata Sandi" required>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
                                    </div>

                                    <!-- lupa ps
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div> -->
                                </div>
                            </form>

                            <!-- ke halaman registrasi -->
                            <p class="text-center">Sudah Punya Akun? <a data-toggle="tab" href="/login">Sign In</a></p>

                            <br>
                                <p class="text-center"><a href="/">Kembali ke Landing Page</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="{{asset('Template/js/jquery.min.js')}}"></script>
<script src="{{asset('Template/js/popper.js')}}"></script>
<script src="{{asset('Template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Template/js/main.js')}}"></script>
</body>

</html>

