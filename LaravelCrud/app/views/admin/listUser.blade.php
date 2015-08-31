<h2>Liste d'utilisateur</h2>

{{ HTML::linkAction('AdminController@create', 'Ajouter un utilisateur'); }}

@foreach ($users as $user)
	<p>{{ $user->Email}} --- {{$user->Jetons}} {{ HTML::linkAction('AdminController@edit', 'Editer',  array($user->id)) }}	
@endforeach