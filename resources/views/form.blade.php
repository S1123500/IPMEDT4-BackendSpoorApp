<!DOCTYPE html>
<html>
<head>
<title>insert</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>naam</td>
	<td><input type='text' name='name' /></td>
	<tr>
	<td>coordinaten</td>
	<td><input type="text" name='coordinaten'/></td>
	</tr>
	<tr>
	<td>beschrijving</td>
	<td><input type="text" name='beschrijving'/></td>
	</tr>
    <tr>
	<td>img</td>
	<td><input type="text" name='foto'/></td>
	</tr>
    <tr>
	<td>gehaald</td>
	<td><input type="text" name='gehaald'/></td>
	</tr>

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "voeg locatie toe"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>