 @extends('layouts.design')

@section('title','show Order Book')

@section('content') 
 <h3 class="text-center">show Order List</h3>

    <table class="table">
      <caption>List of users</caption>
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">customer name</th>
      <th scope="col">Book name</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>eti</td>
      <td>karate book</td>
      <td>mirpur</td>
      <td>1-10-2018</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>akhi</td>
      <td>jave</td>
      <td>dhaka</td>
      <td>5-10-2017</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>php</td>
      <td>dhanmondi</td>
      <td>5-10-2016</td>
    </tr>
  </tbody>
</table>

 @endsection


