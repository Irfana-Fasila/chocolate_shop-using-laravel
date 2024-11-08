<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.acss')
  table {
    width: 200px;
    margin-left: auto;
    margin-right: auto;
}
    </head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div>
    <div>
    <h1>ADD CATEGORY</h1>
    <form  action ="{{url('add_category')}}" method = post class="form-inline">
        @csrf 
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only">Add Category</label>
          <input type="text" name="category" >
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">ADD</button>
      </form>
    </div>
  </div>
  <center>
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
          <a class="btn btn-success" href="{{url('edit_category/'.$cat->id)}}">Edit</a>
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