<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	   <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;

}
</style>
 
</head>
<body>
					<h1 align="center">Softenica Interview Task</h1>

		  <table class="table table-dark col-md-6" align="center">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Image</th>
		      <th scope="col">Day</th>
		      <th scope="col">Opening Time</th>
		      <th scope="col">Closing Time</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(sizeof($get_data)>0)
		    	@foreach($get_data as $data)
		    <tr>
		    	
		      <th scope="row">{{$data->id}}</th>
		      <td>{{$data->name}}</td>
		      <td><img src="{{$data->image_details->image}}" class="avatar" /> </td>
		      <td>{{@$data->timing_details->day}}</td>
		      <td>{{@$data->timing_details->opening_time}}</td>
		      <td>{{@$data->timing_details->closing_time}}</td>
		      <td><a href="{{url('editTable/'.$data->id)}}">Edit</a></td>
		     
		    </tr>
		     @endforeach
		      @endif
		  </tbody>
		</table>
		<!-- timing seprate table -->
		<br><br>
		<h1 align="center">Timing Table</h1>
		<table class="table table-dark col-md-6" align="center">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Day</th>
		      <th scope="col">Opening Time</th>
		      <th scope="col">Closing Time</th>
		      <th scope="col">status </th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(sizeof($timings)>0)
		    	@foreach($timings as $timing)
		    <tr>
		    	
		      <th scope="row">{{$data->id}}</th>
		      <td>{{$timing->day}}</td>
		      <td>{{$timing->opening_time}}</td>
		      <td>{{$timing->closing_time}}</td> 
		      
		     <td>@if((\Carbon\Carbon::now()->format('l') == $timing->day && \Carbon\Carbon::now()->format('H:i') >= $timing->opening_time ) && (\Carbon\Carbon::now()->format('H:i') < $timing->closing_time)) "OPEN" @else "CLOSE"  @endif</td>
		    </tr>
		     @endforeach
		      @endif
		  </tbody>
		</table>
	</body>
	
	</html>
