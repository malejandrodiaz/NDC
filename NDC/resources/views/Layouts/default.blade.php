<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	@include('partials.head')
</head>
<body style="background-color:rgba(255,255,255,1.00)">

    @include('partials.menu')
    
<div class="col-xs-8 col-md-8 panel panel-default" style="word-wrap: break-word;">
	<div class="panel-heading">{{ @$title }}</div>
		<div class="panel-body" style="float:center; width:100%; overflow:auto; height:100%">	
				@yield('content')
    	</div>
	</div>
</div>
@include('partials.javascripts')
</body>
</html>