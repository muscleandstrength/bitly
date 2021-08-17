<?php
/**
 * LaunchpadLinkPerformance
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
 * LaunchpadLinkPerformance Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LaunchpadLinkPerformance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LaunchpadLinkPerformance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unit_reference' => 'string',
        'link_clicks' => '\OpenAPI\Client\Model\LaunchpadClicks[]',
        'performance_start' => 'string',
        'performance_end' => 'string',
        'units' => 'int',
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
        'unit_reference' => null,
        'link_clicks' => null,
        'performance_start' => null,
        'performance_end' => null,
        'units' => null,
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
        'unit_reference' => 'unit_reference',
        'link_clicks' => 'link_clicks',
        'performance_start' => 'performance_start',
        'performance_end' => 'performance_end',
        'units' => 'units',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_reference' => 'setUnitReference',
        'link_clicks' => 'setLinkClicks',
        'performance_start' => 'setPerformanceStart',
        'performance_end' => 'setPerformanceEnd',
        'units' => 'setUnits',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_reference' => 'getUnitReference',
        'link_clicks' => 'getLinkClicks',
        'performance_start' => 'getPerformanceStart',
        'performance_end' => 'getPerformanceEnd',
        'units' => 'getUnits',
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

    const UNIT_MINUTE = 'minute';
    const UNIT_HOUR = 'hour';
    const UNIT_DAY = 'day';
    const UNIT_WEEK = 'week';
    const UNIT_MONTH = 'month';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_MINUTE,
            self::UNIT_HOUR,
            self::UNIT_DAY,
            self::UNIT_WEEK,
            self::UNIT_MONTH,
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
        $this->container['unit_reference'] = $data['unit_reference'] ?? null;
        $this->container['link_clicks'] = $data['link_clicks'] ?? null;
        $this->container['performance_start'] = $data['performance_start'] ?? null;
        $this->container['performance_end'] = $data['performance_end'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
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

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit', must be one of '%s'",
                $this->container['unit'],
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
     * Gets link_clicks
     *
     * @return \OpenAPI\Client\Model\LaunchpadClicks[]|null
     */
    public function getLinkClicks()
    {
        return $this->container['link_clicks'];
    }

    /**
     * Sets link_clicks
     *
     * @param \OpenAPI\Client\Model\LaunchpadClicks[]|null $link_clicks link_clicks
     *
     * @return self
     */
    public function setLinkClicks($link_clicks)
    {
        $this->container['link_clicks'] = $link_clicks;

        return $this;
    }

    /**
     * Gets performance_start
     *
     * @return string|null
     */
    public function getPerformanceStart()
    {
        return $this->container['performance_start'];
    }

    /**
     * Sets performance_start
     *
     * @param string|null $performance_start performance_start
     *
     * @return self
     */
    public function setPerformanceStart($performance_start)
    {
        $this->container['performance_start'] = $performance_start;

        return $this;
    }

    /**
     * Gets performance_end
     *
     * @return string|null
     */
    public function getPerformanceEnd()
    {
        return $this->container['performance_end'];
    }

    /**
     * Sets performance_end
     *
     * @param string|null $performance_end performance_end
     *
     * @return self
     */
    public function setPerformanceEnd($performance_end)
    {
        $this->container['performance_end'] = $performance_end;

        return $this;
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
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($unit) && !in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit', must be one of '%s'",
                    $unit,
                    implode("', '", $allowedValues)
                )
            );
        }
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


