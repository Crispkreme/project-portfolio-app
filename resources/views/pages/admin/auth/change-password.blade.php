<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Change Password</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ (!empty($profile->profile)) ? url($profile->profile) : url('public/no-image.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="mb-2">Name: <span class="card-title">{{ ucwords(strtolower($profile->name)) }}</span></h4>
                        <p class="card-text mb-2">Email: {{ $profile->email }}</p>
                        <p class="card-text mb-3">Username: {{ $profile->username }}</p>
                        <p class="card-text mb-3">
                            <small class="text-muted">Created at: {{ $profile->created_at->format('F j, Y g A') }}</small>
                        </p>
                        <a href="{{ route('view.profile') }}">
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="ri-edit-circle-fill align-middle me-2"></i> View Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Credentials</h4>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>

                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show">
                                    {{ $error }}
                                </p>
                            @endforeach
                        @endif

                        <form action="{{ route('update.change.password') }}" method="POST" class="mt-3" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="email-text-input" class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="current_password" type="password" placeholder="***********" id="email-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="new_password" type="password" placeholder="***********" id="email-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="new_password_confirmation" type="password" placeholder="***********" id="email-text-input">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ri-pencil-line align-middle me-2"></i> Change Password
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

</x-app-layout>