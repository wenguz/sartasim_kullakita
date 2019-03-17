@extends('layouts.app')

@section('content')
<div id="content">
<div class="container">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-8 col-sm-12">
                <div class="card-header">SARTASIM KULLAKITA Principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
