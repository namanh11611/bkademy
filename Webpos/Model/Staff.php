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

    /**
     * @param $login
     * @param $password
     * @return bool
     */
    public function authenticate($username, $password) {
        $this->loadByUsername($username);
        if (!$this->validatePassword($password))
            return false;
        return true;
    }

    /**
     * @param $username
     * @return $this
     */
    public function loadByUsername($username) {
        $staffs = $this->getCollection()->addFieldToFilter('username', $username);
        if ($id = $staffs->getFirstItem()->getId())
            $this->load($id);
        return $this;
    }

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password) {
        return $this->getPassword() == $password ? true : false;
    }
}