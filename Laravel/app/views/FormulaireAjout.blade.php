<h2>Ajout de Produit!</h2>


@if ( $errors->count() > 0 )
  <p>Les erreurs suivantes sont survenues:</p>

  <ul>
	@foreach( $errors->all() as $message )
	  <li>{{ $errors->first('qte', 'La quantité doit être positive') }} </li>
	@endforeach
  </ul>
@endif

{{ Form::open(array('url' => 'epicerie/ajout')) }}

{{ Form::label('nom', 'Nom produit:') . Form::text('nom', Input::old('nom')) }}
{{ Form::label('qte', 'Quantité:') . Form::text('qte', Input::old('qte')) }}

{{ Form::submit('Ajout!') }}

{{ Form::token() . Form::close() }}