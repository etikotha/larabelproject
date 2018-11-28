@extends('layouts.design')

@section('title','Upload pdf Book')

@section('content')
	
	<div class="row"><br>
		<div class="col-md-7 col-offset-md-4 mr-auto ml-auto">
			@if (session()->has('Message'))
				<div class="alert alert-success">{{ session()->get('Message')}}</div>
			@endif
			<div class="card">
				<h5 class="card-header">Pdf Book upload</h5>
				<div class="card-body">
					<form action="{{route('pdfstore')}}" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group">
							<input type="file" name="file[]" multiple class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Upload</button>
						<a href="#" class="btn btn-success">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection