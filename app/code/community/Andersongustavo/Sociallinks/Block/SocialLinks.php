<?php
/**
 * Created by PhpStorm.
 * User: Anderson
 * Date: 12/04/2017
 * Time: 02:56
 */
class Andersongustavo_Sociallinks_Block_SocialLinks extends Mage_Core_Block_Template{

    protected $_helper;

    public function __construct(array $args)
    {
        $this->_helper = Mage::helper('sociallinks');
    }

    public function getSocialLinks(){

        $enabledLinks = array();

        if($this->_helper->isFacebookEnabled()){
            $enabledLinks['facebook'] = true;
        }
        if($this->_helper->isTwitterEnabled()){
            $enabledLinks['twitter'] = true;
        }
        if($this->_helper->isGoogleEnabled()){
            $enabledLinks['google'] = true;
        }
        if($this->_helper->isInstagramEnabled()){
            $enabledLinks['instagram'] = true;
        }

        return $enabledLinks;
    }
}