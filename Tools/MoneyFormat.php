<?php
/**
 * This file belongs to the Thelia Left Currency Symbol module
 *
 * @copyright Copyright (c) 2015, Honeystone Consulting Ltd.
 */

namespace LeftCurrencySymbol\Smarty\Plugins;

use Thelia\Tools\MoneyFormat as BaseMoneyFormat;

/**
 * MoneyFormat class
 *
 * @author George Palmer <george@honeystone.com>
 */
class MoneyFormat extends BaseMoneyFormat {

    public function format(
        $number,
        $decimals = null,
        $decPoint = null,
        $thousandsSep = null,
        $symbol = null
    ) {
        $number = parent::format(
            $number,
            $decimals,
            $decPoint,
            $thousandsSep
        );

        if ($symbol !== null) {
            $number = $symbol . $number;
        }

        return $number;
    }
}
