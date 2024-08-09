<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Work Experience</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active"> Add Work Experience</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Work Experience Data</h4>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>

                        <form action="{{ route('store.work.experience') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                            
                            @csrf

                            <div class="row mb-3">
                                <label for="basicpill-project-input" class="col-sm-2 col-form-label">Project</label>
                                <div class="col-sm-10">
                                    <input name="project_name" type="text" class="form-control" id="basicpill-project-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-role-input" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="role" type="text" id="basicpill-role-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-company-input" class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="company" type="text" id="basicpill-company-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-company-address-input" class="col-sm-2 col-form-label">Company Address</label>
                                <div class="col-sm-10">
                                    <textarea name="company_address" id="basicpill-company-address-input" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-start-date-input" class="col-sm-2 col-form-label">Start</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="start_date" id="basicpill-start-date-input">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck2" name="isPresent">
                                        <label class="form-check-label" for="formCheck2">
                                            Present
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="basicpill-end-start-input" class="col-sm-2 col-form-label">End</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="end_date" id="basicpill-end-start-input">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ri-add-fill align-middle me-2"></i></i> Work Experience
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
        <script>
            document.getElementById('formCheck2').addEventListener('change', function() {
                const endDateInput = document.getElementById('basicpill-end-start-input');
                endDateInput.disabled = this.checked;
            });
            document.getElementById('formCheck2').dispatchEvent(new Event('change'));
        </script>
    @endpush
</x-app-layout>