<?php

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 03-Feb-17
 * Time: 5:18 AM
 */

namespace Bkademy\Webpos\Api\Staff;

interface StaffRepositoryInterface
{
    /**
     * @param $username
     * @param $password
     * @return mixed
     */
    public function login($username, $password);

    /**
     * @return mixed
     */
    public function logout();

}