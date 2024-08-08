<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">About</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">About Slider Data</h4>
                        <p class="card-title-desc">
                            This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled as well!).
                        </p>
                        
                        <form action="{{ route('update.about.slider') }}" class="mt-3" method="POST">
                            
                            @csrf

                            <input type="hidden" name="aboutId" value="{{ $aboutslider->id }}">
                            <input type="hidden" name="userId" value="{{ $user->id }}">

                            <div class="row mb-3">
                                <label for="name-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{ ucwords(strtolower($user->name)) }}" id="name-text-input" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description-text-input" class="col-sm-2 col-form-label">Bio</label>
                                <div class="col-sm-10">
                                    <textarea name="bio" class="form-control" rows="2" id="description-text-input">{{ $aboutslider->bio }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description-text-input" class="col-sm-2 col-form-label">Experience</label>
                                <div class="col-sm-10">
                                    <textarea name="experience" class="form-control" rows="5" id="description-text-input">{{ $aboutslider->experience }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description-text-input" class="col-sm-2 col-form-label">Summary</label>
                                <div class="col-sm-10">
                                    <textarea name="experience_summary" class="form-control" rows="5"id="description-text-input">{{ $aboutslider->experience_summary }}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ri-pencil-line align-middle me-2"></i></i> Update Bio
                            </button>

                        </form>
                    </div> 
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
    @endpush
</x-app-layout>