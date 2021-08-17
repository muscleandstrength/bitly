<?php
/**
 * ReferrersByDomains
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bitly API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: api@bitly.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bitly\Model;

use \ArrayAccess;
use \Bitly\ObjectSerializer;

/**
 * ReferrersByDomains Class Doc Comment
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReferrersByDomains implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReferrersByDomains';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'units' => 'int',
        'facet' => 'string',
        'referrers_by_domain' => '\Bitly\Model\ReferrersByDomain[]',
        'unit_reference' => 'string',
        'unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'units' => null,
        'facet' => null,
        'referrers_by_domain' => null,
        'unit_reference' => null,
        'unit' => null
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
        'units' => 'units',
        'facet' => 'facet',
        'referrers_by_domain' => 'referrers_by_domain',
        'unit_reference' => 'unit_reference',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'units' => 'setUnits',
        'facet' => 'setFacet',
        'referrers_by_domain' => 'setReferrersByDomain',
        'unit_reference' => 'setUnitReference',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'units' => 'getUnits',
        'facet' => 'getFacet',
        'referrers_by_domain' => 'getReferrersByDomain',
        'unit_reference' => 'getUnitReference',
        'unit' => 'getUnit'
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

    const FACET_REFERRERS_BY_DOMAINS = 'referrers_by_domains';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFacetAllowableValues()
    {
        return [
            self::FACET_REFERRERS_BY_DOMAINS,
        ];
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
        $this->container['units'] = $data['units'] ?? null;
        $this->container['facet'] = $data['facet'] ?? null;
        $this->container['referrers_by_domain'] = $data['referrers_by_domain'] ?? null;
        $this->container['unit_reference'] = $data['unit_reference'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFacetAllowableValues();
        if (!is_null($this->container['facet']) && !in_array($this->container['facet'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'facet', must be one of '%s'",
                $this->container['facet'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets units
     *
     * @return int|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param int|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets facet
     *
     * @return string|null
     */
    public function getFacet()
    {
        return $this->container['facet'];
    }

    /**
     * Sets facet
     *
     * @param string|null $facet facet
     *
     * @return self
     */
    public function setFacet($facet)
    {
        $allowedValues = $this->getFacetAllowableValues();
        if (!is_null($facet) && !in_array($facet, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'facet', must be one of '%s'",
                    $facet,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['facet'] = $facet;

        return $this;
    }

    /**
     * Gets referrers_by_domain
     *
     * @return \Bitly\Model\ReferrersByDomain[]|null
     */
    public function getReferrersByDomain()
    {
        return $this->container['referrers_by_domain'];
    }

    /**
     * Sets referrers_by_domain
     *
     * @param \Bitly\Model\ReferrersByDomain[]|null $referrers_by_domain referrers_by_domain
     *
     * @return self
     */
    public function setReferrersByDomain($referrers_by_domain)
    {
        $this->container['referrers_by_domain'] = $referrers_by_domain;

        return $this;
    }

    /**
     * Gets unit_reference
     *
     * @return string|null
     */
    public function getUnitReference()
    {
        return $this->container['unit_reference'];
    }

    /**
     * Sets unit_reference
     *
     * @param string|null $unit_reference unit_reference
     *
     * @return self
     */
    public function setUnitReference($unit_reference)
    {
        $this->container['unit_reference'] = $unit_reference;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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


