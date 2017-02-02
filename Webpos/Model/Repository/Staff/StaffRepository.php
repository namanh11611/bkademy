<?php

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 03-Feb-17
 * Time: 5:22 AM
 */

namespace Bkademy\Webpos\Model\Repository\Staff;

class StaffRepository implements \Bkademy\Webpos\Api\Staff\StaffRepositoryInterface
{
    protected $session;

    protected $request;

    protected $permissionHelper;

    /**
     * StaffManagement constructor.
     * @param \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone
     * @param \Magestore\Webpos\Model\WebPosSession $webPosSession
     * @param \Magestore\Webpos\Model\Staff $staff
     */
    public function __construct(
        \Bkademy\Webpos\Model\Session $session,
        \Bkademy\Webpos\Helper\Permission $permission,
        \Magento\Framework\App\RequestInterface $request
    )
    {
        $this->session = $session;
        $this->permissionHelper = $permission;
        $this->request = $request;
    }

    /**
     * @param $username
     * @param $password
     * @return mixed
     */
    public function login($username, $password)
    {
        if ($username && $password) {
            try {
                $staffId = $this->permissionHelper->login($username, $password);
                if ($staffId) {
                    $this->session->setWebposId($staffId);
                    return true;
                } else {
                    return false;
                }
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function logout()
    {
        $this->session->setWebposId(null);
        return true;
    }
}