<?php

namespace AllsecureExchange\AllsecureExchange\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use AllsecureExchange\AllsecureExchange\Helper\Data;

final class ConfigProvider implements ConfigProviderInterface
{
    const CREDITCARD_CODE = 'allsecureexchange_creditcard';
    const CC_VAULT_CODE = 'allsecureexchange_cc_vault';

    /**
     * @var Data
     */
    private $helper;

    /**
     * ConfigProvider constructor.
     * @param Data $helper
     */
    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    /**
     * @return \array[][]
     */
    public function getConfig(): array
    {
        return [
            'payment' => [
                self::CREDITCARD_CODE => [
                    'seamless' => $this->helper->getPaymentConfigDataFlag(
                        'seamless',
                        self::CREDITCARD_CODE
                    ),
                    'integration_key' => $this->helper->getPaymentConfigData(
                        'integration_key',
                        self::CREDITCARD_CODE
                    ),
                    'three_d_secure' => $this->helper->getPaymentConfigData(
                        'use_3dsecure',
                        self::CREDITCARD_CODE
                    ),
                    'paymentJsUrl' => $this->helper->getHostUrl(),
                    'publicTokenKey' => $this->helper->getPaymentConfigData(
                        'integration_key',
                        self::CREDITCARD_CODE
                    ),
                    'vaultEnable' => true,
                    'ccVaultCode' => self::CC_VAULT_CODE
                ]
            ],
        ];
    }
}
