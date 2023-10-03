@extends('layouts/admin-layout')

@section('space-work')
{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 flex-wrap">
                                    <h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
                                    <div class="d-flex align-items-center project-tab mb-2">	
                                        <div class="card-tabs mt-3 mt-sm-0 mb-3 ">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown ms-2">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex">
                                            <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                <span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
                                            </div>
                                            <div class="ms-3">
                                                <h4 class="fs-24 font-w700 ">246</h4>
                                                <span class="fs-16 font-w400 d-block">Total Projects</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">	
                                            <div class="d-flex me-5">
                                                <div class="mt-2">
                                                    <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
                                                    </svg>
                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="fs-24 font-w700 ">246</h4>
                                                    <span class="fs-16 font-w400 d-block">On Going</span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                                                    </svg>

                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="fs-24 font-w700 ">28</h4>
                                                    <span class="fs-16 font-w400 d-block">Unfinished</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div id="chartBar" class="chartBar"></div>
                                        </div>	
                                        <div class="tab-pane fade" id="Weekly">
                                            <div id="chartBar1" class="chartBar"></div>
                                        </div>
                                        <div class="tab-pane fade" id="Today">
                                            <div id="chartBar2" class="chartBar"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
                                        <div class="form-check form-switch toggle-switch">
                                            <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">
                                         
                                        </div>
                                        <label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>	
                                        <div class="form-check form-switch toggle-switch">
                                          <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
                                    <div class="dropdown ">
                                        <div class="btn-link" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div id="revenueMap" class="revenueMap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                            <div>
                                                <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Clients</h4>
                                                <div class="d-flex align-items-center">
                                                    <h2 class="fs-32 font-w700 mb-0">68</h2>
                                                    <span class="d-block ms-4">
                                                        <svg width="21" height="11" viewbox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
                                                        </svg>
                                                        <small class="d-block fs-16 font-w400 text-success">+0,5%</small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="columnChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body px-4 pb-0">
                                            <h4 class="fs-18 font-w600 mb-5 text-nowrap">Total Clients</h4>
                                            <div class="progress default-progress">
                                                <div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
                                                    <span class="sr-only">45% Complete</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                <span>76 left from target</span>
                                                <h4 class="mb-0">42</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body d-flex px-4  justify-content-between">
                                            <div>
                                                <div class="">
                                                    <h2 class="fs-32 font-w700">562</h2>
                                                    <span class="fs-18 font-w500 d-block">Total Clients</span>
                                                    <span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span>
                                                </div>
                                            </div>
                                            <div id="NewCustomers"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body d-flex px-4  justify-content-between">
                                            <div>
                                                <div class="">
                                                    <h2 class="fs-32 font-w700">892</h2>
                                                    <span class="fs-18 font-w500 d-block">New Projects</span>
                                                    <span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span>
                                                </div>
                                            </div>
                                            <div id="NewCustomers1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class=" owl-carousel card-slider">
                                                        <div class="items">
                                                            <h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
                                                            <span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
                                                        </div>	
                                                        <div class="items">
                                                            <h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
                                                            <span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
                                                        </div>	
                                                        <div class="items">
                                                            <h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
                                                            <span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
                                                        </div>	
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 redial col-sm-6">
                                                    <div id="redial"></div>
                                                    <span class="text-center d-block fs-18 font-w600">On Progress <small class="text-success">70%</small></span>	
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-12 col-sm-6">
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <div>
                                                        <h4 class="fs-20 font-w700">Email Categories</h4>
                                                        <span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit amet</span>
                                                    </div>	
                                                </div>	
                                                <div class="card-body">
                                                    <div id="emailchart"> </div>
                                                    <div class="mb-3 mt-4">
                                                        <h4 class="fs-18 font-w600">Legend</h4>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                                            <span class="fs-18 font-w500">	
                                                                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="20" height="20" rx="6" fill="#886CC0"></rect>
                                                                </svg>
                                                                Primary (27%)
                                                            </span>
                                                            <span class="fs-18 font-w600">763</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                                            <span class="fs-18 font-w500">	
                                                                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="20" height="20" rx="6" fill="#26E023"></rect>
                                                                </svg>
                                                                Promotion (11%)
                                                            </span>
                                                            <span class="fs-18 font-w600">321</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                                            <span class="fs-18 font-w500">	
                                                                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="20" height="20" rx="6" fill="#61CFF1"></rect>
                                                                </svg>
                                                                Forum (22%)
                                                            </span>
                                                            <span class="fs-18 font-w600">69</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                                            <span class="fs-18 font-w500">	
                                                                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="20" height="20" rx="6" fill="#FFDA7C"></rect>
                                                                </svg>
                                                                Socials (15%) 
                                                            </span>
                                                            <span class="fs-18 font-w600">154</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                                            <span class="fs-18 font-w500">	
                                                                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="20" height="20" rx="6" fill="#FF86B1"></rect>
                                                                </svg>
                                                                Spam (25%) 
                                                            </span>
                                                            <span class="fs-18 font-w600">696</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="card-footer border-0 pt-0">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-rounded">Update Progress</a>		
                                                    
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>						
            </div>
        </div>
    </div>
</div> --}}
    <div class="container-fluid">
         <!-- row -->
         <div class="row">
            {{-- Modal Button & Box --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bootstrap-modal">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addSubjectModal">Add Subjects</button>
                            <!-- Modal Add Subject -->
                            <div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="" id="addSubject">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addSubjectModalLabel">Add Subject</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject" class="form-control input-default" id="subject" placeholder="Enter Subject Name" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Subject</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Data Table --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Subjects</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Subject</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($subjects) > 0)
                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ $subject->id }}</td>
                                            <td>{{ $subject->subject }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary shadow btn-xs sharp me-1 editButton" data-bs-toggle="modal" data-bs-target="#editSubjectModal" data-id="{{ $subject->id }}" data-subject="{{ $subject->subject}}"><i class="fas fa-pencil-alt"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-danger shadow btn-xs sharp deleteButton" data-bs-toggle="modal" data-bs-target="#deleteSubjectModal" data-id="{{ $subject->id }}" data-subject="{{ $subject->subject}}"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>  
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text-muted">No Subjects Found!</td>
                                    </tr>
                                    @endif
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Modal Edit Subject -->
                    <div class="modal fade" id="editSubjectModal" tabindex="-1" aria-labelledby="editSubjectModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="" id="editSubject">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSubjectModalLabel">Edit Subject</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject" class="form-control input-default" id="edit_subject" placeholder="Enter Subject Name" required>
                                        <input type="hidden" name="id" id="edit_subject_id">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete Subject -->
                    <div class="modal fade" id="deleteSubjectModal" tabindex="-1" aria-labelledby="deleteSubjectModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="" id="deleteSubject">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSubjectModalLabel">Delete Subject</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="subjectToDeleteText">Are you sure to delete <span id="subjectToDelete"></span>?</p>
                                        <input type="hidden" name="id" id="delete_subject_id">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#addSubject").submit(function(e){
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url:"{{ route('addSubject')}}",
                    type:"POST",
                    data: formData,
                    success: function(data){
                        if(data.success == true)
                        {
                            location.reload();
                        }
                        else
                        {
                            alert(data.msg);
                        }
                    }
                });
            });
            
            //Edit
            $('#editSubjectModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var sid = button.data('id');
                var sub = button.data('subject');
                
                // Update the modal content with the new values
                $('#edit_subject').val(sub);
                $('#edit_subject_id').val(sid);
            });

            // Clear the modal content when the modal is hidden
            $('#editSubjectModal').on('hidden.bs.modal', function () {
                $('#edit_subject').val('');
                $('#edit_subject_id').val('');
            });

            $("#editSubject").submit(function(e){
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url:"{{ route('editSubject')}}",
                    type:"POST",
                    data: formData,
                    success: function(data){
                        if(data.success == true)
                        {
                            location.reload();
                        }
                        else
                        {
                            alert(data.msg);
                        }
                    }
                });
            });

            //Delete
            $('#deleteSubjectModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var sub = button.data('subject');
                
                // Update the text content of the <p> element with the selected subject
                $('#subjectToDeleteText').text('Are you sure to delete "' + sub + '" ?');
                
                // Store the subject ID in a hidden field for further processing
                $('#delete_subject_id').val(button.data('id'));
            });

            // Clear the modal content when the delete modal is hidden
            $('#deleteSubjectModal').on('hidden.bs.modal', function () {
                $('#subjectToDeleteText').text('Are you sure to delete ?'); // Reset the <p> text
                $('#delete_subject_id').val(''); // Clear the subject ID
            });

            // Handle the delete action
            $("#deleteSubjectButton").click(function(){
                var sid = $('#delete_subject_id').val();

                // Add your delete logic here, for example, send an AJAX request to delete the subject with ID 'sid'
                // Then, close the modal if the delete is successful

                // Close the modal
                $('#deleteSubjectModal').modal('hide');
            });
            
            $("#deleteSubject").submit(function(e){
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url:"{{ route('deleteSubject')}}",
                    type:"POST",
                    data: formData,
                    success: function(data){
                        if(data.success == true)
                        {
                            location.reload();
                        }
                        else
                        {
                            alert(data.msg);
                        }
                    }
                });
            });
        });
    </script>
    
@endsection