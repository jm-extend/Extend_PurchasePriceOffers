<?php
    /*
     * Copyright Extend (c) 2022. All rights reserved.
     * See Extend-COPYING.txt for license details.
     */

    namespace Extend\PurchasePriceOffers\Service;

    use Magento\Framework\App\Config\ScopeConfigInterface;

    class Extend
    {

        public const ENABLE_EXTEND = 'warranty/enableExtend/enable';

        /** @var ScopeConfigInterface */
        private $scopeConfig;

        /**
         * Extend constructor
         *
         * @param ScopeConfigInterface $scopeConfig
         */
        public function __construct(
            ScopeConfigInterface $scopeConfig
        ) {
            $this->scopeConfig = $scopeConfig;
        }

        /**
         * Check if Extend module is enabled
         *
         * @return boolean
         */
        public function isEnabled(): bool
        {
            return (bool)$this->scopeConfig->getValue(self::ENABLE_EXTEND);
        }
    }
