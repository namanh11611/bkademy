<?php
/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 03-Feb-17
 * Time: 12:53 AM
 */

namespace Bkademy\Webpos\Block\Adminhtml\Staff\Edit;


class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    protected function _prepareForm()
    {
        $form = $this->_formFactory->create(
            array(
                'data' => array(
                    'id' => 'edit_form',
                    'action' => $this->getUrl('*/*/save', ['store' => $this->getRequest()->getParam('store')]),
                    'method' => 'post',
                    'enctype' => 'multipart/form-data'
                )
            )
        );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}