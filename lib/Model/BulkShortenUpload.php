<?php
/**
 * BulkShortenUpload
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
 * BulkShortenUpload Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BulkShortenUpload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BulkShortenUpload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'name' => 'string',
        'created' => 'string',
        'group_guid' => 'string',
        'report_url' => 'string',
        'uploaded_by' => 'string',
        'org_guid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'name' => null,
        'created' => null,
        'group_guid' => null,
        'report_url' => null,
        'uploaded_by' => null,
        'org_guid' => null
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
        'status' => 'status',
        'name' => 'name',
        'created' => 'created',
        'group_guid' => 'group_guid',
        'report_url' => 'report_url',
        'uploaded_by' => 'uploaded_by',
        'org_guid' => 'org_guid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'name' => 'setName',
        'created' => 'setCreated',
        'group_guid' => 'setGroupGuid',
        'report_url' => 'setReportUrl',
        'uploaded_by' => 'setUploadedBy',
        'org_guid' => 'setOrgGuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'name' => 'getName',
        'created' => 'getCreated',
        'group_guid' => 'getGroupGuid',
        'report_url' => 'getReportUrl',
        'uploaded_by' => 'getUploadedBy',
        'org_guid' => 'getOrgGuid'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['group_guid'] = $data['group_guid'] ?? null;
        $this->container['report_url'] = $data['report_url'] ?? null;
        $this->container['uploaded_by'] = $data['uploaded_by'] ?? null;
        $this->container['org_guid'] = $data['org_guid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['group_guid'] === null) {
            $invalidProperties[] = "'group_guid' can't be null";
        }
        if ($this->container['report_url'] === null) {
            $invalidProperties[] = "'report_url' can't be null";
        }
        if ($this->container['uploaded_by'] === null) {
            $invalidProperties[] = "'uploaded_by' can't be null";
        }
        if ($this->container['org_guid'] === null) {
            $invalidProperties[] = "'org_guid' can't be null";
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets group_guid
     *
     * @return string
     */
    public function getGroupGuid()
    {
        return $this->container['group_guid'];
    }

    /**
     * Sets group_guid
     *
     * @param string $group_guid group_guid
     *
     * @return self
     */
    public function setGroupGuid($group_guid)
    {
        $this->container['group_guid'] = $group_guid;

        return $this;
    }

    /**
     * Gets report_url
     *
     * @return string
     */
    public function getReportUrl()
    {
        return $this->container['report_url'];
    }

    /**
     * Sets report_url
     *
     * @param string $report_url report_url
     *
     * @return self
     */
    public function setReportUrl($report_url)
    {
        $this->container['report_url'] = $report_url;

        return $this;
    }

    /**
     * Gets uploaded_by
     *
     * @return string
     */
    public function getUploadedBy()
    {
        return $this->container['uploaded_by'];
    }

    /**
     * Sets uploaded_by
     *
     * @param string $uploaded_by uploaded_by
     *
     * @return self
     */
    public function setUploadedBy($uploaded_by)
    {
        $this->container['uploaded_by'] = $uploaded_by;

        return $this;
    }

    /**
     * Gets org_guid
     *
     * @return string
     */
    public function getOrgGuid()
    {
        return $this->container['org_guid'];
    }

    /**
     * Sets org_guid
     *
     * @param string $org_guid org_guid
     *
     * @return self
     */
    public function setOrgGuid($org_guid)
    {
        $this->container['org_guid'] = $org_guid;

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

