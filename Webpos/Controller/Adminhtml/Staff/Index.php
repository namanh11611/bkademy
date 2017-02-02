<?php

namespace Bkademy\Webpos\Controller\Adminhtml\Staff;

use Magento\Framework\App\ResponseInterface;

/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 26-Jan-17
 * Time: 10:56 AM
 */
class Index extends \Bkademy\Webpos\Controller\Adminhtml\Staff
{
    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend(__('Staff Management'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Bkademy_Webpos::staff');
    }
}