<?php

namespace CoreShop2VueStorefrontBundle\Bridge\DocumentMapper;

use CoreShop2VueStorefrontBundle\Bridge\DocumentMapperInterface;
use CoreShop2VueStorefrontBundle\Document\Attribute;
use CoreShop2VueStorefrontBundle\Repository\AttributeRepository;
use Pimcore\Model\DataObject\ClassDefinition;

class DocumentAttributeMapper extends AbstractMapper implements DocumentMapperInterface
{
    const SELECT = 'select';

    /** @var AttributeRepository */
    private $attributeRepository;

    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function supports($objectOrClass): bool
    {
        return is_a($object, ClassDefinition\Data::class, true);
    }

    /**
     * @param ClassDefinition\Data $fieldDefinition
     *
     * @return Attribute
     */
    public function mapToDocument(object $fieldDefinition, object $attribute, ?string $language = null): Attribute
    {
        $id = $fieldDefinition->id;

        $attribute->setId($id);
        $attribute->setIsWyswigEnabled(self::BOOLEAN_FALSE);
        $attribute->setIsHtmlAllowedOnFront(self::BOOLEAN_FALSE);
        $attribute->setUsedForSortBy(self::BOOLEAN_FALSE);
        $attribute->setIsFilterable(self::BOOLEAN_FALSE);
        $attribute->setIsFilterableInSearch(self::BOOLEAN_FALSE);
        $attribute->setIsUsedInGrid(self::BOOLEAN_FALSE);
        $attribute->setIsVisibleInGrid(self::BOOLEAN_FALSE);
        $attribute->setIsFilterableInGrid(self::BOOLEAN_FALSE);
        $attribute->setPosition(self::ATTR_POSITION);
        $attribute->setScope(self::ATTR_SCOPE);
        $attribute->setAttributeId($id);
        $attribute->setAttributeCode($fieldDefinition->getName());
        $attribute->setFrontendInput(self::ATTR_TYPE);
        $attribute->setEntityTypeId(self::ATTR_ENTITY_TYPE_ID);
        $attribute->setIsRequired(self::BOOLEAN_FALSE);
        $attribute->setFrontedLabel($fieldDefinition->getTitle());

        $this->setOptions($attribute, $fieldDefinition);

        $attribute->setIsUserDefined(self::BOOLEAN_FALSE);
        $attribute->setBackendType(self::ATTR_BACKEND_TYPE_VARCHAR);

        return $attribute;
    }

    public function getDocumentClass(): string
    {
        return Attribute::class;
    }

    /**
     * @param Attribute $attribute
     * @param $fieldDefinition
     */
    private function setOptions(Attribute $attribute, $fieldDefinition): void
    {
        if ($fieldDefinition->fieldtype == self::SELECT) {
            $options = [];
            foreach ($fieldDefinition->options as $option) {
                $options[] = ['label' => $option['key'], 'value' => $option['value']];
            }
            $attribute->setOptions($options);
        }
    }
}
