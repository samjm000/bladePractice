@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload My Rota</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('uploadRota') }}">Upload my rota ! </a><br><br>




                    <br><br>
                    <a href="{{ route('home') }}">Back to Swap Details</a><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection