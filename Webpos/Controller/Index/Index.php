<?php

namespace Bkademy\Webpos\Controller\Index;

/**
 * Class Index
 * @package Bkademy\Webpos\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultLayout = $this->_resultPageFactory->create();
        $resultLayout->getLayout()->getUpdate()->removeHandle('default');
        return $resultLayout;

//        $staff = $this->_objectManager->create('Bkademy\Webpos\Model\Staff');
//
//        $staff->setUsername('admin');
//        $staff->setDisplayName('Admin');
//        $staff->setEmail('admin@bkademy.com');
//
//        $staff->save();
//        $this->getResponse()->setBody('success');
    }
}