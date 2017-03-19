@extends('layouts/master')
@section('title', 'Receive help')

@section('content')       
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Transaction History(Provide Help)</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">This is</a>
                </li>
                <li class="active">
                    <strong>Breadcrumb</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="#" class="btn btn-primary">This is action area</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox-content">
                    @include('partials/_alert')
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>RecordID</th>
                        <th>Amount Offered</th>
                        <th>Amount Paid</th>
                        <th>Total Confirmed</th>
                        <th>Outstanding</th>
                        <th>Date</th>
                        <th>Points</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($donations) > 0)
                        @foreach($donations as $donation)  
                        <tr class="gradeX">    
                            <td>{{ $donation->recordID }}</td>
                            <td>{{ number_format($donation->amount) }}</td>
                            <td>{{ $donation->amount }}</td>
                            <td>{{ $donation->recordID }}</td>
                            <td>{{ $donation->recordID }}</td>
                            <td>{{ $donation->created_at }}</td>
                            <td>{{ $donation->points }}</td>
                            <td><label class=""><a href="{{ url('show/transaction', $donation->id) }}"> 
                            {{ $donation->status }} Click here for details</a></label></td>
                        </tr>
                        @endforeach
                    @endif
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>RecordID</th>
                        <th>Amount Offered</th>
                        <th>Amount Paid</th>
                        <th>Total Confirmed</th>
                        <th>Outstanding</th>
                        <th>Date</th>
                        <th>Points</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>        
@stop
@section('resources')
<!-- Data Tables -->
<script src="{{ asset('js/inspinia/plugins/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/inspinia/plugins/dataTables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('js/inspinia/plugins/dataTables/dataTables.responsive.js') }}"></script>
<script src="{{ asset('js/inspinia/plugins/dataTables/dataTables.tableTools.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.dataTables-example').dataTable({
            responsive: true,
        });
    });
</script>
@stop