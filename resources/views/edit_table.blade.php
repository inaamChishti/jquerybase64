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
 
</head>
<body>
	  <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;

}
</style>
	<form  action="{{url('updateform')}}" method="post" id="submitForm" enctype="multipart/form-data">
		@csrf
		<h1 align="center">Edit Softenica Interview Task</h1>
  <div class="container" align="center">
 	<input type="hidden" name="timing" value="" id="s_details">
  <input type="hidden" name="images" value="" id="imges">
 	<input type="hidden" name="id" value="{{$fetch_data->id}}">
 	
  <div class="form-group col-md-6">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" value="{{$fetch_data->name}}" name="name" id="" required="" placeholder="Enter name">
  </div>
  
  <div class="form-group col-md-6">
  	@if(sizeof($fetch_data->timing_details)>0)
  @foreach($fetch_data->timing_details as $details)
    	<div class="">
  	<div class="remove">
  		<input type="hidden" name="detail_id"  id="details_id" value="{{$details->id}}">

  <label for="timings">Timings</label>
  
  <select class="form-select dropdown-toggle" aria-label="Default select day" id="day">
  <option selected>Select day</option>
    <option value="Sunday"@if($details->day == 'Sunday') selected = 'selected' @endif>Sunday</option>
    <option value="Monday"@if($details->day == 'Monday') selected = 'selected' @endif>Monday</option>
    <option value="Tuesday"@if($details->day == 'Tuesday') selected = 'selected' @endif>Tuesday</option>
    <option value="Wednesday"@if($details->day == 'Wednesday') selected = 'selected' @endif>Wednesday</option>
    <option value="Thursday"@if($details->day == 'Thursday') selected = 'selected' @endif>Thursday</option>
    <option value="Friday"@if($details->day == 'Friday') selected = 'selected' @endif>Friday</option>
    <option value="Saturday"@if($details->day == 'Saturday') selected = 'selected' @endif">Saturday</option>
  </select>
 
  <select class="form-select dropdown-toggle" aria-label="Default select time" id="opening_time">
  <option selected>Select Opening Time</option>
  <option value="00:00" @if($details->opening_time == '00:00') selected = 'selected' @endif >00:00</option>
  <option value="01:00"@if($details->opening_time == '01:00') selected = 'selected' @endif>01:00</option>
  <option value="02:00" @if($details->opening_time == '02:00') selected = 'selected' @endif>02:00</option>
  <option value="03:00"@if($details->opening_time == '03:00') selected = 'selected' @endif>03:00</option>
  <option value="04:00"@if($details->opening_time == '04:00') selected = 'selected' @endif>04:00</option>
  <option value="05:00" @if($details->opening_time == '05:00') selected = 'selected' @endif>05:00</option>
  <option value="06:00" @if($details->opening_time == '06:00') selected = 'selected' @endif>06:00</option>
  <option value="07:00" @if($details->opening_time == '07:00') selected = 'selected' @endif>07:00</option>
  <option value="08:00"@if($details->opening_time == '08:00') selected = 'selected' @endif>08:00</option>
  <option value="09:00"@if($details->opening_time == '09:00') selected = 'selected' @endif>09:00</option>
  <option value="10:00"@if($details->opening_time == '10:00') selected = 'selected' @endif>10:00</option>
  <option value="11:00"@if($details->opening_time == '11:00') selected = 'selected' @endif>11:00</option>
  <option value="12:00"@if($details->opening_time == '12:00') selected = 'selected' @endif>12:00</option>
  <option value="13:00"@if($details->opening_time == '13:00') selected = 'selected' @endif>13:00</option>
  <option value="14:00"@if($details->opening_time == '14:00') selected = 'selected' @endif>14:00</option>
  <option value="15:00"@if($details->opening_time == '15:00') selected = 'selected' @endif>15:00</option>
  <option value="16:00"@if($details->opening_time == '16:00') selected = 'selected' @endif>16:00</option>
  <option value="17:00"@if($details->opening_time == '17:00') selected = 'selected' @endif>17:00</option>
  <option value="18:00"@if($details->opening_time == '18:00') selected = 'selected' @endif>18:00</option>
  <option value="19:00"@if($details->opening_time == '19:00') selected = 'selected' @endif>19:00</option>
  <option value="20:00"@if($details->opening_time == '20:00') selected = 'selected' @endif>20:00</option>
  <option value="21:00"@if($details->opening_time == '21:00') selected = 'selected' @endif>21:00</option>
  <option value="22:00"@if($details->opening_time == '22:00') selected = 'selected' @endif>22:00</option>
  <option value="23:00"@if($details->opening_time == '23:00') selected = 'selected' @endif>23:00</option>
