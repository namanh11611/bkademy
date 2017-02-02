<?php

namespace Bkademy\Webpos\Controller\Index;

/**
 * Class Index
 * @package Bkademy\Webpos\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $staff = $this->_objectManager->create('Bkademy\Webpos\Model\Staff');

        $staff->setUsername('admin');
        $staff->setDisplayName('Admin');
        $staff->setEmail('admin@bkademy.com');

        $staff->save();
        $this->getResponse()->setBody('success');
    }
}