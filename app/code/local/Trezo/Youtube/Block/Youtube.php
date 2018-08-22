<?php

class Trezo_Youtube_Block_Youtube
 extends Mage_Core_Block_Template
 implements Mage_Widget_Block_Interface
{
  protected function _toHtml()
  {

    $height = $this->getData('height') ? $this->getData('height') : '300';
    $width = $this->getData('width') ? $this->getData('width') : '300';
    $code = $this->getData('code');

    $html = '<iframe src="http://www.youtube.com/embed/' . $code . '"
   width="' . $width . '" height="'. $height . '" frameborder="0" allowfullscreen></iframe>';

   $html .= "<br/>Microtime: " . microtime();
   return $html;
 }

    public function getCacheKey()
    {
        $cacheKey = 'youtube';
        if (Mage::getSingleton('customer/session')->isLoggedIn()) {
            $customer = Mage::getSingleton('customer/session')->getCustomer();
            $cacheKey .= $customer->getId();
        }

        return $cacheKey;
    }

    public function getCacheLifetime()
    {
        return 300; // seconds
    }

    public function getCacheTags()
    {
        return array('youtube');
    }
}
