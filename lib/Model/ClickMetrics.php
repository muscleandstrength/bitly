<?php
/**
 * ClickMetrics
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ClickMetrics Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClickMetrics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClickMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'units' => 'int',
        'facet' => 'string',
        'unit_reference' => 'string',
        'unit' => 'string',
        'metrics' => '\OpenAPI\Client\Model\ClickMetric[]'
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
        'unit_reference' => null,
        'unit' => null,
        'metrics' => null
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
        'unit_reference' => 'unit_reference',
        'unit' => 'unit',
        'metrics' => 'metrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'units' => 'setUnits',
        'facet' => 'setFacet',
        'unit_reference' => 'setUnitReference',
        'unit' => 'setUnit',
        'metrics' => 'setMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'units' => 'getUnits',
        'facet' => 'getFacet',
        'unit_reference' => 'getUnitReference',
        'unit' => 'getUnit',
        'metrics' => 'getMetrics'
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

    const FACET_COUNTRIES = 'countries';
    const FACET_CITIES = 'cities';
    const FACET_DEVICES = 'devices';
    const FACET_REFERRERS = 'referrers';
    const FACET_REFERRERS_BY_DOMAIN = 'referrers_by_domain';
    const FACET_REFERRING_DOMAINS = 'referring_domains';
    const FACET_REFERRING_NETWORKS = 'referring_networks';
    const FACET_SHORTEN_COUNTS = 'shorten_counts';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFacetAllowableValues()
    {
        return [
            self::FACET_COUNTRIES,
            self::FACET_CITIES,
            self::FACET_DEVICES,
            self::FACET_REFERRERS,
            self::FACET_REFERRERS_BY_DOMAIN,
            self::FACET_REFERRING_DOMAINS,
            self::FACET_REFERRING_NETWORKS,
            self::FACET_SHORTEN_COUNTS,
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
        $this->container['unit_reference'] = $data['unit_reference'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
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
     * Gets metrics
     *
     * @return \OpenAPI\Client\Model\ClickMetric[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \OpenAPI\Client\Model\ClickMetric[]|null $metrics metrics
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

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


