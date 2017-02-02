<?php
/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 03-Feb-17
 * Time: 5:30 AM
 */

namespace Bkademy\Webpos\Model;


class Session extends \Magento\Framework\Session\SessionManager
{
    public function setWebposId($staffId)
    {
        $this->storage->setData('webpos_id', $staffId);
    }

    public function getWebposId()
    {
        return $this->storage->getData('webpos_id');
    }
}

