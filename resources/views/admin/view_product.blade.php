<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    @include('admin.acss')
</head>
<body>
    @include('admin.header')
    <h1>add poduct page</h1>
    <div>
    <table class='table'>
      <thead class="thead-dark">
      <tr>
        <th>Category</th>
      </tr>
      @foreach($data as $cat)
      <tr>
        <td>{{$cat->category_name}}</td>
        <td>
          <a class="btn btn-success" href="{{url('edit_category/',$cat->id)}}">Edit</a>
        </td>
        <td>
          <a class="btn btn-danger" href="{{url('delete_category',$cat->id)}}">Delete</a>
        </td>
      </tr>
      @endforeach
      </thead>
    </table>
  </div>
</body>
</html>