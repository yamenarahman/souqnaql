@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div style="width: 100%; height: 500px;">
			{!! Mapper::render() !!}
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-3">
			<form action="" method="POST" role="form">
				<legend>Phone validation</legend>
			
				<div class="form-group">
					<label for="">Phone number</label>
					<input type="text" class="form-control" name="phone">
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div> -->
</div>
@endsection