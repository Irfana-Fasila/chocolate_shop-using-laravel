<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
  
</head>
<body>
<div>
    <h1>ADD PRODUCT</h1>
    <form  action ="{{url('add_product')}}" method = post class="form-inline">
        @csrf 
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only">Product Name</label>
          <input type="text" name="product_name" >
          <label for="staticEmail2" class="sr-only">Description</label>
          <input type="text" name="descriptions" >
          <label for="staticEmail2" class="sr-only">price</label>
          <input type="text" name="prices" >
          <label for="staticEmail2" class="sr-only">Quantity</label>
          <input type="text" name="quantities" >
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">ADD</button>
      </form>
    </div>
</body>
</html>