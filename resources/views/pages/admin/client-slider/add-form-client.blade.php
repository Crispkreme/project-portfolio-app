<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Client</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">Client</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Client Slider Data</h4>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>

                        <form action="{{ route('store.client.slider') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                            
                            @csrf

                            <div class="row mb-3">
                                <label for="basicpill-name-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="client_name" type="text" class="form-control" id="basicpill-name-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-position-input" class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="position" type="text" id="basicpill-position-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-company-name-input" class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="company_name" type="text" id="basicpill-company-name-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-title-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" type="text" id="basicpill-title-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-description-input" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="basicpill-description-input" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-project-url-input" class="col-sm-2 col-form-label">Project URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="project_url" type="text" id="basicpill-project-url-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Profile</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="clientSliderImage" name="profile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="card-img-top img-fluid" src="{{ asset('no-image.jpg') }}" alt="Card image cap" style="width:100px;">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ri-pencil-line align-middle me-2"></i></i> Add Client Slider
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#clientSliderImage').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
    @endpush
</x-app-layout>