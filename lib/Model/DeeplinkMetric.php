<?php
/**
 * DeeplinkMetric
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
 * DeeplinkMetric Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeeplinkMetric implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeeplinkMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_installs' => 'int',
        'store_visits' => 'int',
        'interstital_views' => 'int',
        'app_opens' => 'int',
        'web_opens' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_installs' => null,
        'store_visits' => null,
        'interstital_views' => null,
        'app_opens' => null,
        'web_opens' => null
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
        'app_installs' => 'app_installs',
        'store_visits' => 'store_visits',
        'interstital_views' => 'interstital_views',
        'app_opens' => 'app_opens',
        'web_opens' => 'web_opens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_installs' => 'setAppInstalls',
        'store_visits' => 'setStoreVisits',
        'interstital_views' => 'setInterstitalViews',
        'app_opens' => 'setAppOpens',
        'web_opens' => 'setWebOpens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_installs' => 'getAppInstalls',
        'store_visits' => 'getStoreVisits',
        'interstital_views' => 'getInterstitalViews',
        'app_opens' => 'getAppOpens',
        'web_opens' => 'getWebOpens'
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
        $this->container['app_installs'] = $data['app_installs'] ?? null;
        $this->container['store_visits'] = $data['store_visits'] ?? null;
        $this->container['interstital_views'] = $data['interstital_views'] ?? null;
        $this->container['app_opens'] = $data['app_opens'] ?? null;
        $this->container['web_opens'] = $data['web_opens'] ?? null;
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
     * Gets app_installs
     *
     * @return int|null
     */
    public function getAppInstalls()
    {
        return $this->container['app_installs'];
    }

    /**
     * Sets app_installs
     *
     * @param int|null $app_installs app_installs
     *
     * @return self
     */
    public function setAppInstalls($app_installs)
    {
        $this->container['app_installs'] = $app_installs;

        return $this;
    }

    /**
     * Gets store_visits
     *
     * @return int|null
     */
    public function getStoreVisits()
    {
        return $this->container['store_visits'];
    }

    /**
     * Sets store_visits
     *
     * @param int|null $store_visits store_visits
     *
     * @return self
     */
    public function setStoreVisits($store_visits)
    {
        $this->container['store_visits'] = $store_visits;

        return $this;
    }

    /**
     * Gets interstital_views
     *
     * @return int|null
     */
    public function getInterstitalViews()
    {
        return $this->container['interstital_views'];
    }

    /**
     * Sets interstital_views
     *
     * @param int|null $interstital_views interstital_views
     *
     * @return self
     */
    public function setInterstitalViews($interstital_views)
    {
        $this->container['interstital_views'] = $interstital_views;

        return $this;
    }

    /**
     * Gets app_opens
     *
     * @return int|null
     */
    public function getAppOpens()
    {
        return $this->container['app_opens'];
    }

    /**
     * Sets app_opens
     *
     * @param int|null $app_opens app_opens
     *
     * @return self
     */
    public function setAppOpens($app_opens)
    {
        $this->container['app_opens'] = $app_opens;

        return $this;
    }

    /**
     * Gets web_opens
     *
     * @return int|null
     */
    public function getWebOpens()
    {
        return $this->container['web_opens'];
    }

    /**
     * Sets web_opens
     *
     * @param int|null $web_opens web_opens
     *
     * @return self
     */
    public function setWebOpens($web_opens)
    {
        $this->container['web_opens'] = $web_opens;

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

