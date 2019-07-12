<!DOCTYPE html>
<html>
<head>
    @include('part.head')
</head>
<body>
   
    @include('part.sidemenu')
    @include('part.header')
    <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          @yield('content')
        </div>
      </div>
      @include('part.footer')
    
       
    
    @include('part.script')
</body>
</html>