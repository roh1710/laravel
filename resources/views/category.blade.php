<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>laravel</title>
</head>
<body>
<section style="padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{!! $dataTable->table()!!}
	</div>
</div>
</div>
</section>
{!! $dataTable->scripts() !!}
</body>
</html>