<?php

namespace Local\Module\Controller\Adminhtml\Complaint;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    public function execute(): Page
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $page->setActiveMenu('Local_Module::complaint');
        $page->getConfig()->getTitle()->prepend(__('Manage Complaints'));
        return $page;
    }
}
