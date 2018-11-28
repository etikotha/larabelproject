@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{url('/Book/Add') }}"></a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{URL::to('/addbook') }}">Add Book</a><br>
                    <a href="{{URL::to('/pdfview') }}">PDF Book View</a><br>
                    <a href="{{URL::to('/order') }}"> order</a><br>
                    <a href="{{URL::to('/ShowOrderlist') }}">Show Order list</a><br>
                    <a href="{{URL::to('/showStock') }}">show Stock</a><br>
                    <a href="{{URL::to('/DueBook') }}">Due Book</a><br>
                    <a href="{{URL::to('/customarinfo') }}">customer info</a><br>
                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

