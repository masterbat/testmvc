<h1>Страница показа всех товаров</h1>
<?php foreach ($list as $item):
        $title = $item['title'];
				$price = $item['price'];
				$mini_description = $item['mini_description'];
				$elseinfo = $item['elseinfo'];
				// $type = $item['type']; // не видит эту хрень!!!!!!!!!!!!!!!!!!

?>
   <div class="single-item">
                <h3 class="akum-title"><a href="#"><span><?=$title?></span></a></h3>
                <p><?=$mini_description?></p>
                <p><?=$price?></p>
                <?php if(!empty($elseinfo)):?>
                <p class="akum-else-info_tok" style="display: inline-block"><?=$elseinfo?></p>
                <?php endif;?>
   </div> 




<?endforeach;?>