</select>

<select class="form-select dropdown-toggle" aria-label="Default select time" id="closing_time">
  <option selected>Select Closing Time</option>
  <option value="00:00"@if($details->closing_time == '00:00') selected = 'selected' @endif>00:00</option>
  <option value="01:00"@if($details->closing_time == '01:00') selected = 'selected' @endif>01:00</option>
  <option value="02:00"@if($details->closing_time == '02:00') selected = 'selected' @endif>02:00</option>
  <option value="03:00"@if($details->closing_time == '03:00') selected = 'selected' @endif>03:00</option>
  <option value="04:00"@if($details->closing_time == '04:00') selected = 'selected' @endif>04:00</option>
  <option value="05:00"@if($details->closing_time == '05:00') selected = 'selected' @endif>05:00</option>
  <option value="06:00"@if($details->closing_time == '06:00') selected = 'selected' @endif>06:00</option>
  <option value="07:00"@if($details->closing_time == '07:00') selected = 'selected' @endif>07:00</option>
  <option value="08:00"@if($details->closing_time == '08:00') selected = 'selected' @endif>08:00</option>
  <option value="09:00"@if($details->closing_time == '09:00') selected = 'selected' @endif>09:00</option>
  <option value="10:00"@if($details->closing_time == '10:00') selected = 'selected' @endif>10:00</option>
  <option value="11:00"@if($details->closing_time == '11:00') selected = 'selected' @endif>11:00</option>
  <option value="12:00"@if($details->closing_time == '12:00') selected = 'selected' @endif>12:00</option>
  <option value="13:00"@if($details->closing_time == '13:00') selected = 'selected' @endif>13:00</option>
  <option value="14:00"@if($details->closing_time == '14:00') selected = 'selected' @endif>14:00</option>
  <option value="15:00"@if($details->closing_time == '15:00') selected = 'selected' @endif>15:00</option>
  <option value="16:00"@if($details->closing_time == '16:00') selected = 'selected' @endif>16:00</option>
  <option value="17:00"@if($details->closing_time == '17:00') selected = 'selected' @endif>17:00</option>
  <option value="18:00"@if($details->closing_time == '18:00') selected = 'selected' @endif>18:00</option>
  <option value="19:00"@if($details->closing_time == '19:00') selected = 'selected' @endif>19:00</option>
  <option value="20:00"@if($details->closing_time == '20:00') selected = 'selected' @endif>20:00</option>
  <option value="21:00"@if($details->closing_time == '21:00') selected = 'selected' @endif>21:00</option>
  <option value="22:00"@if($details->closing_time == '22:00') selected = 'selected' @endif>22:00</option>
  <option value="23:00"@if($details->closing_time == '23:00') selected = 'selected' @endif>23:00</option>
</select>
</div>
<a class="btn btn-danger remove_data " href="#">remove</a>
  </div>
   @endforeach
    @endif
    <div class="append_record"></div>

  <button type="button" class="btn btn-success add_time">Add more</button>
  </div>
  <div class="image_append">
  @if(sizeof($fetch_data->image_data)>0)
  @foreach($fetch_data->image_data as $img)
 

  <div class="input-group control-group img_div form-group col-md-6 img_get ">
    <input type="text" name="detail_id" class="img_id" id="image_id" value="{{$img->id}}">
    <img id="blah" class="product-img" src="{{$img->image}}" alt="your image" />
    <input type="file" name="image[]" class="form-control choose-file" value="{{$img->image}}" id="img_id" >
      <button class="btn btn-success add_more_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
  </div>


  @endforeach
  @endif
  </div>

  <button type="submit" class="btn btn-primary submit_form">submit</button>
  </div>
