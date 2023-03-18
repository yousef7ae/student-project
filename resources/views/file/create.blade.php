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
    <!--  <h1>
     	@if(session()->has('user_id'))
     	 {{session('user_id')}}
     	@endif
     </h1> -->

	
		<div class="row">
			<div class="col-12">
				@foreach($errors->all() as $error )
				    <div class="alert alert-danger">{{$error}}</div>
				@endforeach
				@if(session()->has('result'))
				 @if(session('result'))
				  <div class="alert alert-success">success</div>
                   
				 @else
				 <div class="alert alert-danger">fiald</div>

				 @endif
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form id = "save_car" method="POST" enctype="multipart/form-data" action="{{url('car/store')}}">
				@csrf
				

                <div class="form-group">
                <label>Model</label>
				<input type="text" name="model" class="form-control">
				</div>

				<div class="form-group">
					<label>Mechanic</label>
					<select name="mechanic_id" class="form-control">
						<option value="-1"></option>

						@foreach($mechanics as $mechanic)

						<option value="{{$mechanic->id}}">{{$mechanic->name}}</option>

						@endforeach


					</select>
				</div>

				<div class="form-group">
                <label>Car Image</label>
				<input type="file" name="image" class="form-control">
				</div>

				<button type="button" class="btn btn-primary" id = "save_button">save</button>
			</form>
				
			</div>
		</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script type="text/javascript">
		$('#save_button').click(function(e){

			e.preventDefualt();

			var result = confirm('Are you sure');

			if(result){

				$('#save_car').submit();
			}
		});
	</script>
</html>

