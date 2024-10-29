<?php

namespace MinimalOffCanvas\Extension\Content\ProductCrossSelling;

use Shopware\Core\Content\Product\Aggregate\ProductCrossSelling\ProductCrossSellingDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CrossSellingOffcanvasExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new OneToOneAssociationField('crossSellingOffcanvas', 'id', 'product_cross_selling_id', CrossSellingOffcanvasDefinition::class, true))->addFlags(new ApiAware())
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductCrossSellingDefinition::class;
    }
}
