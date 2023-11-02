<?php
namespace Extend\PurchasePriceOffers\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Js extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ScopeConfigInterface $scopeConfig
 )
    {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }
}
