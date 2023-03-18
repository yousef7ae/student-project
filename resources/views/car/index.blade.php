<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">	
</head>
<body>
   
   <div class="container">
   	<div class="row">
   		<div class="col-12">
   			<table class="table table-bordered">
   				<thead>
   					<tr>
   						<th>@lang('dashbord.car.Image')</th>
   						<th>@lang('dashbord.car.Model')</th>
   						<th>Mechanic</th>  					
   					</tr>
   				</thead>

   				<tbody>
   					@foreach($cars as $car)
                      <tr>
                      	<td><img src="{{ url($car->image)}}"></td>
                      	<td>{{$car->model}}</td>
                      	<td>{{$car->mechanic->name}}</td>
                      </tr>
   					@endforeach
   				</tbody>
   				
   			</table>
   		</div>
   	</div>
   </div>
	

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>