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
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addExamModal">Add Exam</button>
                            <!-- Modal Add Exam -->
                            <div class="modal fade" id="addExamModal" tabindex="-1" aria-labelledby="addExamModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="" id="addExam">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addExamModalLabel">Add Exam</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" name="exam_name" class="form-control input-default" id="exam_name" placeholder="Enter Exam Name" required><br>
                                                <select class="default-select form-control wide mb-3" name="subject_id" required>
                                                    <option>Select Subject</option>
                                                    @if(count($subjects) > 0)
                                                        @foreach($subjects as $subject)
                                                            <option value="{{ $subject->id}}">{{ $subject->subject}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <input type="date" name="date" class="form-control input-default" required min="@php echo date('Y-m-d'); @endphp"><br>
                                                <input type="time" name="time" class="form-control input-default" required><br>
                                                <input type="number" min="1" name="attempt" placeholder="Enter Exam Attempt Time" class="form-control input-default" required><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Exam</button>
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
                        <h4 class="card-title">Exams</h4>
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
                    <!-- Modal Edit Exam -->
                    <div class="modal fade" id="editExamModal" tabindex="-1" aria-labelledby="editExamModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="" id="editExam">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editExamModalLabel">Edit Exam</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="exam_id" id="exam_id">
                                        <input type="text" name="examName" class="form-control input-default" id="examName" placeholder="Enter Exam Name" required><br>
                                        <select class="default-select form-control wide mb-3" name="subject_id" id="subject_id" required class=w-100>
                                            <option value="">Select Subject</option>
                                            @if(count($subjects) > 0)
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                                                @endforeach
                                            @endif
                                        </select><br>
                                        <input type="date" name="date" id="date" class="form-control input-default" required min="@php echo date('Y-m-d'); @endphp"><br>
                                        <input type="time" name="time" id="time" class="form-control input-default" required><br>
                                        <input type="number" min="1" name="attempt" id="attempt" placeholder="Enter Exam Attempt Time" class="form-control input-default" required><br>
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
                    <div class="modal fade" id="deleteExamModal" tabindex="-1" aria-labelledby="deleteExamModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="" id="deleteExam">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteExamModalLabel">Delete Exam</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="examToDeleteText"><span id="examToDelete"></span></p>
                                        <input type="hidden" name="id" id="deleteExamId">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Exam Questions -->
                    <div class="modal fade" id="addQnaModal" tabindex="-1" aria-labelledby="addQnaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="" id="addQna">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addQnaModalLabel">Assign Questions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="exam_id" id="addExamId">
                                        <input type="search" name="search" id="search" onkeyup="searchTable()" class="form-control input-default" placeholder="Search here">
                                        <br>
                                        <div style="max-height: 300px; overflow-y: auto;">
                                            <table class="table table-responsive-sm" id="questionsTable">
                                                <thead>
                                                    <th class="fw-bold">Select</th>
                                                    <th class="fw-bold">Question</th>
                                                </thead>
                                                <tbody class="addBody">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Q&A</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal See Assigned Questions -->
                    <div class="modal fade" id="seeQnaModal" tabindex="-1" aria-labelledby="seeQnaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="seeQnaModalLabel">See Questions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div style="max-height: 300px; overflow-y: auto;">
                                            <table class="table table-responsive-sm" id="questionsTable">
                                                <thead>
                                                    <th class="fw-bold">#</th>
                                                    <th class="fw-bold">Question</th>
                                                    <th class="fw-bold">Delete</th>
                                                </thead>
                                                <tbody class="seeBody">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
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
        $("#addExam").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    url:"{{ route('addExam')}}",
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

        // Attach the event listener to a common parent element (e.g., the table body)
        $('#example tbody').on('click', '.editButton', function () {
            var id = $(this).data('id'); // Use data() method to retrieve the data-id attribute
            $("#exam_id").val(id);

            var url = '{{ route("getExamDetail", ":id") }}'; // Note the ":id" placeholder
            url = url.replace(':id', id); // Replace the ":id" placeholder with the actual ID value

            $.ajax({
                url: url,
                type: "GET",
                success: function(data){
                    if (data.success == true) {
                        var exam = data.data;
                        $('#examName').val(exam[0].exam_name);
                        $('#subject_id').val(exam[0].subject_id);
                        $('#date').val(exam[0].date);
                        $('#time').val(exam[0].time);
                        $('#attempt').val(exam[0].attempt);
                    } else {
                        alert(data.msg);
                    }
                }
            });
        });

        $("#editExam").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    url:"{{ route('updateExam')}}",
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
        $('#deleteExamModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var exam = button.data('exam');
                // Update the text content of the <p> element with the selected subject
                $('#examToDeleteText').text('Are you sure to delete "' + exam + '" Exam?');
                
                // Store the subject ID in a hidden field for further processing
                $('#deleteExamId').val(button.data('id'));
            });

            // Clear the modal content when the delete modal is hidden
            $('#deleteExamModal').on('hidden.bs.modal', function () {
                $('#examToDeleteText').text('Are you sure to delete ?'); // Reset the <p> text
                $('#deleteExamId').val(''); // Clear the subject ID
            });
       
        
        $("#deleteExam").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();
            
            $.ajax({
                url:"{{ route('deleteExam')}}",
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


        // Qna Exam Question Section
        $(document).on('click', '.addQuestions', function () {
            var id = $(this).data('id');
            $('#addExamId').val(id);

            $.ajax({
                url: "{{ route('getQuestions') }}",
                type: "GET",
                data: { exam_id: id },
                success: function (data) {
                    if (data.success == true) {
                        var questions = data.data;
                        var html = '';
                        if (questions.length > 0) {
                            for (let i = 0; i < questions.length; i++) {
                                html += `
                                    <tr>
                                        <td><input type="checkbox" value="` + questions[i]['id'] + `" name="questions_ids[]"></td>
                                        <td>` + questions[i]['questions'] + `</td>
                                    </tr>
                                `;
                            }
                        } else {
                            html += `
                                <tr>
                                    <td colspan="2">Questions not Available!</td>
                                </tr>`;
                        }

                        $('.addBody').html(html);
                    } else {
                        alert(data.msg);
                    }
                }
            });
        });


        $("#addQna").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('addQuestions') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success == true){
                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                }
            });

        });
        
        //see questions
        $(document).on('click', '.seeQuestions', function () {
        // $('.seeQuestions').click(function(){
            var id = $(this).data('id');

            $.ajax({
                url:"{{ route('getExamQuestions') }}",
                type:"GET",
                data:{exam_id:id},
                success:function(data){
                    console.log(data);

                    var html = '';
                    var questions = data.data;
                    if(questions.length > 0){

                        for(let i = 0; i < questions.length; i++){
                            html +=`
                                <tr>
                                    <td>`+(i+1)+`</td>
                                    <td>`+questions[i]['question'][0]['question']+`</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger shadow btn-xs sharp deleteQuestion" data-id="`+questions[i]['id']+`"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            `;
                        }

                    }
                    else{
                        html +=`
                            <tr>
                                <td colspan="1">Questions not available!</td>
                            </tr>
                        `;
                    }
                    $('.seeBody').html(html);
                }
            });
        });

        //delete question
        $(document).on('click','.deleteQuestion',function(){
            var id = $(this).data('id');
            var obj = $(this);
            $.ajax({
                url:"{{ route('deleteExamQuestions') }}",
                type:"GET",
                data:{id:id},
                success:function(data){
                    if(data.success == true){
                        // obj.parent().parent().remove();
                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                }
            })

            });

    });
</script>
<script>
    function searchTable()
    {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById('search');
        filter = input.value.toUpperCase();
        table = document.getElementById('questionsTable');
        tr = table.getElementsByTagName("tr");
        for(i = 0; i < tr.length; i++){
            td = tr[i].getElementsByTagName("td")[1];
            if(td){
                txtValue = td.textContent || td.innerText;
                if(txtValue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                }
                else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection