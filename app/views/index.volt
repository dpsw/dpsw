<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
		{{ stylesheet_link('css/bootstrap.min.css') }}
		{{ stylesheet_link('css/bootstrap-theme.min.css') }}
		{{ stylesheet_link('css/style.css') }}
	</head>
	<body>
		{{ content() }}
		
		{{ javascript_include('js/bootstrap.min.js') }}
	</body>
</html>