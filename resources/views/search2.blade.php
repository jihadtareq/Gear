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
		<form action="/search2" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search Mechanic"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Sample Mechanic details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>name_shop</th>
						<th>mobile</th>
						<th>area</th>
						<th>address</th>
						<th>worktime</th>
						<th>Wash</th>
						<th>description</th>
						<th>kindofcartofix</th>

					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->name_shop}}</td>
						<td>{{$user->mobile}}</td>
						<td>{{$user->area}}</td>
						<td>{{$user->address}}</td>
						<td>{{$user->worktime}}</td>
						<td>{{$user->Wash}}</td>
						<td>{{$user->description}}</td>
						<td>{{$user->kindofcartofix}}</td>
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
