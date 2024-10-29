<?php declare(strict_types=1);

namespace MinimalOffCanvas\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * @internal
 */
#[Package('core')]
class Migration1729599977CrossSellingOffcanvas extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1729599977;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `cross_selling_offcanvas` (
    `id` BINARY(16) NOT NULL,
    `product_cross_selling_id` BINARY(16) NULL,
    `show` TINYINT(1) COLLATE utf8mb4_unicode_ci,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    PRIMARY KEY (`id`),
    KEY `fk.cross_selling_offcanvas.product_cross_selling_id` (`product_cross_selling_id`),
    CONSTRAINT `fk.cross_selling_offcanvas.product_cross_selling_id` FOREIGN KEY (`product_cross_selling_id`) REFERENCES `product_cross_selling` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;
        $connection->executeStatement($sql);

    }
}
