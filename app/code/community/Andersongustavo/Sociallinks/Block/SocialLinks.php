<?php

/**
 * @package     Andersongustavo_Sociallinks
 * @author      Anderson Gustavo Rodrigues Alves - anderson.quata@hotmail.com
 * @copyright   Anderson Gustavo Rodrigues Alves - anderson.quata@hotmail.com
 * @license     https://opensource.org/licenses/AFL-3.0  Academic Free License 3.0 | Open Source Initiative
 */

class Andersongustavo_Sociallinks_Block_SocialLinks extends Mage_Core_Block_Template{

    public function isEnabled($social){
        return Mage::getStoreConfig('andersongustavo_options/'.$social.'/andersongustavo_select');
    }

    public function getOrder($social){
        return Mage::getStoreConfig('andersongustavo_options/'.$social.'/andersongustavo_text');
    }

    public function getHeadText(){
        return Mage::getStoreConfig('andersongustavo_options/head/andersongustavo_text');
    }

    public function getProductName(){
        return urlencode(Mage::registry('current_product')->getName());
    }

    public function getProductUrl(){
        return urlencode(Mage::registry('current_product')->getProductUrl());
    }

    public function getProductDescription(){
        return urlencode(Mage::registry('current_product')->getShortDescription());
    }

    public function getProductImage(){
        return urlencode(Mage::registry('current_product')->getProductImage());
    }
}