@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Laravel Vin Decoder</div>

                <div class="panel-body">
                    <p class="lead">Decode a valid 17 character VIN.</p>
                    <div class="col-xs-12 col-md-6 col-md-offset-3 well">
                    <form class="form-horizontal" action="/decode" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>VIN</label>
                            <input type="text" class="form-control" name="vin" value="1HGCM82633A004352">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Decode</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
