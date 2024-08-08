<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Client</h4>

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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">Client Slider Data</h4>
                        <p class="card-title-desc">
                            This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled as well!).
                        </p>
                        <div class="col-12 mb-2 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location='{{ route("form.client.slider") }}'">
                                Add Client <i class="ri-user-add-line align-middle ms-2"></i> 
                            </button>
                        </div>                        
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Position</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Profile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientSlider as $key => $item)
                                    <tr data-id="{{ $item->id }}">
                                        <td data-field="name">{{ $item->name }}</td>
                                        <td data-field="company_name">{{ $item->company_name }}</td>
                                        <td data-field="position">{{ $item->position }}</td>
                                        <td data-field="title">{{ $item->title }}</td>
                                        <td data-field="description">{{ $item->description }}</td>
                                        <td data-field="profile">{{ $item->profile }}</td>
                                        <td>
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div> 
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
    @endpush
</x-app-layout>