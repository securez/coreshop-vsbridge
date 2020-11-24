<?php

namespace CoreShop2VueStorefrontBundle\Document;

use Doctrine\Common\Collections\ArrayCollection;
use ONGR\ElasticsearchBundle\Annotation as ES;

/**
 * @ES\Index()
 * @ES\ObjectType()
 */
class Attribute
{
    // @codingStandardsIgnoreStart
    /** @ES\Id() */
    public $_id;
    // @codingStandardsIgnoreEnd

    /** @ES\Property(type="integer") */
    public $id;

    /** @ES\Property(type="keyword") */
    public $attributeCode;

    /** @ES\Property(type="text") */
    public $attributeModel;

    /** @ES\Property(type="text") */
    public $backendModel;

    /** @ES\Property(type="text") */
    public $backendType;

    /** @ES\Property(type="text") */
    public $backendTable;

    /** @ES\Property(type="text") */
    public $frontendModel;

    /** @ES\Property(type="text") */
    public $frontendInput;

    /** @ES\Property(type="text") */
    public $frontendLabel;

    /** @ES\Property(type="text") */
    public $frontendClass;

    /** @ES\Property(type="text") */
    public $sourceModel;

    /** @ES\Property(type="boolean") */
    public $isRequired;

    /** @ES\Property(type="boolean") */
    public $isUserDefined;

    /** @ES\Property(type="text") */
    public $defaultValue;

    /** @ES\Property(type="text") */
    public $defaultFrontendLabel;

    /** @ES\Property(type="text") */
    public $isUnique = "0";

    /** @ES\Property(type="text") */
    public $note;

    /** @ES\Property(type="integer") */
    public $attributeId;

    /** @ES\Property(type="text") */
    public $frontendInputRenderer;

    /** @ES\Property(type="boolean") */
    public $isGlobal;

    /** @ES\Property(type="boolean") */
    public $isVisible = false;

    /** @ES\Property(type="text") */
    public $isSearchable = "0";

    /** @ES\Property(type="boolean") */
    public $isFilterable;

    /** @ES\Property(type="text") */
    public $isComparable = "0";

    /** @ES\Property(type="text") */
    public $isVisibleOnFront = "0";

    /** @ES\Property(type="boolean") */
    public $isHtmlAllowedOnFront;

    /** @ES\Property(type="boolean") */
    public $isUsedForPriceRules;

    /** @ES\Property(type="boolean") */
    public $isFilterableInSearch;

    /** @ES\Property(type="text") */
    public $usedInProductListing = "0";

    /** @ES\Property(type="boolean") */
    public $usedForSortBy;

    /** @ES\Property(type="boolean") */
    public $isConfigurable;

    /** @ES\Property(type="text") */
    public $applyTo;

    /** @ES\Property(type="text") */
    public $isVisibleInAdvanceSearch = "0";

    /** @ES\Property(type="integer") */
    public $position;

    /** @ES\Property(type="boolean") */
    public $isWyswigEnabled;

    /** @ES\Property(type="text") */
    public $isUsedForPromoRules = "0";

    /** @ES\Property(type="boolean") */
    public $isUsedInGrid;

    /** @ES\Property(type="integer") */
    public $searchWeight;

    /** @ES\Embedded(class=\CoreShop2VueStorefrontBundle\Document\AttributeOption::class) */
    public $options;

    /** @ES\Property(type="boolean") */
    public $isVisibleInGrid;

    /** @ES\Property(type="boolean") */
    public $isFilterableInGrid;

    /** @ES\Property(type="text") */
    public $scope;

    /** @ES\Property(type="text") */
    public $entityTypeId;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    public function setId(string $id)
    {
        $this->id = $id;
        $this->setEsId($id);
    }

    public function setEsId(string $id)
    {
        $this->_id = $id;
    }

    public function setIsWyswigEnabled(bool $isWyswigEnabled)
    {
        $this->isWyswigEnabled = $isWyswigEnabled;
    }

    public function setIsHtmlAllowedOnFront(bool $isHtmlEnabledOnFront)
    {
        $this->isHtmlAllowedOnFront = $isHtmlEnabledOnFront;
    }

    /**
     * @param mixed $attributeCode
     */
    public function setAttributeCode($attributeCode): void
    {
        $this->attributeCode = $attributeCode;
    }

    /**
     * @param mixed $attributeModel
     */
    public function setAttributeModel($attributeModel): void
    {
        $this->attributeModel = $attributeModel;
    }

    /**
     * @param mixed $backendModel
     */
    public function setBackendModel($backendModel): void
    {
        $this->backendModel = $backendModel;
    }

    /**
     * @param mixed $backendType
     */
    public function setBackendType($backendType): void
    {
        $this->backendType = $backendType;
    }

    /**
     * @param mixed $backendTable
     */
    public function setBackendTable($backendTable): void
    {
        $this->backendTable = $backendTable;
    }

    /**
     * @param mixed $frontendModel
     */
    public function setFrontendModel($frontendModel): void
    {
        $this->frontendModel = $frontendModel;
    }

    /**
     * @param mixed $frontendInput
     */
    public function setFrontendInput($frontendInput): void
    {
        $this->frontendInput = $frontendInput;
    }

