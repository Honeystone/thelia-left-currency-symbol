<?php
/**
 * This file belongs to the Thelia Left Currency Symbol module
 *
 * @copyright Copyright (c) 2015, Honeystone Consulting Ltd.
 */

namespace LeftCurrencySymbol\Tools;

use Thelia\Tools\MoneyFormat as BaseMoneyFormat;
use Symfony\Component\HttpFoundation\Request;

/**
 * MoneyFormat class
 *
 * @author George Palmer <george@honeystone.com>
 */
class MoneyFormat extends BaseMoneyFormat {

    public static function getInstance(Request $request) {
        return new MoneyFormat($request);
    }

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
