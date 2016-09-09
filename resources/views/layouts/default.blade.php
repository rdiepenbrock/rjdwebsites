<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
			@lang('common.title')
			@yield('title')
		</title>

		<!-- css -->
		<link href="{!! URL::asset('/css/app.css') !!}" rel="stylesheet">

		<!-- core Bootstrap and JQuery -->
		<script src="{!! URL::asset('/js/app.js') !!}"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <body>
		@section('navbar')
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{!! url('/') !!}">
							@lang('common.title')
						</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="{!! url('/') !!}">
									@lang('common.nav.home')
								</a>
							</li>
							<li>
								<a href="{!! url('about') !!}">
									@lang('common.nav.about')
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									@lang('common.nav.portfolio')
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="{!! asset('storage/diepenbrock_resume.doc') !!}">@lang('common.content.resumeDoc')</a></li>
									<li><a href="{!! asset('storage/diepenbrock_resume.pdf') !!}">@lang('common.content.resumePDF')</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="{!! asset('storage/eClasses/') !!}">@lang('common.nav.development')</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		@show

		<div class="container">

			@yield('content')

		</div>

		@section('footer')
			<footer class="footer">
				<div class="margin-tb-10">
					<ul class="list-unstyled list-inline text-center">
						<li>
							<a href="{!! asset('storage/diepenbrock_resume.doc') !!}">
								@lang('common.content.resumeDoc')
							</a>
						</li>
						<li>
							<a href="{!! asset('storage/diepenbrock_resume.pdf') !!}">
								@lang('common.content.resumePDF')
							</a>
						</li>
						<li class="visible-xs">
							<p class="margin-tb-10">
								<a href="http://www.linkedin.com/in/rjdiepenbrock" target="new">
									<img src="http://www.linkedin.com/img/webpromo/btn_viewmy_120x33.gif" width="120" height="33" alt="View R.J. Diepenbrock's profile on LinkedIn" />
								</a>
							</p>
						</li>
						<li>
							@lang('common.content.copyright', ['date' => \Carbon\Carbon::now()->year])
						</li>
					</ul>
				</div>
			</footer>
		@show

	</body>
</html>
