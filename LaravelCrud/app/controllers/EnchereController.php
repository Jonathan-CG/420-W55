<?php
class EncheresController extends BaseController {

//	public function __construct() {
//		$this->filter('before', 'csrf')->on('post');/
//	}
		
	public function ajout()
	{
		return View::make('FormulaireAjout');
	}

	public function ajoutPost()
	{
		$input = Input::all();
	
		$rules = array(
			'nom' => 'Required|Min:3|Max:80|Alpha',
			'qte'     => 'Integer|Min:1'
        );

        $validator = Validator::make($input, $rules);
	
		if ($validator->fails())
		{
			return Redirect::to('epicerie/ajout')->withInput()->withErrors($validator->messages());
		}
		else		
		{
			$epicerie = new Epicerie();
			$epicerie->item = Input::get("nom");
			$epicerie->qte = Input::get("qte");
			$epicerie->Achete = false;
			$epicerie->save();
			// Issue en HTML de pouvoir rerouter après un post
			return Redirect::to('epicerie/voir');
		}
	}


	public function liste()
	{
		$epicerie = Epicerie::all();
		return View::make('View', array('epicerie' => $epicerie));
	}
	
	public function effacer($id)
	{
		$item = Epicerie::find($id);
		$item->delete();
		//Redirect::action('EpicerieController@liste');
		return Redirect::to('epicerie/voir');
	}

    public function modifier($id)
    {
        $item = Epicerie::find($id);
        return View::make('Modifier', array('item' => $item));
    }

	
	public function modifierPost($id)
	{
		$item = Epicerie::find($id);
		
		$item->item = Input::get("nom");
		$item->qte = Input::get("qte");
		$item->save();
		return Redirect::to('epicerie/voir');
	}
}
?>