<h2>Ajout d'utilisateur!</h2>

@if ( $errors->count() > 0 )
  <p>Les erreurs suivantes sont survenues:</p>

  <ul>
	@foreach( $errors->all() as $message )
	  <li>{{ $errors->first('Jetons', 'La quantité doit être positive') }} </li>
	  <li>{{ $errors->first('Email', "Le courriel doit être unique") }} </li>
	@endforeach
  </ul>
@endif

{{ Form::open(array('url' => 'admin')) }}

{{ Form::label('Email', 'Email:') . Form::text('Email', Input::old('Email')) }} <br />
{{ Form::label('Password', 'Mot de Passe:') . Form::password('Password', Input::old('Password')) }} <br />
{{ Form::label('Jetons', 'Jetons:') . Form::text('Jetons', Input::old('Jetons')) }} <br />


{{ Form::submit('Ajout!') }}

{{ Form::token() . Form::close() }}

