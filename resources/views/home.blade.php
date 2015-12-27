@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<a href="{{url('codes')}}"><button class="btn btn-primary">View User Codes</button></a>
					<a href="{{url('ide')}}"><button class="btn btn-primary">Go to PhP IDE</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
