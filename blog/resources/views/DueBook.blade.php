@extends('layouts.app')

@section('title','Due Book')

@section('content')

<h3 class="text-center">Due Book</h3>
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

                     <table class="table">
      <caption>List of Due Books</caption>
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer name</th>
      <th scope="col">Book name</th>
      <th scope="col">Date </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
       <td>eti</td>
      <td>karate book</td>
      <td>10-5-2017</td>
    

    </tr>
    <tr>
      <th scope="row">2</th>
      
      <td>abc</td>
      <td>php</td>
      <td>8-12-2018</td>

    </tr>
    <tr>
      <th scope="row">3</th>
 
      <td>sumi</td>
      <td>the Bird</td>
      <td>1-10-2018</td>


    </tr>

    <tr>
      <th scope="row">4</th>
 
      <td>shamima</td>
      <td>judo</td>
      <td>1-10-2017</td>


    </tr>
  </tbody>
</table>




            </div>
        </div>
    </div>
</div>
@endsection