<?php
/**
 * Aspect
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Aspect Class Doc Comment
 *
 * @category Class
 * @description This type contains information about an item attribute (for example, color) that is appropriate or necessary for accurately describing items in a particular leaf category. Sellers are required or encouraged to provide one or more values of this aspect when offering an item in that category on eBay.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Aspect implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Aspect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aspect_constraint' => '\OpenAPI\Client\Model\AspectConstraint',
        'aspect_values' => '\OpenAPI\Client\Model\AspectValue[]',
        'localized_aspect_name' => 'string',
        'relevance_indicator' => '\OpenAPI\Client\Model\RelevanceIndicator'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aspect_constraint' => null,
        'aspect_values' => null,
        'localized_aspect_name' => null,
        'relevance_indicator' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aspect_constraint' => 'aspectConstraint',
        'aspect_values' => 'aspectValues',
        'localized_aspect_name' => 'localizedAspectName',
        'relevance_indicator' => 'relevanceIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_constraint' => 'setAspectConstraint',
        'aspect_values' => 'setAspectValues',
        'localized_aspect_name' => 'setLocalizedAspectName',
        'relevance_indicator' => 'setRelevanceIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_constraint' => 'getAspectConstraint',
        'aspect_values' => 'getAspectValues',
        'localized_aspect_name' => 'getLocalizedAspectName',
        'relevance_indicator' => 'getRelevanceIndicator'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['aspect_constraint'] = $data['aspect_constraint'] ?? null;
        $this->container['aspect_values'] = $data['aspect_values'] ?? null;
        $this->container['localized_aspect_name'] = $data['localized_aspect_name'] ?? null;
        $this->container['relevance_indicator'] = $data['relevance_indicator'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets aspect_constraint
     *
     * @return \OpenAPI\Client\Model\AspectConstraint|null
     */
    public function getAspectConstraint()
    {
        return $this->container['aspect_constraint'];
    }

    /**
     * Sets aspect_constraint
     *
     * @param \OpenAPI\Client\Model\AspectConstraint|null $aspect_constraint aspect_constraint
     *
     * @return self
     */
    public function setAspectConstraint($aspect_constraint)
    {
        $this->container['aspect_constraint'] = $aspect_constraint;

        return $this;
    }

    /**
     * Gets aspect_values
     *
     * @return \OpenAPI\Client\Model\AspectValue[]|null
     */
    public function getAspectValues()
    {
        return $this->container['aspect_values'];
    }

    /**
     * Sets aspect_values
     *
     * @param \OpenAPI\Client\Model\AspectValue[]|null $aspect_values A list of valid values for this aspect (for example: <code>Red</code>, <code>Green</code>, and <code>Blue</code>), along with any constraints on those values.
     *
     * @return self
     */
    public function setAspectValues($aspect_values)
    {
        $this->container['aspect_values'] = $aspect_values;

        return $this;
    }

    /**
     * Gets localized_aspect_name
     *
     * @return string|null
     */
    public function getLocalizedAspectName()
    {
        return $this->container['localized_aspect_name'];
    }

    /**
     * Sets localized_aspect_name
     *
     * @param string|null $localized_aspect_name The localized name of this aspect (for example: <code>Colour</code> on the eBay UK site). <br /><br /><span class=\"tablenote\"> <strong>Note:</strong> This name is always localized for the specified marketplace. </span>
     *
     * @return self
     */
    public function setLocalizedAspectName($localized_aspect_name)
    {
        $this->container['localized_aspect_name'] = $localized_aspect_name;

        return $this;
    }

    /**
     * Gets relevance_indicator
     *
     * @return \OpenAPI\Client\Model\RelevanceIndicator|null
     */
    public function getRelevanceIndicator()
    {
        return $this->container['relevance_indicator'];
    }

    /**
     * Sets relevance_indicator
     *
     * @param \OpenAPI\Client\Model\RelevanceIndicator|null $relevance_indicator relevance_indicator
     *
     * @return self
     */
    public function setRelevanceIndicator($relevance_indicator)
    {
        $this->container['relevance_indicator'] = $relevance_indicator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


