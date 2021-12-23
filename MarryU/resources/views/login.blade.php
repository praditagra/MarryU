<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img">
                        <img src="{{asset('Template/images/bg-1.png')}}">
                        </div>

                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>

                            <!-- form login -->
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Kata Sandi" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
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
                            <p class="text-center">Belum Punya Akun? <a data-toggle="tab" href="#">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

