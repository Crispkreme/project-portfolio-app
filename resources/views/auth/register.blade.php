<x-login-layout>
    <div class="text-center mt-4">
        <div class="mb-3">
            <a href="index.html" class="auth-logo">
                <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
            </a>
        </div>
    </div>
    <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
    <div class="p-3">
        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
        @csrf
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" name="name" type="text" required="" placeholder="Name">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" name="email" type="email" required="" placeholder="Email">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" name="username" type="text" required="" placeholder="Username">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" name="password_confirmation" type="password" required="" placeholder="Confirm Password">
                </div>
            </div>

            <div class="form-group text-center row mt-3 pt-1">
                <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                </div>
            </div>

            <div class="form-group mt-2 mb-0 row">
                <div class="col-12 mt-3 text-center">
                    <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
                </div>
            </div>
        </form>
        <!-- end form -->
    </div>
</x-login-layout>
