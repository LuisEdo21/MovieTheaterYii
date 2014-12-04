<?php 
	class CarteleraController extends Controller
	{
		public function actionIndex()
		{
			$model=Peliculas::model()->findAll(); 
			$twitter="@codigofacilito";
			$this->render("index",array("model"=>$model, "twitter"=>$twitter));
		}
	}
 ?>