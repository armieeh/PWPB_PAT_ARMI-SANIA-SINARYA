@extends('Layouts.authmain')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(images/poster.png);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Halaman Pendaftaran!</h3>
                            </div>
                        </div>
                        <form action="/register" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" class="@error('name') is-invalid @enderror" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" class="@error('username') is-invalid @enderror" required>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" class="@error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="no_telp">No Telp</label>
                                <input type="number" id="no_telp" name="no_hp" class="form-control" placeholder="No Telp" class="@error('no_hp') is-invalid @enderror" required>
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" class="@error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="confirmation">Ulangi Password</label>
                                <input type="password" id="confirmation" name="confirmation" class="form-control" placeholder="Konfirmasi Password" class="@error('confirmation') is-invalid @enderror" required>
                            @error('confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-info text-white fw-bold rounded submit px-3">Sign
                                    In</button>
                            </div>
                            <div class="form-group d-md-flex">
                            </div>
                        </form>
                        <p class="text-center">Sudah Punya Akun? <a href="/login">Login!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection