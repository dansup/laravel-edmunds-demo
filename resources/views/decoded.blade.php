@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Vin: {{$vin}}</div>

                <div class="panel-body">
                    <p class="lead">Decoded VIN.</p>
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
<pre>
{{ $data }}
</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
