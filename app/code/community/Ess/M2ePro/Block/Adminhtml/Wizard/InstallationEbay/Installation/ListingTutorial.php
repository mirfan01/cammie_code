<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

class Ess_M2ePro_Block_Adminhtml_Wizard_InstallationEbay_Installation_ListingTutorial
    extends Ess_M2ePro_Block_Adminhtml_Wizard_InstallationEbay_Installation
{
    //########################################

    protected function getStep()
    {
        return 'listingTutorial';
    }

    //########################################

    protected function _beforeToHtml()
    {
        // Set header text
        // ---------------------------------------
        $this->_headerText = Mage::helper('M2ePro')->__('What Is An M2E Pro Listing?');
        // ---------------------------------------

        // ---------------------------------------
        return parent::_beforeToHtml();
    }

    //########################################
}