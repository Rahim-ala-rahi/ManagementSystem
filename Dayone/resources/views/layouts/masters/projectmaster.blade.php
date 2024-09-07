<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- METE DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 5 dashboard, template admin bootstrap 5 , simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard"/>

		<!-- TITLE -->
		<title>Dayone - Larvel Multipurpose Admin & Dashboard Template</title>

		@include('layouts.components.styles')

	</head>

	<body class="app sidebar-mini ltr">

		<!--- GLOBAL-LOADER -->
		<div id="global-loader" >
			<img src="{{asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!--- END GLOBAL-LOADER -->

		<div class="page">
			<div class="page-main">

				@include('layouts.components.app-header')

                @include('layouts.components.app-sidebar')

				<div class="app-content main-content">
					<div class="side-app main-container">
						@yield('content')
					</div>
				</div><!-- end app-content-->
			</div>

			@include('layouts.components.footer')

            @include('layouts.components.right-sidebar')

			@include('layouts.components.modal')

			@yield('modals')
		</div>

		@include('layouts.components.scripts')

	</body>
</html>