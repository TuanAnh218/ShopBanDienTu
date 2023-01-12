@include('layouts.header')
@include('modules.menu')
<div class="container" style="padding-top: 64px;">   
	  	<div class="row">   
			@yield('content')
			@include('modules.gioithieu')
	  	</div>       <!-- /row -->
	</div> <!-- /container -->
@include('layouts.footer')