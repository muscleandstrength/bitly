<?php
/**
 * BitlinkHistoryAllOf
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
 * BitlinkHistoryAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BitlinkHistoryAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BitlinkHistory_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hash' => 'string',
        'group_guid' => 'string',
        'created_at' => 'string',
        'is_active' => 'bool',
        'long_url' => 'string',
        'deactivated_at' => 'string',
        'login' => 'string',
        'target_bitlink_id' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hash' => null,
        'group_guid' => null,
        'created_at' => null,
        'is_active' => null,
        'long_url' => null,
        'deactivated_at' => null,
        'login' => null,
        'target_bitlink_id' => null,
        'id' => null
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
        'hash' => 'hash',
        'group_guid' => 'group_guid',
        'created_at' => 'created_at',
        'is_active' => 'is_active',
        'long_url' => 'long_url',
        'deactivated_at' => 'deactivated_at',
        'login' => 'login',
        'target_bitlink_id' => 'target_bitlink_id',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'group_guid' => 'setGroupGuid',
        'created_at' => 'setCreatedAt',
        'is_active' => 'setIsActive',
        'long_url' => 'setLongUrl',
        'deactivated_at' => 'setDeactivatedAt',
        'login' => 'setLogin',
        'target_bitlink_id' => 'setTargetBitlinkId',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'group_guid' => 'getGroupGuid',
        'created_at' => 'getCreatedAt',
        'is_active' => 'getIsActive',
        'long_url' => 'getLongUrl',
        'deactivated_at' => 'getDeactivatedAt',
        'login' => 'getLogin',
        'target_bitlink_id' => 'getTargetBitlinkId',
        'id' => 'getId'
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
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['group_guid'] = $data['group_guid'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['long_url'] = $data['long_url'] ?? null;
        $this->container['deactivated_at'] = $data['deactivated_at'] ?? null;
        $this->container['login'] = $data['login'] ?? null;
        $this->container['target_bitlink_id'] = $data['target_bitlink_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
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
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash The backhalf of the underlying hash link
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets group_guid
     *
     * @return string|null
     */
    public function getGroupGuid()
    {
        return $this->container['group_guid'];
    }

    /**
     * Sets group_guid
     *
     * @param string|null $group_guid group_guid
     *
     * @return self
     */
    public function setGroupGuid($group_guid)
    {
        $this->container['group_guid'] = $group_guid;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets long_url
     *
     * @return string|null
     */
    public function getLongUrl()
    {
        return $this->container['long_url'];
    }

    /**
     * Sets long_url
     *
     * @param string|null $long_url long_url
     *
     * @return self
     */
    public function setLongUrl($long_url)
    {
        $this->container['long_url'] = $long_url;

        return $this;
    }

    /**
     * Gets deactivated_at
     *
     * @return string|null
     */
    public function getDeactivatedAt()
    {
        return $this->container['deactivated_at'];
    }

    /**
     * Sets deactivated_at
     *
     * @param string|null $deactivated_at deactivated_at
     *
     * @return self
     */
    public function setDeactivatedAt($deactivated_at)
    {
        $this->container['deactivated_at'] = $deactivated_at;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets target_bitlink_id
     *
     * @return string|null
     */
    public function getTargetBitlinkId()
    {
        return $this->container['target_bitlink_id'];
    }

    /**
     * Sets target_bitlink_id
     *
     * @param string|null $target_bitlink_id The domain and backhalf of the underlying hash link
     *
     * @return self
     */
    public function setTargetBitlinkId($target_bitlink_id)
    {
        $this->container['target_bitlink_id'] = $target_bitlink_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The domain and backhalf of the parent override
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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

