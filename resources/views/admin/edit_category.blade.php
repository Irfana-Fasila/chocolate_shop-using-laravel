<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update  Category</h1>
    <div>
        <form  action ="{{url('update_category',$data->id)}}" method = post class="form-inline">
            @csrf 
            <div class="form-group mb-2">
              <label for="staticEmail2" class="sr-only">Update Category</label>
              <input type="text" name="category" value="{{$data->category_name}}">
            </div>
            
            <button type="submit" class="btn btn-primary mb-2">Update</button>
          </form>
        </div>
        
</body>
</html>