<!DOCTYPE html>
<html>
<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="/search5" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search Spare_Part By name Or By Store_Name "> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Sample Spare_Part details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>name</th>
						<th>Price</th>
						<th>Description</th>
						<th>storename</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->sparepart}}</td>
						<td>{{$user->price}}</td>
						<td>{{$user->description}}</td>
						<td>{{$user->storename}}</td>
 <td> <img width="30%" height="20%" src="{{url('uploads/'.$user->filename)}}" alt="{{$user->filename}}">  </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>

</body>
</html>
