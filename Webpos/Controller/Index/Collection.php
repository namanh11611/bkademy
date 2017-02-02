<?php
/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 01-Feb-17
 * Time: 11:32 PM
 */

namespace Bkademy\Webpos\Controller\Index;

use Magento\Framework\App\ResponseInterface;

class Collection extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect(['name', 'price', 'image'])
//            ->addAttributeToFilter('name', 'Fusion Backpack')
            ->addAttributeToFilter('entity_id', array('in' => array(210, 211, 212)))
            ->setPageSize(10,1);
        $output = '';

        $productCollection->setDataToAll('price', 20);
        $productCollection->save();

        foreach ($productCollection as $product) {
            $output .= \Zend_Debug::dump($product->debug(), null, false);
        }
        $this->getResponse()->setBody($output);
    }
}