<?php

namespace Local\Module\Model\ResourceModel\Complaint;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Local\Module\Model\ResourceModel\Complaint as ComplaintResource;
use Local\Module\Model\Complaint;

class Collection extends AbstractCollection
{
    protected function _construct(){
        $this->_init(Complaint::class, ComplaintResource::class);
    }
}
