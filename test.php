<?php
class test{
    public function beforeCreate()
    {
        //Set the creation date
        $this->created_time = date('Y-m-d H:i:s');
    }

    public function beforeUpdate()
    {
        //Set the modification date
        $this->last_update = date('Y-m-d H:i:s');
    }

    public function shlack()
    {
        $this->belongsTo("seller_id", "User", "user_id");
    }
}

/////////// http://urbanreboundingstore.mojocheckout.com


try{
$cart = Mage::getModel('checkout/cart')->getQuote();
$_skuBig = 'ADDSHIP6';
$_catalog = Mage::getModel('catalog/product');
$_productIdBig = $_catalog->getIdBySku($_skuBig);
$_skuSmall = 'SURCHARGE';
$_productIdSmall = $_catalog->getIdBySku($_skuSmall);
$cart_2 = Mage::getSingleton('checkout/cart');
$cart_2->init();
$exemptProductsSku = array();
$update_card = false;
foreach ($cart->getAllItems() as $item) {
    $exemptProductsSku[] = $item->getProduct()->getSku();
}
//$country = $this->getRequest()->getPost('billing_country_id', false);
$country = $data['country_id'];
if($country === 'CA'){

        $flag_big_product = in_array('URHMST-1P', $exemptProductsSku);
        if( $flag_big_product )
        {
            if(!in_array($_skuBig, $exemptProductsSku)){
                $cart_2->addProduct($_productIdBig, 1);
                if (in_array($_skuSmall, $exemptProductsSku))
                {
                    foreach( Mage::getSingleton('checkout/session')->getQuote()->getItemsCollection() as $item ){
                        if($item->getProduct()->getSku()== $_skuSmall) {
                            Mage::getSingleton('checkout/cart')->removeItem( $item->getId() )->save();
                        }
                    }
                }
                $update_card = true;
            }    
        }

        if($flag_big_product === false)
        {
            if(!in_array($_skuSmall, $exemptProductsSku))
            {
                $cart_2->addProduct($_productIdSmall, 1);
                if (in_array($_skuBig, $exemptProductsSku))
                {
                    foreach( Mage::getSingleton('checkout/session')->getQuote()->getItemsCollection() as $item ){
                        if($item->getProduct()->getSku()== $_skuBig) {
                            Mage::getSingleton('checkout/cart')->removeItem( $item->getId() )->save();
                        }
                    }
                }
                $update_card = true;
            }
        }
}

if($country === 'US')
{
    if (in_array($_skuBig, $exemptProductsSku)){
        foreach( Mage::getSingleton('checkout/session')->getQuote()->getItemsCollection() as $item ){
            if($item->getProduct()->getSku()== $_skuBig) {
                Mage::getSingleton('checkout/cart')->removeItem( $item->getId() )->save();
            }
        }
        $update_card = true;
    }
    if (in_array($_skuSmall, $exemptProductsSku)){
        foreach( Mage::getSingleton('checkout/session')->getQuote()->getItemsCollection() as $item ){
            if($item->getProduct()->getSku()== $_skuSmall) {
                Mage::getSingleton('checkout/cart')->removeItem( $item->getId() )->save();
            }
        }
        $update_card = true;      
    }
}

if($update_card)
{
    $cart_2->save();
    Mage::getSingleton('checkout/session')->setCartWasUpdated(true);
    Mage::getSingleton('core/session')->setCartWasUpdated(true);
}
}
catch(Exception $e)
{
    Mage::logException($e);
}



////////////////////////////////// CSS-12539   Sales Rep

$installer = $this;
$installer->startSetup();

$setup = Mage::getModel('customer/entity_setup' , 'core_setup');

$setup->addAttribute('customer', 'sales_rep', array(
    'type' => 'text',
    'input' => 'text',
    'label' => 'Sales Rep',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 0,
    'default' => '',
    'source' => NULL,
));

$installer->endSetup();