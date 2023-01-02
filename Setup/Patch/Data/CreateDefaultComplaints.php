<?php declare(strict_types=1);

namespace Local\Module\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CreateDefaultComplaints implements DataPatchInterface
{
    private $table = 'module_complaint';
    public function __construct(private ModuleDataSetupInterface $moduleDataSetup)
    {
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $complaints = [
            ['complaint_text' => 'Wrong t-shirt size', 'customer_id' => 1],
            ['complaint_text' => 'Slow delivery', 'customer_id' => 1],
            ['complaint_text' => 'Wong t-shirt colour', 'customer_id' => 1]
        ];

        $this->moduleDataSetup->getConnection()->insertMultiple($this->table, $complaints);

        return $this;
    }
}
