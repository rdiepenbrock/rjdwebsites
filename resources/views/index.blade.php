<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@lang('common.title')</title>

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

		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						@lang('common.title')
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="{!! url('/') !!}">
								@lang('common.nav.home')
							</a>
						</li>
						<li>
							<a href="{!! url('about') !!}">
								@lang('common.nav.about')
							</a>
						</li>
						<li>
							<a href="{!! url('contact') !!}">
								@lang('common.nav.contact')
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								@lang('common.nav.portfolio')
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{!! asset('storage/diepenbrock_resume.doc') !!}">@lang('common.portfolio.resumeDoc')</a></li>
								<li><a href="{!! asset('storage/diepenbrock_resume.pdf') !!}">@lang('common.portfolio.resumePDF')</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="{!! url('development') !!}">@lang('common.nav.development')</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">

			<div class="jumbotron">

				<h2>
					@lang('common.portfolio.title')
					<span class="small"><em>@lang('common.portfolio.footnote')</em></span>
				</h2>

				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center">Various Projects</h4>
						<a data-toggle="modal" data-target="#projects">
							<img src="/images/portfolio/projects_other.png" class="img-rounded center-block img-responsive" alt="Various Projects" />
						</a>
						<div class="small text-center">Projects, 2007-Present</div>
					</div>
					<div class="col-md-3">
						<h4 class="text-center">Carnegie Technologies</h4>
						<img src="/images/portfolio/sparked.png" class="img-rounded center-block img-responsive" alt="Carnegie Technologies" />
						<div class="small text-center">Application Developer, 2014-2016</div>
					</div>
					<div class="col-md-3">
						<h4 class="text-center">Catapult Systems</h4>
						<a data-toggle="modal" data-target="#catapult">
							<img src="/images/portfolio/cs_catapult.png" class="img-rounded center-block img-responsive" alt="Catapult Systems" />
						</a>
						<div class="small text-center">Consultant, 2012-2014</div>
					</div>
					<div class="col-md-3">
						<h4 class="text-center">Morris Communications</h4>
						<a data-toggle="modal" data-target="#mcc">
							<img src="/images/portfolio/mcc_morris.png" class="img-rounded center-block img-responsive" alt="Morris Communications" />
						</a>
						<div class="small text-center">Front End, 1999-2007</div>
					</div>
				</div>

			</div>

		</div> <!-- /container -->

		<!-- various projects -->
		<div class="modal fade" id="projects" tabindex="-1" role="dialog" aria-labelledby="Various Projects">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Various Projects">Various Projects</h4>
					</div>
					<div class="modal-body">
						<div class="container-fluid">

							<div class="row">
								<h4>Gruene Acres Web Design</h4>
								<div class="col-md-4">
									<div class="text-center">LonghornMesquiteWorks.com</div>
									<img src="/images/portfolio/ga_longhornmesquiteworks.png" class="img-rounded center-block img-responsive" alt="LonghornMesquiteWorks.com" />
									<div class="small text-center">Coding project.<br>Completed in 2014.</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">MiculkaMechanical.com</div>
									<img src="/images/portfolio/ga_miculkamechanical.png" class="img-rounded center-block img-responsive" alt="MiculkaMechanical.com" />
									<div class="small text-center">Coding project.<br>Completed in 2013.</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">DobbsFerryTravelers.com</div>
									<img src="/images/portfolio/ga_dobbsferrytravelers.png" class="img-rounded center-block img-responsive" alt="DobbsFerryTravelers.com" />
									<div class="small text-center">Coding project.<br>Completed in 2013.</div>
								</div>
							</div>

							<div class="row">
								<h4>Acquinity Interactive</h4>
								<div class="col-md-4">
									<div class="text-center">Sweepstakes.com</div>
									<img src="/images/portfolio/ai_sweepstakes.png" class="img-rounded center-block img-responsive" alt="Sweepstakes.com" />
									<div class="small text-center">Coding project in collaboration with .Net developer.<br>Completed in 2012</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">AmericanCreditReport.com</div>
									<img src="/images/portfolio/ai_acr.png" class="img-rounded center-block img-responsive" alt="AmericanCreditReport.com" />
									<div class="small text-center">Coding project in collaboration with .Net developer.<br>Completed in 2012</div>
								</div>

								<h4>Tera U.S.</h4>
								<div class="col-md-4">
									<div class="text-center">FayObserver.com</div>
									<img src="/images/portfolio/tu_fayobserver.png" class="img-rounded center-block img-responsive" alt="FayObserver.com" />
									<div class="small text-center">Moved code to XHTML; created templates for Kentico CMS.<br>Completed in 2009.</div>
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- catapult systems -->
		<div class="modal fade" id="catapult" tabindex="-1" role="dialog" aria-labelledby="Catapult Systems">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- morris communications -->
		<div class="modal fade" id="mcc" tabindex="-1" role="dialog" aria-labelledby="Morris Communications">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>



	</body>
</html>
