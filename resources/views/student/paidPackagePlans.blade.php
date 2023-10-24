@extends('layouts/student-layout')

@section('space-work')

<div class="container-fluid">
    <!-- row -->
        <div class="row">
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
                                        <th>Package Name</th>
                                        <th>Exams</th>
                                        <th>Prices</th>
                                        <th>Expires On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($packages) > 0)
                                        @php $x=1; @endphp
                                        @foreach ($packages as $package)
                                            <tr>
                                                <td>{{ $x++ }}</td>
                                                <td>{{ $package->name }}</td>
                                                <td>
                                                    @foreach($package->exam_id as $exam)
                                                        {{ $exam->exam_name }}, 
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @php $prices = json_decode($package->price); @endphp
                                                    @foreach($prices as $key => $price)
                                                        {{$key}} {{ $price }},
                                                    @endforeach
                                                </td>
                                                <td>{{ $package->expiry }}</td>
                                            </tr>  
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text-muted">No Exams Found!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>

@endsection