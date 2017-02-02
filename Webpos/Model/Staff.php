<?php

namespace Bkademy\Webpos\Model;

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 01-Feb-17
 * Time: 10:59 PM
 */
class Staff extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Bkademy\Webpos\Model\ResourceModel\Staff');
    }
}