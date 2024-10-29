<?php declare(strict_types=1);

namespace MinimalOffCanvas\Extension\Content\ProductCrossSelling;

use Shopware\Core\Content\Product\Aggregate\ProductCrossSelling\ProductCrossSellingEntity;
use Shopware\Core\Content\Product\ProductEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class CrossSellingOffcanvasEntity extends Entity
{
    use EntityIdTrait;

    protected string $crossSellingId;

    protected ?ProductCrossSellingEntity $crossSelling = null;

    public function getCrossSellingId(): string
    {
        return $this->crossSellingId;
    }

    public function setCrossSellingId(string $crossSellingId): void
    {
        $this->crossSellingId = $crossSellingId;
    }

    public function getCrossSelling(): ?ProductCrossSellingEntity
    {
        return $this->crossSelling;
    }

    public function setCrossSelling(?ProductCrossSellingEntity $crossSelling): void
    {
        $this->crossSelling = $crossSelling;
    }
}
