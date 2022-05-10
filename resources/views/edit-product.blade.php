<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <h2>Update Product</h2>
</head>
<body>


<form method="POST"  action="update_product">
@csrf

    <input type="hidden" name="id" value="{{$data['id']}}">


    <label>Image </label>
    <input type="text" name="product_image_path" value="{{$data['product_image_path']}}" disabled><br><br>
   
    <label>Name </label>
    <input type="text" name="name" value="{{$data['name']}}" disabled><br><br>

    <label>Description </label>
    <input type="text" name="description" value="{{$data['description']}}">
    <span class="text-danger">@error('description') {{$message}} @enderror</span><br><br> 

    <label> Price</label>
    <input type="number" name="price" value="{{$data['price']}}">
    <span class="text-danger">@error('price') {{$message}} @enderror</span><br><br> 

    <label>Day</label>
    <select   name="day" >
            <option  selected="" disabled="" value="">Select Day</option>
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="saturday">Saturday</option>
            <option value="sunday">Sunday</option>
    </select>
    <span class="text-danger">@error('day') {{$message}} @enderror</span><br><br>
                                               

    <label>Starting Time</label>
    <input type="time"  name="s_time" value="{{$data['s_time']}}">              
    <span class="text-danger">@error('s_time') {{$message}} @enderror</span><br><br> 
    
    <label>Ending Time</label>
    <input type="time"  name="e_time" value="{{$data['e_time']}}">               
    <span class="text-danger">@error('e_time') {{$message}} @enderror</span><br><br> 

    <button type="submit">update</button>                     
</body>
</html>