    /**
     * @param mixed $frontendLabel
     */
    public function setFrontendLabel($frontendLabel): void
    {
        $this->frontendLabel = $frontendLabel;
    }

    /**
     * @param mixed $frontendClass
     */
    public function setFrontendClass($frontendClass): void
    {
        $this->frontendClass = $frontendClass;
    }

    /**
     * @param mixed $sourceModel
     */
    public function setSourceModel($sourceModel): void
    {
        $this->sourceModel = $sourceModel;
    }

    /**
     * @param mixed $isRequired
     */
    public function setIsRequired($isRequired): void
    {
        $this->isRequired = $isRequired;
    }

    /**
     * @param mixed $isUserDefined
     */
    public function setIsUserDefined($isUserDefined): void
    {
        $this->isUserDefined = $isUserDefined;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue): void
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @param mixed $defaultFrontendLabel
     */
    public function setDefaultFrontendLabel($defaultFrontendLabel): void
    {
        $this->defaultFrontendLabel = $defaultFrontendLabel;
    }

    /**
     * @param mixed $isUnique
     */
    public function setIsUnique($isUnique): void
    {
        $this->isUnique = $isUnique;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @param mixed $attributeId
     */
    public function setAttributeId($attributeId): void
    {
        $this->attributeId = $attributeId;
    }

    /**
     * @param mixed $frontendInputRenderer
     */
    public function setFrontendInputRenderer($frontendInputRenderer): void
    {
        $this->frontendInputRenderer = $frontendInputRenderer;
    }

    /**
     * @param mixed $isGlobal
     */
    public function setIsGlobal($isGlobal): void
    {
        $this->isGlobal = $isGlobal;
    }

    /**
     * @param mixed $isVisible
     */
    public function setIsVisible($isVisible): void
    {
        $this->isVisible = $isVisible;
    }

    /**
     * @param mixed $isSearchable
     */
    public function setIsSearchable($isSearchable): void
    {
        $this->isSearchable = $isSearchable;
    }

    /**
     * @param mixed $isFilterable
     */
    public function setIsFilterable($isFilterable): void
    {
        $this->isFilterable = $isFilterable;
    }

    /**
     * @param mixed $isComparable
     */
    public function setIsComparable($isComparable): void
    {
        $this->isComparable = $isComparable;
    }

    /**
     * @param mixed $isVisibleOnFront
     */
    public function setIsVisibleOnFront($isVisibleOnFront): void
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
    }

    /**
     * @param mixed $isUsedForPriceRules
     */
    public function setIsUsedForPriceRules($isUsedForPriceRules): void
    {
        $this->isUsedForPriceRules = $isUsedForPriceRules;
    }

    /**
     * @param mixed $isFilterableInSearch
     */
    public function setIsFilterableInSearch($isFilterableInSearch): void
    {
        $this->isFilterableInSearch = $isFilterableInSearch;
    }

    /**
     * @param mixed $usedInProductListing
     */
    public function setUsedInProductListing($usedInProductListing): void
    {
        $this->usedInProductListing = $usedInProductListing;
    }

    /**
     * @param mixed $usedForSortBy
     */
    public function setUsedForSortBy($usedForSortBy): void
    {
        $this->usedForSortBy = $usedForSortBy;
    }

    /**
     * @param mixed $isConfigurable
     */
    public function setIsConfigurable($isConfigurable): void
    {
        $this->isConfigurable = $isConfigurable;
    }

    /**
     * @param mixed $applyTo
     */
    public function setApplyTo($applyTo): void
    {
        $this->applyTo = $applyTo;
    }

    /**
     * @param mixed $isVisibleInAdvanceSearch
     */
    public function setIsVisibleInAdvanceSearch($isVisibleInAdvanceSearch): void
    {
        $this->isVisibleInAdvanceSearch = $isVisibleInAdvanceSearch;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @param mixed $isUsedForPromoRules
     */
    public function setIsUsedForPromoRules($isUsedForPromoRules): void
    {
        $this->isUsedForPromoRules = $isUsedForPromoRules;
    }

    /**
     * @param mixed $searchWeight
     */
    public function setSearchWeight($searchWeight): void
    {
        $this->searchWeight = $searchWeight;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options): void
    {
        $this->options = $options;
    }

    /**
     * @param mixed $isUsedInGrid
     */
    public function setIsUsedInGrid($isUsedInGrid): void
    {
        $this->isUsedInGrid = $isUsedInGrid;
    }

    public function setIsVisibleInGrid(bool $isVisibleInGrid)
    {
        $this->isVisibleInGrid = $isVisibleInGrid;
    }

    /**
     * @param mixed $isFilterableInGrid
     */
    public function setIsFilterableInGrid($isFilterableInGrid): void
    {
        $this->isFilterableInGrid = $isFilterableInGrid;
    }

    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    public function setEntityTypeId(int $entityTypeId)
    {
        $this->entityTypeId = $entityTypeId;
    }

    public function getOptions(): array
    {
        return $this->options->toArray();
    }

    public function getAttributeCode(): string
    {
        return $this->attributeCode;
    }

    public function getFrontendLabel():? string
    {
        return $this->frontedLabel;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
