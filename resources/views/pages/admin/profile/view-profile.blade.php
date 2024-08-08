<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">View Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">View Profile</li>
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
                        <h4 class="card-title">{{ ucwords(strtolower($profile->name)) }}</h4>
                        <p class="card-text">{{ $profile->email }}</p>
                        <p class="card-text">{{ $profile->username }}</p>
                        <p class="card-text">
                            <small class="text-muted">{{ $profile->created_at->format('F j, Y g A') }}</small>
                        </p>
                        <a href="{{ route('edit.profile') }}">
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="ri-edit-circle-fill align-middle me-2"></i> Edit Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Data</h4>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>

                        <form action="" class="mt-3">
                            <div class="row mb-3">
                                <label for="name-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" type="text" value="{{ ucwords(strtolower($profile->name)) }}" id="name-text-input" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="username-text-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="username" type="text" value="{{ $profile->username }}" id="username-text-input" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" type="email" value="{{ $profile->email }}" id="email-text-input" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone-text-input" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="phone" type="text" value="{{ $profile->phone }}" id="phone-text-input" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Profile</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="profile" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="card-img-top img-fluid" src="{{ $profile->profile }}" alt="Card image cap" style="width:100px;">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light" disabled>
                                <i class="ri-pencil-line align-middle me-2"></i></i> Update Profile
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>