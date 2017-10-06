<?php
/**
* 
*/
class News2 
{
	
	public static function getList(){ // функция тянет все записи из базы
		global $connection; 
    $sql = 'SELECT id, title, img, category, podcategory, razdel, podrazdel,
                                 brand,  voltage, amperage, capicity, mini_description,
                                 description, mini_features, features, type, price, seo_words,
                                 seo_description, new, leader, visible, elseinfo, Type_title
            FROM catalog';
    $list = [];
   	$test = mysqli_query($connection, $sql);
		while ($show = mysqli_fetch_assoc($test)){
			$list [] = [
				'title' => $show['title'],
				'price' => $show['price'],
				'mini_description' => $show['mini_description'],
				'elseinfo' => $show['elseinfo'],
				'type_title' => $show['Type_title']
			];
    }
    //освобождаем память

    mysqli_free_result($test);
    return $list; // возвращаем массив объектов типа All (класс)

	}
}