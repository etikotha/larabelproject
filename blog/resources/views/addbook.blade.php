@extends('layouts.design')

@section('title','Add Book')

@section('content')

	<h3 class="text-center">Add Book</h3>
	<div class="col-md-7 ml-auto mr-auto">

		@if (session()->has('Message'))
			<div class="alert alert-success">{{ session()->get('Message')}}</div>
		@endif
		<form action="{{url('/savebook')}}" method="POST">
			{{ csrf_field()}}
			<div class="form-group">
				<label for="book_name">Book Name :</label>
				<input type="text" class="form-control" name="book_name" id="book_name" placeholder="Book Name" required>
			</div>
			<div class="form-group">
				<label for="author_name">Author Name :</label>
				<input type="text" class="form-control" name="author_name" id="author_name" placeholder="Auth Name" required>
			</div>

			{{--<div class="form-group">
				<label for="number_of_page">number of page :</label>
				<input type="text" class="form-control" name="number_of_page" id="number_of_page" placeholder="number_of_page" required>
			</div> --}}
			<div class="form-group">
				<label for="book_details">Book Details :</label>
				<textarea class="form-control" name="book_details" id="book_details"  rows="3" placeholder="Book Details" required></textarea>
			</div>
			<button type="submit" class="btn btn-success text-center">Add Book</button>
		</form>
	</div>
	
@endsection