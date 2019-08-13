<?php

class MDN_Antidot_Model_Export_Log extends Mage_Core_Model_Abstract {
    
    public function _construct(){
        $this->_init('Antidot/ExportLog');
    }


    /**
     * Return alst generation date for element
     * @param type $element
     * @return type
     */
    public function getLastGenerationDate($element)
    {
        $item = $this->getCollection()->addFieldToFilter('element', $element)->setOrder('begin_at', 'desc')->getFirstItem();
        return $item->getbegin_at();
    }
    
    /**
     * return last logs for the last X hours
     * @param type $sinceHour
     * @return type
     */
    public function getAllLastGeneration($sinceHour = 24)
    {
        $since = date('Y-m-d H:i:s', + $sinceHour * 3600);
        $collection = $this->getCollection()->addFieldToFilter('begin_at', array('gt' => $since));
        return $collection;
    }
    
}