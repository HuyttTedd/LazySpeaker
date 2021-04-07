<?php
namespace Mageplaza\LazySpeaker\Block;
class ProcessForm extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getFormAction()
    {
        return $this->getUrl('lazyspeaker/index/save', ['_secure' => true]);
    }
}
