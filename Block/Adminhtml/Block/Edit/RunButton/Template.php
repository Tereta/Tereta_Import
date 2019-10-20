<?php
namespace Tereta\Import\Block\Adminhtml\Block\Edit\RunButton;

use \Magento\Ui\Component\Control\Button;

/**
 * Tereta\Import\Block\Adminhtml\Block\Edit\RunButton\Template
 *
 * Class Template
 * @package Tereta\Import\Block\Adminhtml\Block\Edit\RunButton
 */
class Template extends Button
{
    protected function getTemplatePath()
    {
        return 'Tereta_Import::control/button/import.phtml';
    }
}
