<?php
    namespace Invigorate\Discount\Helper;
    class Data extends \Magento\Framework\App\Helper\AbstractHelper
    {
        protected $_storeManager;
        public function __construct(
            \Magento\Framework\App\Helper\Context $context
            )
        {
            parent::__construct($context);
        }
        public function getStatus()
        {
            return $this->scopeConfig->getValue(
                'discount/active_display/scope',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }
    }
?>