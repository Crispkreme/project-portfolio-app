<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Work Experience</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">Work Experience</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">Work Experience Data</h4>
                        <p class="card-title-desc">
                            This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled as well!).
                        </p>
                        
                        <div class="col-12 mb-2 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location='{{ route("form.add.work.experience") }}'">
                                Work Experience <i class="ri-add-circle-line align-middle ms-2"></i> 
                            </button>
                        </div>    

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($experienceSlider as $key => $item)
                                    <tr data-id="{{ $item->id }}">
                                        <td data-field="project_name">{{ $item->project_name }}</td>
                                        <td data-field="company">{{ $item->company }}</td>
                                        <td data-field="company_address">{{ $item->company_address }}</td>
                                        <td data-field="role">{{ $item->role }}</td>
                                        <td data-field="start_date">{{ $item->start_date }}</td>
                                        <td data-field="end_date">{{ $item->end_date }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit" 
                                               href="{{ route('form.edit.work.experience', ['id' => $item->id]) }}">
                                                <i class="fas fa-pencil-alt" style="font-size: 1rem;"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-danger btn-sm" title="Delete" 
                                               onclick="event.preventDefault(); 
                                                if(confirm('Are you sure you want to delete this work experience?')) {
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
                                                }">
                                                <i class="fas ri-delete-bin-line" style="font-size: 1rem;"></i>
                                            </a>
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('delete.work.experience', ['id' => $item->id]) }}" method="POST" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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