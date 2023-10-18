@extends('layouts/admin-layout')
@section('space-work')
<div class="container-fluid">
    <!-- row -->
        <div class="row">
            {{-- Modal Button & Box --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bootstrap-modal">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addPackageModal">Add Package</button>
                            <!-- Modal Add Exam -->
                            <div class="modal fade" id="addPackageModal" tabindex="-1" aria-labelledby="addPackageModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{ route('addPackage') }}" method="POST" id="addPackage">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addPackageModalLabel">Add Package</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" name="package_name" class="form-control input-default" placeholder="Enter Package Name" required><br>

                                                @if(count($exams) > 0)
                                                    @foreach($exams as $exam)
                                                        @php $id = $exam->id; @endphp
                                                        @if($exam->check_in_exists_package == false)
                                                            <input type="checkbox" name="exams[]" value="{{ $id }}" class="exams">&nbsp;&nbsp;{{ $exam->exam_name }}<br>
                                                        @endif
                                                    @endforeach
                                                @endif

                                                <input type="number" name="price_inr" min="0" required placeholder="Price(INR)" class="form-control input-default"><br>              
                                                <input type="number" name="price_usd" min="0" required placeholder="Price(USD)" class="form-control input-default">\
                                                <p class="error m-0" style="color:red;"></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Package</button>
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
                        <h4 class="card-title">Packages</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Exam Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Attempt</th>
                                        <th>Plan</th>
                                        <th>Prices</th>
                                        <th>Add Questions</th>
                                        <th>See Questions</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($exams) > 0)
                                    @foreach ($exams as $exam)
                                        <tr>
                                            <td>{{ $exam->id }}</td>
                                            <td>{{ $exam->exam_name }}</td>
                                            <td>{{ $exam->subjects[0]['subject'] }}</td>
                                            <td>{{ $exam->date }}</td>
                                            <td>{{ $exam->time }} Hrs</td>
                                            <td>{{ $exam->attempt }} Time(s)</td>
                                            <td>
                                                @if($exam->plan != 0)
                                                    <span style="color:red">PAID</span>
                                                @else
                                                    
                                                        <span style="color:green">FREE</span>
                                                    
                                                @endif
                                            </td>
                                            <td>
                                                @if($exam->prices != null)
                                                    @php $planPrices = json_decode($exam->prices); @endphp
                                                    @foreach($planPrices as $key => $price)
                                                        <span>{{ $key }} {{ $price }},</span>
                                                    @endforeach
                                                @else
                                                    <span>N / A</span>
                                                @endif</td>
                                            <td>
                                                <a href="#" class="addQuestions" data-id="{{ $exam->id }}" data-bs-toggle="modal" data-bs-target="#addQnaModal">Add Questions</a>
                                            </td>
                                            <td>
                                                <a href="#" class="seeQuestions" data-id="{{ $exam->id }}" data-bs-toggle="modal" data-bs-target="#seeQnaModal">See Questions</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary shadow btn-xs sharp me-1 editButton" data-bs-toggle="modal" data-bs-target="#editExamModal" data-id="{{ $exam->id }}" data-exam="{{ $exam->exam_name}}"><i class="fas fa-pencil-alt"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-danger shadow btn-xs sharp deleteButton" data-bs-toggle="modal" data-bs-target="#deleteExamModal" data-id="{{ $exam->id }}" data-exam="{{ $exam->exam_name}}"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>  
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text-muted">No Exams Found!</td>
                                    </tr>
                                    @endif
                                </tfoot>
                            </table>
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

        $('#addPackage').submit(function(event){

            var checked =  false;
            var lgt = $('.exams').length;

            for(let i = 0; i < lgt; i++){

                if($('.exams:eq('+i+')').prop('checked') == true){
                    checked = true;
                    break;
                }

            }

            if(checked == false){
                event.preventDefault();
                $('.error').text('Please select any one exam!');
            }

        });
    });
</script>
@endsection