@extends('layouts/layout_common')

@section('space-work')

    @php 
        $time = explode(':',$exam[0]['time']);
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h1 class="fw-bold text-primary">EduTestify | Online Examination System</h1>
            </div>
        </div>
    
            {{-- User & Exam Details --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive-sm">
                                    <tbody>
                                        <tr>
                                            <td><strong>Name: </strong> {{ Auth::user()->name }}</td>
                                            <td><strong>Email: </strong>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Exam Name: </strong>{{ $exam[0]['exam_name'] }}</td>
                                            <td><strong>Exam Date: </strong>{{ $exam[0]['date'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @php $qcount = 1; @endphp
                @if($success == true)
                <form action="{{ route('examSubmit') }}" method="POST" id="exam_form" style="width: 60%;">
                    @csrf
                        <input type="hidden" name="exam_id" value="{{ $exam[0]['id'] }}">
                            {{-- Exam Table  --}}
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="time">{{ $exam[0]['time'] }}</h4>
                                    </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Question</th>
                                                    <th scope="col">Options</th>
                                                    <th scope="col">Select Answer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($qna as $data)
                                                @php $acount = 1; @endphp <!-- Initialize $acount -->
                                                <tr>
                                                    <td>Q{{$qcount++}}</td>
                                                    <td>{{ $data['question'][0]['question'] }}</td>
                                                    <td>
                                                        @foreach($data['question'][0]['answers'] as $answer)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio_{{$qcount-1}}" data-id="{{$qcount-1}}" value="{{ $answer['id'] }}">
                                                            <label class="form-check-label">{{$acount++}}). {{ $answer['answer'] }}</label>
                                                        </div>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                </form>
                @else
                    <div class="text-center mt-4">
                        <h3 style="color:red;">{{ $msg }}</h3>
                    </div>
                @endif
            </div>
        </div>
       
       

{{-- <div class="container">
    <p style="color:black;">Welcome, {{ Auth::user()->name }}</p>
    <h1 class="text-center">{{ $exam[0]['exam_name'] }}</h1>
    @php $qcount = 1; @endphp
    @if($success == true)

        @if(count($qna) > 0)
            <h4 class="text-right time">{{ $exam[0]['time'] }}</h4>
            <form action="{{ route('examSubmit') }}" method="POST" id="exam_form" class="mb-5">
             @csrf
              <input type="hidden" name="exam_id" value="{{ $exam[0]['id'] }}">
                @foreach($qna as $data)
                    <div>
                        <h5>Q{{$qcount++}}. {{ $data['question'][0]['question'] }}</h5>
                        <input type="hidden" name="q[]" value="{{ $data['question'][0]['id'] }}">
                        <input type="hidden" name="ans_{{$qcount-1}}" id="ans_{{$qcount-1}}">
                        @php $acount = 1; @endphp
                        @foreach($data['question'][0]['answers'] as $answer)
                            <p><b>{{$acount++}}). </b>{{ $answer['answer'] }}
                                <input type="radio" name="radio_{{$qcount-1}}" data-id="{{$qcount-1}}" class="select_ans" value="{{ $answer['id'] }}">
                            </p>
                        @endforeach
                    </div>
                    <br>
                @endforeach
                <div class="text-center">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        @else
            <h3 style="color:red;" class="text-center">Questions & Answers not available!</h3>
        @endif

    @else
        <h3 style="color:red;" class="text-center">{{ $msg }}</h3>
    @endif
</div> --}}


<script>
    $(document).ready(function(){

        $('.select_ans').click(function(){
            var no = $(this).attr('data-id');
            $('#ans_'+no).val($(this).val());
        });

        var time = @json($time);
            $('.time').text(time[0]+':'+time[1]+':00 Left time');

            var seconds = 59;
            var hours = parseInt(time[0]);
            var minutes = parseInt(time[1]);

            var timer = setInterval(() => {

                if(hours == 0 && minutes == 0 && seconds == 0){
                    clearInterval(timer);
                    $('#exam_form').submit();
                }
                console.log(hours+" -:- "+minutes+" -:- "+seconds);
                
                if(seconds <= 0){
                    minutes--;
                    seconds = 59;
                }

                if(minutes <= 0 && hours != 0){
                    hours--;
                    minutes = 59;
                    seconds = 59;
                }

                let tempHours = hours.toString().length > 1? hours:'0'+hours;
                let tempMinutes = minutes.toString().length > 1? minutes:'0'+minutes;
                let tempSeconds = seconds.toString().length > 1? seconds:'0'+seconds;

                $('.time').text(tempHours+':'+tempMinutes+':'+tempSeconds+' Left time');

                seconds--;

            }, 1000);

    });

    function isValid(){
            var result = true;

            var qlength = parseInt("{{$qcount}}")-1;
            $('.error_msg').remove();
            for(let i = 1; i <= qlength; i++){
                if($('#ans_'+i).val() == ""){
                    result = false;
                    $('#ans_'+i).parent().append('<span style="color:red;" class="error_msg">Please select answer.</span>');
                    setTimeout(() => {
                        $('.error_msg').remove();
                    }, 5000);
                }
            }

            return result;
        }
</script>
@endsection