</form>
		

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click','.add_time',function(){
		$('.append_record').append(
	'<div class="remove">'+
	'<label for="timings">Timings</label>'+
    '<select class="form-select dropdown-toggle" aria-label="Default select day" id="day">'+
    '<option selected>Select day</option>'+
    ' <option value="Sunday">Sunday</option>'+
    '<option value="Monday">Monday</option>'+
    '<option value="Tuesday">Tuesday</option>'+
    '<option value="Wednesday">Wednesday</option>'+
    '<option value="Thursday">Thursday</option>'+
    '<option value="Friday">Friday</option>'+
    '<option value="Saturday">Saturday</option>'+
    '</select>'+
    '<select class="form-select dropdown-toggle" aria-label="Default select time" id="opening_time">'+
    '<option selected>Select Opening Time</option>'+
    '<option value="00:00">00:00</option>'+
    '<option value="01:00">01:00</option>'+
    '<option value="02:00">02:00</option>'+
    '<option value="03:00">03:00</option>'+
    '<option value="04:00">04:00</option>'+
    '<option value="05:00">05:00</option>'+
    '<option value="06:00">06:00</option>'+
    '<option value="07:00">07:00</option>'+
    '<option value="08:00">08:00</option>'+
    '<option value="09:00">09:00</option>'+
    '<option value="10:00">10:00</option>'+
    '<option value="11:00">11:00</option>'+
    '<option value="12:00">12:00</option>'+
    '<option value="13:00">13:00</option>'+
    '<option value="14:00">14:00</option>'+
    '<option value="15:00">15:00</option>'+
    '<option value="16:00">16:00</option>'+
    '<option value="17:00">17:00</option>'+
    '<option value="18:00">18:00</option>'+
    '<option value="19:00">19:00</option>'+
    '<option value="20:00">20:00</option>'+
    '<option value="21:00">21:00</option>'+
    '<option value="22:00">22:00</option>'+
    '<option value="23:00">23:00</option>'+
    '</select>'+
    '<select class="form-select dropdown-toggle" aria-label="Default select time" id="closing_time">'+
    '<option selected>Select Closing Time</option>'+
    '<option value="00:00">00:00</option>'+
    '<option value="01:00">01:00</option>'+
    '<option value="02:00">02:00</option>'+
    '<option value="03:00">03:00</option>'+
    '<option value="04:00">04:00</option>'+
    '<option value="05:00">05:00</option>'+
    '<option value="06:00">06:00</option>'+
    '<option value="07:00">07:00</option>'+
    '<option value="08:00">08:00</option>'+
    '<option value="09:00">09:00</option>'+
    '<option value="10:00">10:00</option>'+
    '<option value="11:00">11:00</option>'+
    '<option value="12:00">12:00</option>'+
    '<option value="13:00">13:00</option>'+
    '<option value="14:00">14:00</option>'+
    '<option value="15:00">15:00</option>'+
    '<option value="16:00">16:00</option>'+
    '<option value="17:00">17:00</option>'+
    '<option value="18:00">18:00</option>'+
    '<option value="19:00">19:00</option>'+
    '<option value="20:00">20:00</option>'+
    '<option value="21:00">21:00</option>'+
    '<option value="22:00">22:00</option>'+
    '<option value="23:00">23:00</option>'+
     '</select>'+
     '</div>'+
     '<a class="btn btn-danger remove_data " href="#">remove</a>'

    );
		});
	});

	 $(document).on('click','.remove_data', function(e){
             $(this).prev().remove()
             $(this).remove()

              });

	

		
		 var timings = [];
		 var imges = [];
	     $(document).on('click','.submit_form',function(e) {
                $(".remove").each(function(){
                let day = $(this).find("#day").val();
                let openingTime = $(this).find("#opening_time").val();
                let closingTime = $(this).find("#closing_time").val();
                let timing_id = $(this).find("#details_id").val();
                let js = {
                'day': day,
                'openingTime' : openingTime,
                'closingTime' : closingTime,
                'timing_id'   : timing_id,

                 }
                 
                 timings.push(js);
                });
                $('.img_get').each(function(){
                  // let imgs = $(this).find('#product-img').attr('src');
                  let imgs = $(this).find("img").attr('src');
                  let img_id = $(this).find("#image_id").val();
                  // alert(img_id);
                let img_arr = {
                  'imgs': imgs,
                  'img_id' : img_id,
                }
                imges.push(img_arr);
                });
                console.log(imges);
                $('#s_details').val(JSON.stringify(timings));
                 $('#imges').val(JSON.stringify(imges));
                console.log(timings);
                $("#submitForm").submit();

            });


</script>
<script type="text/javascript">
	
    $(document).on('change','.choose-file',function(e) {

    var input = $(this)[0];
    if (input.files && input.files[0]) {
        var reader = new FileReader();
         let question_image = $(this).find("img").attr('src');
        let img_tag = $(this).parent('').find('.product-img');
        reader.onload = function (e) {
            $(img_tag).attr('src',e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
});

    $(document).on('click','.add_more_image',function(){
    $('.image_append').append(
  '<div class="input-group control-group form-group col-md-6 img_get ">'+
 '<img id="blah" class="product-img" src="" alt="your image" />'+
  '<input type="file" name="image[]" class="form-control choose-file" id="img_id" >'+
  '<button class="btn btn-success add_more_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>'+
  '</div>'+
  '<button class="btn btn-danger removeImage" type="button">Remove</button><br>');
  });
</script>
</html>
