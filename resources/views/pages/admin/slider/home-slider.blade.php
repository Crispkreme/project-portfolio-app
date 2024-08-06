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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Home Slider Data</h4>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>

                        <form action="" class="mt-3">
                            <div class="row mb-3">
                                <label for="title-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" type="text" value="{{ ucwords(strtolower($homeslider->title)) }}" id="title-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description-text-input" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="description" type="text" value="{{ $homeslider->description }}" id="description-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="video_url-text-input" class="col-sm-2 col-form-label">video_url</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="video_url" type="text" value="{{ $homeslider->video_url }}" id="video_url-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Profile</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="profile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="card-img-top img-fluid" src="{{ $homeslider->home_slide }}" alt="Card image cap" style="width:100px;">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ri-pencil-line align-middle me-2"></i></i> Update Profile
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>