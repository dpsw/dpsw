<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$user = User::findFirst();
    	echo $user->getUserId(),'<br>';
    	
  //   	$product = new Product();
  //   	$product->setName('test product');
		// $product->setShopId(1);
  //   	$product->save();

    	$shops = [];

    	foreach ($user->getShop() as $key => $shop) {
			$shops[$key] =  $shop;
    	}
    	
    	$this->view->setVar("Shops", $shops);
 		
    }

}

