<?php
/**
 * This file belongs to the Thelia Left Currency Symbol module
 *
 * @copyright Copyright (c) 2015, Honeystone Consulting Ltd.
 */

namespace LeftCurrencySymbol\Smarty\Plugins;

use TheliaSmarty\Template\Plugins\Format;
use LeftCurrencySymbol\Tools\MoneyFormat;

/**
 * FormatLeftSymbol class
 *
 * @author George Palmer <george@honeystone.com>
 */
class FormatLeftSymbol extends Format {

    public function formatMoney($params, $template = null) {

        $number = $this->getParam($params, 'number', false);

        if ($number === false || $number === '') {
            return '';
        }

        return MoneyFormat::getInstance($this->request)->format(
            $number,
            $this->getParam($params, 'decimals', null),
            $this->getParam($params, 'dec_point', null),
            $this->getParam($params, 'thousands_sep', null),
            $this->getParam($params, 'symbol', null)
        );
    }
}
