@extends('layouts.default')

@section('navbar')
	@parent
@endsection

@section('content')
			<div class="jumbotron">

				<h2>
					@lang('common.content.portfolio')
				</h2>

				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<h4 class="text-center text-nowrap">Various Projects</h4>
						<a data-toggle="modal" data-target="#projects">
							<img src="/images/portfolio/projects_other.png" class="img-rounded center-block img-responsive" alt="Various Projects" />
						</a>
						<div class="small text-center">Projects, 2007-Present</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h4 class="text-center text-nowrap">Carnegie Technologies</h4>
						<img src="/images/portfolio/sparked.png" class="img-rounded center-block img-responsive" alt="Carnegie Technologies" />
						<div class="small text-center">Application Developer, 2014-2016</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h4 class="text-center text-nowrap">Catapult Systems</h4>
						<a data-toggle="modal" data-target="#catapult">
							<img src="/images/portfolio/cs_catapult.png" class="img-rounded center-block img-responsive" alt="Catapult Systems" />
						</a>
						<div class="small text-center">Consultant, 2012-2014</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h4 class="text-center text-nowrap">Morris Communications</h4>
						<a data-toggle="modal" data-target="#mcc">
							<img src="/images/portfolio/mcc_morris.png" class="img-rounded center-block img-responsive" alt="Morris Communications" />
						</a>
						<div class="small text-center">Front End, 1999-2007</div>
					</div>
				</div>

			</div>

			<div class="col-md-12">
				<div class="col-md-4">

					<h3>
						@lang('common.content.skillset')
					</h3>

					<div class="row">
						<div class="col-md-6">
							<strong>Primary:</strong>
							<p>laravel php framework, php, mysql, boostrap, css3, html5, jquery</p>

							<strong>Other:</strong>
							<p>postgres, ajax, xml</p>
						</div>
						<div class="col-md-6">
							<strong>CMS:</strong>
							<p>wordpress, snippetmaster, proprietary</p>

							<strong>VMs/Servers:</strong>
							<p>docker, laragon, homestead</p>
						</div>
					</div>

				</div>
				<div class="col-md-3">

					<h3>
						@lang('common.content.eclasses')
					</h3>
					<strong>Courses Completed:</strong> boostrap, jquery, drupal, wordpress and wordpress themes, html5, javascript, xml, mobile web design, php, asp.net, c#, ajax, sql

				</div>
				<div class="col-md-5">

					<h3>
						@lang('common.content.contact')
					</h3>
					<div class="row">

						<div class="hidden-xs col-md-6">
							<a href="http://www.linkedin.com/in/rjdiepenbrock" target="new"><img src="http://www.linkedin.com/img/webpromo/btn_viewmy_120x33.gif" width="120" height="33" alt="View RJ Diepenbrock's profile on LinkedIn" /></a>
							<br><br>
							
							<p><a href="https://github.com/rdiepenbrock" target="_blank"><i class="fa fa-github"></i> Github</a></p>
							
							<p><a href="https://twitter.com/rjdwebsites" target="_blank"><i class="fa fa-twitter"></i> @rjdwebsites</a></p>
						</div>
						<div class="col-md-6">
							<address class="hidden-xs text-right">
								@include('layouts.address')<br>
								@include('layouts.email')<br>
								@include('layouts.phone')
							</address>
							<address class="visible-xs text-left">
								@include('layouts.address')<br>
								@include('layouts.email')<br>
								@include('layouts.phone')
							</address>
						</div>
					</div>

				</div>
			</div>

		</div>

		<!-- various projects -->
		<div class="modal fade" id="projects" tabindex="-1" role="dialog" aria-labelledby="Various Projects">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							@lang('common.modal.close-x')
						</span>
						</button>
						<h4 class="modal-title" id="VariousProjects">
							Various Projects
							<span class="small"><em>@lang('common.content.footnote')</em></span>
						</h4>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							
							<div class="col-md-12">
								<div class="row col-md-6">
									<h4>Freedom Driven LLC</h4>
									<div class="col-md-10">
										<div class="text-center">Flippilot</div>
										<img src="/images/portfolio/fd_flippilot.png" class="img-rounded center-block img-responsive" alt="Flippilot" />
										<div class="small text-center">Laravel 5.4, Vue.js application development, 2017</div>
									</div>
								</div>
								<div class="col-md-6">
									<h4>Cogent GPS</h4>
									<div class="col-md-12">
										<div class="text-center">SNIX</div>
										<img src="/images/portfolio/cgps_snix.png" class="img-rounded center-block img-responsive" alt="Cogent GPS - SNIX" />
										<div class="small text-center">Laravel 5.3 application development, 2017</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<h4>Cleverly Engaged Marketing</h4>
								<div class="col-md-4">
									<div class="text-center">c2mtech.com</div>
									<img src="/images/portfolio/cem_c2mtech.png" class="img-rounded center-block img-responsive" alt="C2mtech.com" />
									<div class="small text-center">WordPress optimization, 2017.</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">DallasPalmsVenue.com</div>
									<img src="/images/portfolio/cem_dallaspalms.png" class="img-rounded center-block img-responsive" alt="DallasPalmsVenue.com" />
									<div class="small text-center">WordPress optimization, 2017.</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">HettlerInsurance.com</div>
									<img src="/images/portfolio/cem_hettlerinsurance.png" class="img-rounded center-block img-responsive" alt="HettlerInsurance.com" />
									<div class="small text-center">WordPress optimization, 2017.</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<h4>Website Solutions Company</h4>
								<div class="col-md-4">
									<div class="text-center">TownCreekProperties.com</div>
									<img src="/images/portfolio/wsc_towncreekproperties.png" class="img-rounded center-block img-responsive" alt="TownCreekProperties.com" />
									<div class="small text-center">Coding project.<br>Completed in 2017.</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">CPSChumann.com</div>
									<img src="/images/portfolio/wsc_cpschumann.png" class="img-rounded center-block img-responsive" alt="CPSchumann.com" />
									<div class="small text-center">Coding project.<br>Completed in 2017.</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">TXMSS.com</div>
									<img src="/images/portfolio/wsc_txmss.png" class="img-rounded center-block img-responsive" alt="TXMSS.com" />
									<div class="small text-center">Coding project.<br>Completed in 2016.</div>
								</div>
							</div>
							
							<div class="col-md-12">
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

							<div class="col-md-12">
								<div class="row col-md-12">
									<h4>Acquinity Interactive</h4>
									<div class="col-md-4">
										<div class="text-center">Sweepstakes.com</div>
										<img src="/images/portfolio/ai_sweepstakes.png" class="img-rounded center-block img-responsive" alt="Sweepstakes.com" />
										<div class="small text-center">Coding project in collaboration with<br>.Net developer.<br>Completed in 2012</div>
									</div>
									<div class="col-md-4">
										<div class="text-center">AmericanCreditReport.com</div>
										<img src="/images/portfolio/ai_acr.png" class="img-rounded center-block img-responsive" alt="AmericanCreditReport.com" />
										<div class="small text-center">Coding project in collaboration with .Net developer.<br>Completed in 2012</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							@lang('common.modal.close')
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- catapult systems -->
		<div class="modal fade" id="catapult" tabindex="-1" role="dialog" aria-labelledby="Catapult Systems">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							@lang('common.modal.close-x')
						</span>
						</button>
						<h4 class="modal-title" id="CatapultSystems">
							Catapult Systems
							<span class="small"><em>@lang('common.content.footnote')</em></span>
						</h4>
					</div>
					<div class="modal-body">
						<div class="container-fluid">

							<div class="col-md-12">
								<div class="col-md-4">
									<div class="text-center">FirstMarkCU.org</div>
									<img src="/images/portfolio/cs_firstmarkcu.png" class="img-rounded center-block img-responsive" alt="FirstMarkCU.org" />
									<div class="small text-center">SharePoint 2013 Intranet branding. Finished in 2013</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">FrostBank.com</div>
									<img src="/images/portfolio/cs_frostbank.png" class="img-rounded center-block img-responsive" alt="FrostBank.com" />
									<div class="small text-center">Staff aug project, SharePoint 2010. Finished in 2013</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">NuStarEnergy.com</div>
									<img src="/images/portfolio/cs_nustarenergy.png" class="img-rounded center-block img-responsive" alt="NuStarEnergy.com" />
									<div class="small text-center">SharePoint 2010 branding. Finished in 2012</div>
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							@lang('common.modal.close')
						</button>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('footer')
	@parent
@endsection