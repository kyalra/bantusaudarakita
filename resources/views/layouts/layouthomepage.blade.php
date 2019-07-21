<!DOCTYPE html>
<html lang="en">

<head>
    @include('part.headhomepage')
    <style>
    .preloader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
            background-color : #fff;
            
		}
		.preloader .loading {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
			font: 14px arial;
		}
    </style>
</head>

<body>
<div class="preloader">
			<div class="loading">
				<img src="{{asset('img/3.gif')}}" width="80">
				<p>Harap Tunggu</p>
			</div>
		</div>
    @include('part.headerhomepage')
    @yield('contenthomepage')
    @include('part.footerhomepage')
    @include('part.scripthomepage')
    <script>
     
     $(document).ready(function(){
    $(".preloader").hide();
    loader.prependTo(window);
});

$(window).load(function(){
    loader.remove();
	$(".preloader").show();
});
    </script>
</body>

</html>
