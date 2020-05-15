@extends('layouts.app')
@Section('content')
<form action= "{{url('formulaire')}}" method="POST">
	{{ csrf_field()}}
	<table>
		<tr><td>Numéro</td><td><input type="" name="id"></td></tr>
		  <tr><td>Catégories</td><td><input type="text" name="Catégories"></td></tr>
		  <tr><td>Action</td><td><input type="" name="Action"></td></tr>
		*
	</table>
	<input type="submit" name="" value="Ajouter">
</form>
@endsection