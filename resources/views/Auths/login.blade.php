@extends('Layouts.authmain')
@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center mt-5 mb-5" role="alert">
        {{ session('success') }}
    </div>
@endif
<section class="ftco-section">
    <div class="container mt-lg-5">
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
                                <h3 class="mb-4">Halaman Login!</h3>
                            </div>
                        </div>
                        <form action="/login" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="Email">Email</label>
                                <input type="email" id="Email" name="email" class="form-control" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                                    required>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-info text-white fw-bold rounded submit px-3">Login</button>
                            </div>
                            <div class="form-group d-md-flex">
                            </div>
                        </form>
                        <p class="text-center">Belum Punya Akun? <a href="/register">Daftar!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
