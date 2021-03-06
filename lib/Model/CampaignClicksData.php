<?php
/**
 * CampaignClicksData
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
 * CampaignClicksData Class Doc Comment
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CampaignClicksData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignClicksData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_ts' => 'int',
        'description' => 'string',
        'brand_guid' => 'string',
        'campaign_channels' => '\Bitly\Model\CampaignChannelClicks[]',
        'created_by' => 'string',
        'modified_ts' => 'int',
        'total_clicks' => 'int',
        'guid' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_ts' => null,
        'description' => null,
        'brand_guid' => null,
        'campaign_channels' => null,
        'created_by' => null,
        'modified_ts' => null,
        'total_clicks' => null,
        'guid' => null,
        'name' => null
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
        'created_ts' => 'created_ts',
        'description' => 'description',
        'brand_guid' => 'brand_guid',
        'campaign_channels' => 'campaign_channels',
        'created_by' => 'created_by',
        'modified_ts' => 'modified_ts',
        'total_clicks' => 'total_clicks',
        'guid' => 'guid',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_ts' => 'setCreatedTs',
        'description' => 'setDescription',
        'brand_guid' => 'setBrandGuid',
        'campaign_channels' => 'setCampaignChannels',
        'created_by' => 'setCreatedBy',
        'modified_ts' => 'setModifiedTs',
        'total_clicks' => 'setTotalClicks',
        'guid' => 'setGuid',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_ts' => 'getCreatedTs',
        'description' => 'getDescription',
        'brand_guid' => 'getBrandGuid',
        'campaign_channels' => 'getCampaignChannels',
        'created_by' => 'getCreatedBy',
        'modified_ts' => 'getModifiedTs',
        'total_clicks' => 'getTotalClicks',
        'guid' => 'getGuid',
        'name' => 'getName'
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
        $this->container['created_ts'] = $data['created_ts'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['brand_guid'] = $data['brand_guid'] ?? null;
        $this->container['campaign_channels'] = $data['campaign_channels'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['modified_ts'] = $data['modified_ts'] ?? null;
        $this->container['total_clicks'] = $data['total_clicks'] ?? null;
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
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
     * Gets created_ts
     *
     * @return int|null
     */
    public function getCreatedTs()
    {
        return $this->container['created_ts'];
    }

    /**
     * Sets created_ts
     *
     * @param int|null $created_ts created_ts
     *
     * @return self
     */
    public function setCreatedTs($created_ts)
    {
        $this->container['created_ts'] = $created_ts;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets brand_guid
     *
     * @return string|null
     */
    public function getBrandGuid()
    {
        return $this->container['brand_guid'];
    }

    /**
     * Sets brand_guid
     *
     * @param string|null $brand_guid brand_guid
     *
     * @return self
     */
    public function setBrandGuid($brand_guid)
    {
        $this->container['brand_guid'] = $brand_guid;

        return $this;
    }

    /**
     * Gets campaign_channels
     *
     * @return \Bitly\Model\CampaignChannelClicks[]|null
     */
    public function getCampaignChannels()
    {
        return $this->container['campaign_channels'];
    }

    /**
     * Sets campaign_channels
     *
     * @param \Bitly\Model\CampaignChannelClicks[]|null $campaign_channels campaign_channels
     *
     * @return self
     */
    public function setCampaignChannels($campaign_channels)
    {
        $this->container['campaign_channels'] = $campaign_channels;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets modified_ts
     *
     * @return int|null
     */
    public function getModifiedTs()
    {
        return $this->container['modified_ts'];
    }

    /**
     * Sets modified_ts
     *
     * @param int|null $modified_ts modified_ts
     *
     * @return self
     */
    public function setModifiedTs($modified_ts)
    {
        $this->container['modified_ts'] = $modified_ts;

        return $this;
    }

    /**
     * Gets total_clicks
     *
     * @return int|null
     */
    public function getTotalClicks()
    {
        return $this->container['total_clicks'];
    }

    /**
     * Sets total_clicks
     *
     * @param int|null $total_clicks total_clicks
     *
     * @return self
     */
    public function setTotalClicks($total_clicks)
    {
        $this->container['total_clicks'] = $total_clicks;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string|null $guid guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


