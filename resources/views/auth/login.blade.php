<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="shortcut icon" href="{{ asset('admin_assets/images/logo/favicon.ico') }}">
    <link href="{{ asset('admin_assets/css/app.min.css') }}" rel="stylesheet">
</head>

<body>
<div class="auth-full-height container d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card row mx-0 flex-row overflow-hidden">
                    <div class="col-md-4 bg-size-cover d-flex align-items-center p-4" style="background-image: url('{{ asset('admin_assets/images/others/bg-2.jpg') }}');">
                        <div>
                            <div class="mb-5">
                                <div class="logo">
                                    <img alt="logo" class="img-fluid" src="{{ asset('admin_assets/images/logo/logo-white.png') }}" style="height: 50px;">
                                </div>
                            </div>
                            <h3 class="text-white">Make your work easier</h3>
                            <p class="text-white mt-4 mb-5 o-75">Climb leg rub face on everything give attitude under the bed.</p>
                        </div>
                    </div>
                    <div class="col-md-8 px-0">
                        <div class="card-body">
                            <div class="my-5 mx-auto" style="max-width: 350px;">
                                <div class="mb-3">
                                    <h3>Admin Login</h3>
                                </div>
                                @if(Session::has('message'))
                                    <div class="alert alert-danger">{{ Session::get('message') }}</div>
                                @endif
                                <form action="{{ route('admin.auth') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control @error('email')is-invalid @enderror" type="email" name="email" id="email" />
                                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label d-flex justify-content-between">
                                            <span>Password</span>
                                            <a href="#" class="text-primary font">Forget Password?</a>
                                        </label>
                                        <div class="form-group input-affix flex-column">
                                            <label class="d-none" for="password">Password</label>
                                            <input class="form-control @error('password')is-invalid @enderror" type="password" name="password" id="password">
                                            <i class="suffix-icon feather cursor-pointer text-dark icon-eye" id="icon" onclick="togglePass();"></i>
                                            @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Log In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <script src="{{ asset('admin_assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/app.min.js') }}"></script>
    <script>
        function togglePass(event)
        {
            let password = document.getElementById('password');
            let icon = document.getElementById('icon');
            if(password.type === 'password')
            {
                password.type = 'text';
                icon.classList.remove('icon-eye');
                icon.classList.add('icon-eye-off');
            }else{
                password.type = 'password';
                icon.classList.remove('icon-eye-off');
                icon.classList.add('icon-eye');
            }
        }
    </script>
</body>
</html>