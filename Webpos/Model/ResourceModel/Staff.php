<?php

namespace Bkademy\Webpos\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 01-Feb-17
 * Time: 10:56 PM
 */
class Staff extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('webpos_staff', 'staff_id');
    }
}