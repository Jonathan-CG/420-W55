<h2>Modification du Produit!</h2>

{{ Form::open(array('url' => 'epicerie/modifier/' . $item->id)) }}

{{ Form::label('nom', 'Nom produit:') . Form::text('nom', $item->item) }}
{{ Form::label('qte', 'Quantité:') . Form::text('qte', $item->qte) }}

{{ Form::submit('Modifier!') }}

{{ Form::token() . Form::close() }}