<?php
class BWW_BundleIDs_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Bundle Item ID"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("bundle item id", array(
                "label" => $this->__("Bundle Item ID"),
                "title" => $this->__("Bundle Item ID")
		   ));

      $this->renderLayout(); 
	  
    }
}