<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property string $IncludeSelector
 * @property boolean $AvailableItemsOnly
 * @property string[] $DomainName
 * @property \DTS\eBaySDK\Shopping\Types\ProductIDType $ProductID
 * @property string $QueryKeywords
 * @property \DTS\eBaySDK\Shopping\Enums\ProductSortCodeType $ProductSort
 * @property \DTS\eBaySDK\Shopping\Enums\SortOrderCodeType $SortOrder
 * @property integer $MaxEntries
 * @property integer $PageNumber
 * @property string $CategoryID
 * @property boolean $HideDuplicateItems
 */
class FindProductsRequestType extends \DTS\eBaySDK\Shopping\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'IncludeSelector' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeSelector'
        ],
        'AvailableItemsOnly' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AvailableItemsOnly'
        ],
        'DomainName' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DomainName'
        ],
        'ProductID' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ],
        'QueryKeywords' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ],
        'ProductSort' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductSort'
        ],
        'SortOrder' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'MaxEntries' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxEntries'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'CategoryID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'HideDuplicateItems' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideDuplicateItems'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'FindProductsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}