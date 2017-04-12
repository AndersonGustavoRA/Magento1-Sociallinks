<?php
/**
 * Created by PhpStorm.
 * User: Anderson
 * Date: 12/04/2017
 * Time: 02:52
 */

class Andersongustavo_Sociallinks_Helper_Data extends Mage_Core_Helper_Abstract{
    private function getConfig($path){
        return Mage::getStoreConfig('andersongustavo_options/'.$path.'/andersongustavo_select', Mage::app()->getStore());
    }

    public function isFacebookEnabled(){
        return $this->getConfig("andersongustavo_facebook");
    }

    public function isTwitterEnabled(){
        return $this->getConfig("andersongustavo_twitter");
    }

    public function isGoogleEnabled(){
        return $this->getConfig("andersongustavo_google");
    }

    public function isInstagramEnabled(){
        return $this->getConfig("andersongustavo_instagram");
    }
}