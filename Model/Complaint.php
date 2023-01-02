<?php

namespace Local\Module\Model;

use Magento\Framework\Model\AbstractModel;
use Local\Module\Model\ResourceModel\Complaint as ComplaintResource;

class Complaint extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ComplaintResource::class);
    }
}
