<?php  
/**
* 
*/
class SaludoController extends Controller
{
	public function actionIndex()
	{
		$saludo="hola que tal";
		$this->render('index',array('saludo'=>$saludo));
		
	}
	
}
?>