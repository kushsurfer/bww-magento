<?php
class BWW_BundleApi_Model_Api extends Mage_Api_Model_Resource_Abstract
{

    // public function createSelectionLink($items, $selectionRawData, $productId, $storeid)
    // {

    //     $selections = array();

    //     //check if product id in selection data is valid
    //     $optionProduct = Mage::getModel('catalog/product')->load($selectionRawData['product_id']);

    //     if(!$optionProduct->getId()){
    //         throw new Exception('Selection product provided does not reference a valid product');
    //     }

    //     $selections[] = $selectionRawData;

    //     $product   = Mage::getModel('catalog/product')->setStoreId($storeid);
    //     $product->load($productId);

    //     if (!$product->getId()) {
    //         //bail
    //         throw new Exception('Product loaded does not exist');
    //     }

    //     Mage::register('product', $product);
    //     Mage::register('current_product', $product);

    //     $product->setCanSaveConfigurableAttributes(false);
    //     $product->setCanSaveCustomOptions(true);

    //     $product->setBundleOptionsData($items);
    //     $product->setBundleSelectionsData($selections);
    //     $product->setCanSaveCustomOptions(true);
    //     $product->setCanSaveBundleSelections(true);

    //     $product->save();
    // }



    public function listitems(){
        echo 'adsfas';
    }
}
