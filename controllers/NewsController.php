<?php
include_once 'models/news2.php';
class NewsController{

	public function actionList(){
		$list = News2::getList();
		include_once 'view/news/list.php';
		}
	  
	



	public function actionOdna(){
			  include_once 'view/news/odna.php';

	}

}
