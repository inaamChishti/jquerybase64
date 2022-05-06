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
	<form  action="{{route('images.store')}}" method="post" id="submitForm" enctype="multipart/form-data">
		@csrf
		<h1 align="center">Softenica Interview Task</h1>
  <div class="container" align="center">
 	<input type="hidden" name="timing" value="" id="s_details">
    <input type="hidden" name="images" value="" id="imges">
 	
  <div class="form-group col-md-6">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" name="name" id="" required="" placeholder="Enter name">
  </div>
  <div class="form-group col-md-6">
  	<div class="append_record">
  	<div class="remove">
  <label for="timings">Timings</label>
  <select class="form-select dropdown-toggle" aria-label="Default select day" id="day">
  <option selected>Select day</option>
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
  </select>

  <select class="form-select dropdown-toggle" aria-label="Default select time" id="opening_time">
  <option selected>Select Opening Time</option>
  <option value="00:00">00:00</option>
  <option value="01:00">01:00</option>
  <option value="02:00">02:00</option>
  <option value="03:00">03:00</option>
  <option value="04:00">04:00</option>
  <option value="05:00">05:00</option>
  <option value="06:00">06:00</option>
  <option value="07:00">07:00</option>
  <option value="08:00">08:00</option>
  <option value="09:00">09:00</option>
  <option value="10:00">10:00</option>
  <option value="11:00">11:00</option>
  <option value="12:00">12:00</option>
  <option value="13:00">13:00</option>
  <option value="14:00">14:00</option>
  <option value="15:00">15:00</option>
  <option value="16:00">16:00</option>
  <option value="17:00">17:00</option>
  <option value="18:00">18:00</option>
  <option value="19:00">19:00</option>
  <option value="20:00">20:00</option>
  <option value="21:00">21:00</option>
  <option value="22:00">22:00</option>
  <option value="23:00">23:00</option>
</select>

<select class="form-select dropdown-toggle" aria-label="Default select time" id="closing_time">
  <option selected>Select Closing Time</option>
  <option value="00:00">00:00</option>
  <option value="01:00">01:00</option>
  <option value="02:00">02:00</option>
  <option value="03:00">03:00</option>
  <option value="04:00">04:00</option>
  <option value="05:00">05:00</option>
  <option value="06:00">06:00</option>
  <option value="07:00">07:00</option>
  <option value="08:00">08:00</option>
  <option value="09:00">09:00</option>
  <option value="10:00">10:00</option>
  <option value="11:00">11:00</option>
  <option value="12:00">12:00</option>
  <option value="13:00">13:00</option>
  <option value="14:00">14:00</option>
  <option value="15:00">15:00</option>
  <option value="16:00">16:00</option>
  <option value="17:00">17:00</option>
  <option value="18:00">18:00</option>
  <option value="19:00">19:00</option>
  <option value="20:00">20:00</option>
  <option value="21:00">21:00</option>
  <option value="22:00">22:00</option>
  <option value="23:00">23:00</option>
</select>
</div>
  </div>
  <button type="button" class="btn btn-success add_time">Add more</button>
  </div>
  <div class="image_append">

  <div class="input-group control-group img_div form-group col-md-6 img_get ">
    <img id="blah" class="product-img" src="" alt="your image" />
    <input type="file" name="image[]" class="form-control choose-file" id="img_id" >
      <button class="btn btn-success add_more_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
  </div>

</div>
  <!-- <button class="btn btn-danger removeImage" type="button">Remove</button>
  <br> -->

  <button type="submit" class="btn btn-primary submit_form">submit</button>
  </div>
</form>
		
<a href="{{url('table')}}">show table</a>
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

  $(document).on('click','.add_more_image',function(){
    $('.image_append').append(
  '<div class="input-group control-group form-group col-md-6 img_get ">'+
 '<img id="blah" class="product-img" src="" alt="your image" />'+
  '<input type="file" name="image[]" class="form-control choose-file" id="img_id" >'+
  '<button class="btn btn-success add_more_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>'+
  '</div>'+
  '<button class="btn btn-danger removeImage" type="button">Remove</button><br>');
  });
  $(document).on('click','.removeImage',function(){
   $(this).prev().remove()
   $(this).remove()
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
                let js = {
                'day': day,
                'openingTime' : openingTime,
                'closingTime' : closingTime,
                 }
                 timings.push(js);
                });

                $('.img_get').each(function(){
                  // let imgs = $(this).find('#product-img').attr('src');
                  let imgs = $(this).find("img").attr('src');
                let img_arr = {
                  'imgs': imgs,
                }
                imges.push(img_arr);
                });
                
                 console.log(imges);
                 console.log(timings);
                $('#s_details').val(JSON.stringify(timings));
                $('#imges').val(JSON.stringify(imges));
                $("#submitForm").submit();


            });


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
})


</script>

</html>