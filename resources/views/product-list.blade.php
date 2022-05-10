<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table border='1px'>
            <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>product_image_path</th>
                        <th>Price</th>
                        <th>Day</th>
                        <th>Starting Time</th>
                        <th>Ending Time</th>
                        <th>Action</th>                   
                    </tr>
            </thead>
            <tbody>

                @foreach ($product_data as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <th>{{$product->name}}</th>
                        <th>{{$product->description}}</th>
                        <th>
                            <img src="{{ asset('uploads/product/'.$product->product_image_path) }}" width="170px" height="170px" alt="image">
                        </th>
                        <th>{{$product->price}}</th>
                        <th>{{$product->day}}</th>
                        <th>{{$product->s_time}}</th>
                        <th>{{$product->e_time}}</th>
                        <th><a href="delete-product/{{$product->id}}"> Delete</a><a href="edit/{{$product->id}}"> Edit</a></th>                    
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>    
