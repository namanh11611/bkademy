<?php

namespace Bkademy\Webpos\Ui\Component\Listing\Column;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 02-Feb-17
 * Time: 7:35 PM
 */
class Status implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => __('Enabled'), 'value' => 1],
            ['label' => __('Disabled'), 'value' => 2]
        ];
    }
}