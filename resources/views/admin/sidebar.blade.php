<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h5">irfa Isah</h1>
              <p>fo</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                  <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                  
                  
                  <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category </a></li>

                 <li><div class="dropdown">
                  <a class="dropbtn" >Products</a>
                   <div class="dropdown-content">
                    <a href="{{url('add_product')}}">Add product</a>
                    <a href="{{url('Delete_product')}}">Delete product</a>
                    <a href="{{url('view_product')}}">view product</a>
                   </div>
                 </div></li>
                 
                 
                 
                  <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                  <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                  <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                      <li><a href="#">Page</a></li>
                      <li><a href="#">Page</a></li>
                      <li><a href="#">Page</a></li>
                    </ul>
                  </li>
                  <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
          </ul>
        </nav>
</body>
</html>