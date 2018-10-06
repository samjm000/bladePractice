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

                    Add Excel Work Schedule Spreadsheet<br><br>
                    Sheet should contain just 2 columns<br><br>
                    The first column with the dates you are working<br>
                    The second column with the hours you are working<br><br>
                    The sheet can include days you are off, as long as the hours column next to the date are empty<br><br>
                    <form action="{{ route('import.export.view')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="fileToUpload"
                        id="fileToUpload" accept=".xls,.xlsx"><br><br>
                        <button type="submit" id="submit" name="import"
                        class="btn-submit">Upload and start matching swaps!</button>

                    </form>



                    <br><br>
                    <a href="{{ route('home') }}">Back to Dashboard</a><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection