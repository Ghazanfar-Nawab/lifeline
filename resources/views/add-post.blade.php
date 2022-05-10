
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
 
    <style>
     input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.container {
background-color: navy;
color:white;
width: 40%;
height: auto;
padding: 2%;
margin: 10%;
border-radius: 25px;

}
    </style>
</head>
<body>
    <div class="container">


        <form method="POST" action="post-add" enctype="multipart/form-data">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required data-error="Please enter product name" placeholder="Name"  pattern="[a-z,A-Z]{3,15}"  maxlength="12"><br>
            <span class="text-danger">@error('name') {{$message}} @enderror</span>

            Description : <br />
            <textarea rows = "5" cols = "30" name = "description" required data-error="Please enters desciption"   minlength="4">
            </textarea><br>
            <span class="text-danger">@error('description') {{$message}} @enderror</span>

            <label for="myfile">Upload File:</label>
            <input type="file" id="myfile" name="image" required data-error="Please choose any file"><br><br>
            <span class="text-danger">@error('image') {{$message}} @enderror</span>
            
            <label for="number">Price:</label><br>
            <input type="number" id="number" name="price" required data-error="Please enter the price"><br><br>
            <span class="text-danger">@error('price') {{$message}} @enderror</span>
            
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
                </select><br><br>
            <span class="text-danger">@error('day') {{$message}} @enderror</span>           
                                
 
            Start Time:
            <input type="time" name = s_time required data-error="Time field is required"> <br><br>
            <span class="text-danger">@error('s_date') {{$message}} @enderror</span>
    
            End Time:
            <input type="time" name = e_time required data-error="Time field is required"><br><br>
            <span class="text-danger">@error('e_date') {{$message}} @enderror</span>
         
           <button type="submit" class="btn btn-primary">Add</button>
             
          </form>
    </div>
  


   
        
 

    
</body>
</html>












