@extends(Auth::user()->role === 'super_admin' ? 'superadmin.superadmin_master' : 'admin.admin_master')
@section(Auth::user()->role === 'super_admin' ? 'superadmin' : 'admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Manage Profiles</a></li>
                            <li class="breadcrumb-item"><a href="#">Teacher</a></li>

                            <li class="breadcrumb-item active">View</li>
                        </ol>
                    </div>

                    <h4 class="page-title">All Teacher Data</h4>
                </div>
            </div>
        </div>








        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Teacher Data </h4>



                        <div class="tab-content">
                            <div class="tab-pane show active" id="basic-datatable-preview">
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>

                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Action</th>




                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($alldata as $key => $students)
                                            <tr>
                                                <td> <img
                                                        src="{{ !empty($students->image) ? url('upload/user_images/' . $students->image) : url('upload/no_image.jpg') }}"
                                                        style="width: 100px; width: 100px; border: 1px solid #000000;">
                                                </td>
                                                <td>{{ $students->name }}</td>
                                                <td>{{ Carbon\Carbon::parse($students->dob)->format(' d-M-Y') }}
                                                </td>
                                                <td>{{ $students->class }}</td>
                                                <td>{{ $students->group }}</td>
                                                <td>{{ $students->session }}</td>
                                                <td>{{ $students->gender }}</td>



                                                <td>
                                                    @if ($students->status == 1)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">Deactive</span>
                                                    @endif

                                                </td>

                                                <td class="table-action">






                                                    <form action="{{ route('manage-student.destroy', $students->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('manage-student.edit', $students->id) }}"
                                                            class="action-icon"> <i title="Edit Data"
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                                @if(Auth::user()->role=='super_admin')


                                                        <a href="#editModal{{ $students->id }}" data-bs-toggle="modal"
                                                            class=" action-icon"> <i title="Edit Status"
                                                                class="mdi mdi-pencil"></i></a>


                                                                @endif
                                                        <a type="submit" class="action-icon show-alert-delete-box ">
                                                            <i title="Delete" class="mdi mdi-delete"></i></a>


                                                    </form>




                                                    <div class="modal fade" id="editModal{{ $students->id }}"
                                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"><i
                                                                            class="fa fa-edit"></i> Edit Status</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                {!! Form::open(['route' => ['manage-student.update', $students->id], 'method' => 'PUT']) !!}
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="input-group">
                                                                                <label class="col-3 col-form-label">Account
                                                                                    Status </label>

                                                                                <select name="status"
                                                                                    class="form-select">

                                                                                    <option value="" selected=""
                                                                                        disabled="">Select Status</option>


                                                                                    <option value="1"
                                                                                        {{ $students->status == '1' ? 'selected' : '' }}>
                                                                                        Active</option>
                                                                                    <option value="0"
                                                                                        {{ $students->status == '0' ? 'selected' : '' }}>
                                                                                        Deactive</option>


                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    {{ Form::submit('Update', ['class' => 'btn btn-success btn-sm', 'style' => 'width:15%']) }}
                                                                </div>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>



                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->























    </div>
@endsection
