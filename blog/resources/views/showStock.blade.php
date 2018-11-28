@extends('layouts.app')

@section('title','show Stock')

@section('content')

<h3 class="text-center">show Stock</h3>
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
      <caption>List of Books</caption>
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book name</th>
      <th scope="col">Author name</th>
      <th scope="col">Quantity </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      
      <td>karate book</td>
      <td>victor canon</td>
      <td>5</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      
      <td>java</td>
      <td>sedrft</td>
      <td>8</td>

    </tr>
    <tr>
      <th scope="row">3</th>
 
      <td>the Bird</td>
      <td>dfghj</td>
      <td>2</td>


    </tr>
  </tbody>
</table>




            </div>
        </div>
    </div>
</div>
@endsection