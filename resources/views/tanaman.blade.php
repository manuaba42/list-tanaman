<!DOCTYPE html>
<html>
<head>
	<title>Tanaman</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
</head>
<body>
	<div class="container">
		@foreach($newData as $data)
			@foreach($data as $key => $tanaman)
				<li>{{$tanaman->nama}}</li>
			@endforeach
			
		@endforeach

		<a href="{{ url()->previous() }}">
			<button type="button" class="btn btn-info btn-lg">Back</button>
		</a>
	</div>

</body>
</html>