<?php declare(strict_types=1);

namespace LokiCheckout\DotdigitalgroupSms\Plugin;

use Composer\InstalledVersions;
use Dotdigitalgroup\Email\Model\Connector\Module;

class ModulePlugin
{
    public const MODULE_DESCRIPTION = 'Loki Checkout Compatibility module for Dotdigitalgroup_Sms';

    /**
     * Before fetch active module details
     *
     * @param Module $module
     * @param array $modules
     * @return array
     */
    public function beforeFetchActiveModules(Module $module, array $modules = [])
    {
        $modules[] = [
            'name' => self::MODULE_DESCRIPTION,
            'version' => InstalledVersions::getPrettyVersion('loki-checkout/magento2-dotdigitalgroup-sms')
        ];
        return [
            $modules
        ];
    }
}
