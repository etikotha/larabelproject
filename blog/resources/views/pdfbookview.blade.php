@extends('layouts.design')

@section('title','Add Book')

@section('content')
	<h3 class="text-center">PDF Book View</h3>
	<div class="row">
		@foreach ($pdfs as $pdf)
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="{{Storage::url($pdf->path)}}" alt="" width="350" height="310">
					<div class="card-body">
						<strong class="card-title">{{$pdf->title}}</strong>
						<div class="row float-center">
							<a href="{{-- {{route('show',['id'=>$pdf->id])}} --}}" class="btn btn-primary">Show</a>
						</div>
					</div>
					
				</div>
			</div>
		@endforeach
		
	</div>
@endsection