<!DOCTYPE html>
<html>
<head>
	<title>Instituto Nacional de Investigaciones Agricolas</title>
	<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-datepicker/css/datepicker.css">
	<link rel="stylesheet" href="/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css">
	<link rel="stylesheet" href="/plugins/bootstrap-fileinput/css/fileinput.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-modal/css/bootstrap-modal.css">
	<link rel="stylesheet" href="/plugins/bootstrap-navbar-dropdowns/css/navbar.css">
	<link rel="stylesheet" href="/plugins/bootstrap-select/bootstrap-select.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-summernote/summernote.css">
	<link rel="stylesheet" href="/plugins/bootstrap-switch/css/bootstrap-switch.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-toastr/toastr.min.css">
	<link rel="stylesheet" href="/plugins/bootstrap-touchspin/bootstrap-touchspin.min.css">
	<style type="text/css">
		.dropdown-submenu {
		    position: relative;
		}

		.dropdown-submenu>.dropdown-menu {
		    top: 0;
		    left: 100%;
		    margin-top: -6px;
		    margin-left: -1px;
		    -webkit-border-radius: 0 6px 6px 6px;
		    -moz-border-radius: 0 6px 6px;
		    border-radius: 0 6px 6px 6px;
		}

		.dropdown-submenu:hover>.dropdown-menu {
		    display: block;
		}

		.dropdown-submenu>a:after {
		    display: block;
		    content: " ";
		    float: right;
		    width: 0;
		    height: 0;
		    border-color: transparent;
		    border-style: solid;
		    border-width: 5px 0 5px 5px;
		    border-left-color: #ccc;
		    margin-top: 5px;
		    margin-right: -10px;
		}

		.dropdown-submenu:hover>a:after {
		    border-left-color: #fff;
		}

		.dropdown-submenu.pull-left {
		    float: none;
		}

		.dropdown-submenu.pull-left>.dropdown-menu {
		    left: -100%;
		    margin-left: 10px;
		    -webkit-border-radius: 6px 0 6px 6px;
		    -moz-border-radius: 6px 0 6px 6px;
		    border-radius: 6px 0 6px 6px;
		}
	</style>
</head>
<body>
	<header>
		<div class="row">
		    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<img src="/images/header.png" alt="" class="col-md-12">
		    </div>
		</div>
		<div class="row">
		    <nav></nav>
		</div>
	</header>
	<section id="container">
		@yield('content')
	</section>
	<script src="/plugins/jquery.min.js"></script>
	<script src="/plugins/moment.min.js"></script>
	<script src="/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js"></script>
	<script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>
	<script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.es.js"></script>
	<script src="/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js"></script>
	<script src="/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
	<script src="/plugins/bootstrap-fileinput/js/fileinput_locale_es.js"></script>
	<script src="/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
	<script src="/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
	<script src="/plugins/bootstrap-navbar-dropdowns/js/navbar.js"></script>
	<script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="/plugins/bootstrap-summernote/summernote.min.js"></script>
	<script src="/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="/plugins/bootstrap-toastr/toastr.min.js"></script>
	<script src="/plugins/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
	<script src="/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
</body>
</html>