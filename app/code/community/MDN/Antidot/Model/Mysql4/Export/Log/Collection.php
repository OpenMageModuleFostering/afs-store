<?php
 
class MDN_Antidot_Model_Mysql4_Export_Log_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('Antidot/ExportLog');
    }
    
  
}