<?php

namespace Bkademy\Webpos\Model\ResourceModel\Staff;

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 01-Feb-17
 * Time: 11:01 PM
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'staff_id';

    protected function _construct()
    {
        $this->_init('Bkademy\Webpos\Model\Staff', 'Bkademy\Webpos\Model\ResourceModel\Staff');
    }
}