@extends('layouts/student-layout')

@section('space-work')

<div class="container-fluid">
    <!-- row -->
    <div class="row">
       {{-- Data Table --}}
       <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Paid Exams</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Exam Name</th>
                                <th>Subject Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Your Attempts</th>
                                <th>Total Attempts</th>
                                <th>Copy Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($exams) > 0)
                            @php $count = 1; @endphp
                            @foreach ($exams as $exam)
                                <tr>
                                    <td style="display: none;">{{ $exam->id }}</td>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $exam->exam_name }}</td>
                                    <td>{{ $exam->subjects[0]['subject'] }}</td>
                                    <td>{{ $exam->date }}</td>
                                    <td>{{ $exam->time }} Mins</td>
                                    <td>{{ $exam->attempt_counter }}</td>
                                    <td>{{ $exam->attempt }} Time(s)</td>
                                    <td>
                                        <a href="#" class="fw-bold text-danger buyNow" data-name="{{ $exam->exam_name }}" data-id="{{ $exam->id }}" data-prices="{{ $exam->prices }}" data-bs-toggle="modal" data-bs-target="#buyModal">Buy Now</a>
                                        {{-- <a href="#" class="btn btn-primary shadow btn-xs sharp copy" data-code="{{ $exam->enterance_id }}"><i class="fa fa-copy"></i></a> --}}
                                    </td> 
                                </tr>  
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8" class="text-muted">No Exams Found!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="" id="buyForm">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="buyModalLabel">Buy Exams</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <select name="price" id="price" required class="form-control wide mb-3">
                                        </select>
                                        <input type="hidden" class="form-control input-default" id="exam_id" name="examid">
                                        <input type="hidden" class="form-control input-default" id="exam_name" name="examName">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-warning buyNowButton">Buy Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
    $(document).ready(function () {
        $('.buyNow').click(function(){
            var prices = JSON.parse($(this).attr('data-prices'));

            var html = `
                <option value="">Select Currency(Price)</option>
                <option value="`+prices.INR+`">INR `+prices.INR+`</option>
                <option value="`+prices.USD+`">USD `+prices.USD+`</option>
            `;

            var priceSelect = document.getElementById("price"); // Reference to the select element

            // Remove existing options
            while (priceSelect.firstChild) {
                priceSelect.removeChild(priceSelect.firstChild);
            }

            // Append new options
            priceSelect.innerHTML = html;
        });

        $('#buyForm').submit(function(event){
            event.preventDefault();

            $('.buyNowButton').text('Please Wait...');

            var formData = $(this).serialize();
            var price = $('#price').val();

                $.ajax({
                    url:"{{ route('paymentInr') }}",
                    type:"POST",
                    data:formData,
                    success:function(response){
                        if(response.success == true)
                        {
                            var options = {
                                "key": "{{ env('PAYMENT_KEY') }}", // Enter the Key ID generated from the Dashboard
                                "currency": "INR",
                                "name": "{{ auth()->user()->name }}",
                                "description": "EduTestify | Online Examination System",
                                "image": "https://dummyimage.com/800x800/886CC0/fff&text=EduTestify",
                                "order_id": response.order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                "handler": function (response){
                                    var paymentData = {
                                                // exam_id:exam_id,
                                                razorpay_payment_id:response.razorpay_payment_id,
                                                razorpay_order_id:response.razorpay_order_id,
                                                razorpay_signature:response.razorpay_signature
                                            }

                                    $.ajax({
                                                url:"{{ route('verifyPayment') }}",
                                                type:"GET",
                                                data:paymentData,
                                                success:function(response){
                                                    alert(response.msg);
                                                    location.reload();
                                                }
                                            });
                                },
                                "prefill": {
                                    "name": "{{ auth()->user()->name }}",
                                    "email": "{{ auth()->user()->email }}",
                                    "contact": "9000090000"
                                },
                                "notes": {
                                    "address": "{{ auth()->user()->email }}"
                                },
                                "theme": {
                                    "color": "#886CC0"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.on('payment.failed', function (response){
                                    alert(response.error.code);
                                    alert(response.error.description);
                                    alert(response.error.source);
                                    alert(response.error.step);
                                    alert(response.error.reason);
                                    alert(response.error.metadata.order_id);
                                    alert(response.error.metadata.payment_id);
                            });
                            rzp1.open();
                        } 
                        else
                        {
                            alert(response.msg);
                        }
                    }
                });
        });
    
        $(document).on('click', '.copy', function () {
            var $this = $(this);

            // Replace the icon with a checkmark
            $this.find('i').removeClass('fa-copy').addClass('fa-check');

            // Change the button color to btn-success
            $this.removeClass('btn-primary').addClass('btn-success');

            var code = $this.attr('data-code');
            var url = "{{URL::to('/')}}/exam/" + code;

            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(url).select();
            document.execCommand("copy");
            $temp.remove();

            // Set a timeout to revert the icon, class, and color after 1 second
            setTimeout(function () {
                $this.find('i').removeClass('fa-check').addClass('fa-copy');
                $this.removeClass('btn-success').addClass('btn-primary');
            }, 1000);
        });
    });


</script>
@endsection