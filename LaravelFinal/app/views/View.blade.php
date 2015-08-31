<h2>Liste de Produit!</h2>

{{ HTML::linkAction('EpicerieController@ajout', 'Ajouter un item'); }}
@foreach ($epicerie as $produit)
	<p>{{ $produit->item}} x {{$produit->qte}} {{ HTML::linkAction('EpicerieController@modifier', 'Modifier',  array($produit->id)) }}	{{ HTML::linkAction('EpicerieController@effacer', 'Effacer',  array($produit->id)) }}
@endforeach