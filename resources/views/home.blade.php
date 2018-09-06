@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Swapsies Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Your work Calender (If exists) <br><br>

                    Swap Matches (If exists)<br><br>

                    <a href="{{ route('addSwap') }}">Add A Swap</a><br><br>

                    Edit / Remove Swap<br><br>

                    Chat 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
