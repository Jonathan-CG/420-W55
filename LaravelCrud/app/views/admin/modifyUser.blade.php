<h2>Modification d'utilisateur!</h2>

@if ( $errors->count() > 0 )
  <p>Les erreurs suivantes sont survenues:</p>

  <ul>
	@foreach( $errors->all() as $message )
	  <li>{{ $errors->first('Jetons', 'La quantité doit être positive') }} </li>
	  <li>{{ $errors->first('Email', "Le courriel doit être unique") }} </li>
	@endforeach
  </ul>
@endif

{{ Form::open(array('url' => URL::to('admin/' . $user->id), 'method' => 'PUT')) }}

{{ Form::label('Email', 'Email:') . Form::text('Email', $user->Email) }} <br />
{{ Form::label('Password', 'Mot de Passe:') . Form::password('Password') }} <br />
{{ Form::label('Jetons', 'Jetons:') . Form::text('Jetons', $user->Jetons) }} <br />


{{ Form::submit('Modifier') }}

{{ Form::token() . Form::close() }}

{{ Form::open(['method' => 'DELETE', 'action' => ['AdminController@destroy', $user->id]]) }}
    <button type="submit">Delete</button>
{{ Form::close() }}