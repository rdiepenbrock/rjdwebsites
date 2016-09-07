@extends('layouts.default')

@section('title')
	- @lang('common.pages.about')
@endsection

@section('navbar')
    @parent
@endsection

@section('content')

	<div class="col-md-12">

		<h2>@lang('common.pages.about')</h2>
		<div class="col-sm-3 col-md-2">
			<div class="row">
				<div class="hidden-xs well">
					<h4>@lang('common.pages.contact')</h4>
					<p>Richard Diepenbrock</p>
					<p>
						@include('layouts.phone')
					</p>
					<p>
						@include('layouts.email')
					</p>
					<p>
						<a href="{!! asset('storage/diepenbrock_resume.doc') !!}">@lang('common.content.resumeDoc')</a><br>
						<a href="{!! asset('storage/diepenbrock_resume.pdf') !!}">@lang('common.content.resumePDF')</a>
					</p>
					<p><img src="images/rjd_mug.png" alt="Richard Diepenbrock" class="img-responsive"/></p>
				</div>
				<div class="visible-xs well clearfix">
					<h4>@lang('common.pages.contact'): <span class="small" style="color:#fff;">Richard Diepenbrock</span></h4>
					<div class="col-xs-5">
						<img src="images/rjd_mug.png" alt="Richard Diepenbrock" class="img-responsive"/>
					</div>
					<div class="row col-xs-7">
						<p>
							@include('layouts.phone')
						</p>
						<p>
							@include('layouts.email')
						</p>
						<p>
							<a href="{!! asset('storage/diepenbrock_resume.doc') !!}">@lang('common.content.resumeDoc')</a><br>
							<a href="{!! asset('storage/diepenbrock_resume.pdf') !!}">@lang('common.content.resumePDF')</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-9 col-md-10">
			<p>Welcome to rjdWebsites.com, the online portfolio website for <a href="mailto:rjd@rjdwebsites.com">Richard Diepenbrock</a>.</p>
			<p>My experience in web development has spanned industries from online newspaper publishing to financial centers. I have worked on teams as small as five and larger than 20.</p>
			<p>While front end web development has been the primary focus throughout my career, I have begun to develop applications in Laravel PHP framework, and the Homestead/VirtualBox virtual machine, moving away from the Microsoft/.Net environment in which I had grown accustomed.</p>
			<p>My career arc with bullets:</p>
			<ul>
				<li>I continue to learn and use the latest technologies to build websites and applications, including bootstrap, php, wordpress, css and html.</li>
				<li>In my time at Carnegie Technologies I chose to transition from front end into a Laravel PHP developer to meet the needs of the business.</li>
				<li>As a Consultant with Catapult Systems, I was involved with a variety of projects and clients, both on-site and remote. My primary role was SharePoint branding - styling display templates, master pages and publishing pages - in CSS, HTML and XSLT for both customer-facing websites and Intranet sites.</li>
				<li>During my time with Acquinity Interactive (f/k/a ModernAd Media), I developed and maintained web sites such as AmericanCreditReport.com and Sweepstakes.com, coordinating with designers and programmers to integrate the front and back end code architectures.</li>
				<li>While at Tera US, I built and deployed client web sites in the Kentico content management system and went on-site to conduct training sessions in the same CMS. This work included using CSS, XHTML, Javascript and JQuery languages, and an understanding and ability to work with XML, .Net and C#.</li>
				<li>And have worn the title of both webmaster (Big12.net and FanaticZone.com) and project manager – during the development of a sports stats engine - at Morris DigitalWorks.</li>
			</ul>
			<p>The <a href="/eclasses/">Development area</a> contains examples of the latest coding and scripting experiments I have undertaken.</p>
		</div>

	</div>

@endsection

@section('footer')
	@parent
@endsection