# AllSecure EXCHANGE Magento™ Plugin

Accept payments in your Magento v2.4 store using AllSecure **EXCHANGE** Platform.

Current version: 1.0.1

See a fully functional WooCommerce <a href="http://demo.allsecure.xyz/cart/exchange/mage" target="_new">demo store</a> with AllSecure **EXCHANGE** as a payment gateway.

## System Requirements

The plugin targets Magento v2.4 Open Source.

The plugin itself requires the PHP ext-curl to be installed, which is already a system dependency for Magento.

## How to install extension on magento2

1. copy folder Allsecureexchange to your magento2 /app/code/ directory.
2. go to your magento2 root directory.
3. run this command :
   - php bin/magento module:enable Allsecureexchange_Allsecureexchange
   - php bin/magento setup:upgrade
   - php bin/magento setup:static-content:deploy
4. clear cache - php bin/magento cache:clean
5. setting folders and files permission.

## Plugin configuration

Goto: `Stores -> Configuration -> Sales -> Payment Methods`

## Translations

The plugin allows translating certain text blocks. 
If you like to provide translations for a certain language, you'll have to 
provide dictionary files - see `i18n` directory.

For more details on how Magento handles translations, refer to Magento's
documentation
([see "Translations overview"](https://devdocs.magento.com/guides/v2.4/frontend-dev-guide/translations/xlate.html)
and
["Use translation dictionary to customize strings"](https://devdocs.magento.com/guides/v2.4/frontend-dev-guide/translations/theme_dictionary.html)).

> Note: the plugin makes no guarantees for about backwards compatibility of
> translation keys for future releases.


## How to reindex on magento2 :
1. go to your magento2 root directory.
2. run this command : php bin/magento indexer:reindex

## How to update extension on magento2 :
1. copy file from src directory to your magento2 root directory.
2. go to your magento2 root directory.
3. run this command :
   - sudo rm -rf var/generation/*
   - sudo rm -rf pub/static/*
   - php bin/magento setup:upgrade
   - php bin/magento setup:static-content:deploy
4. setting folders and files permission.
5. clear cache - php bin/magento cache:clean

## Debugging, reporting and support

> Note: the plugin's source code is provided for free.
> No plugin support guaranteed.
The plugin has a debug mode, which generates verbose logs. The debug mode may be
enabled from plugins configuration page.

When reporting issues with the plugin, please check the following information:

1) The shop's system information:

- Information about the operation system (output of `uname -a` and `lsb_release -a`).
- Information about the PHP system (output of `php -i`)
- Information about the Magento shop (output of `bin/magento --version`)

2) the relevant logfiles (entire files are not needed - just the relevant sections)

> By default, Magento stores logs in `var/log` directory. This may be changed by
> the shop admin, though.
- debug.log
- exception.log
- payment.log
- system.log