<?php
/**
 * Organization
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
 * Organization Class Doc Comment
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Organization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'references' => 'array<string,string>',
        'name' => 'string',
        'bsds' => 'string[]',
        'created' => 'string',
        'is_active' => 'bool',
        'modified' => 'string',
        'tier_display_name' => 'string',
        'tier_family' => 'string',
        'tier' => 'string',
        'role' => 'string',
        'guid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'references' => null,
        'name' => null,
        'bsds' => null,
        'created' => null,
        'is_active' => null,
        'modified' => null,
        'tier_display_name' => null,
        'tier_family' => null,
        'tier' => null,
        'role' => null,
        'guid' => null
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
        'references' => 'references',
        'name' => 'name',
        'bsds' => 'bsds',
        'created' => 'created',
        'is_active' => 'is_active',
        'modified' => 'modified',
        'tier_display_name' => 'tier_display_name',
        'tier_family' => 'tier_family',
        'tier' => 'tier',
        'role' => 'role',
        'guid' => 'guid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'references' => 'setReferences',
        'name' => 'setName',
        'bsds' => 'setBsds',
        'created' => 'setCreated',
        'is_active' => 'setIsActive',
        'modified' => 'setModified',
        'tier_display_name' => 'setTierDisplayName',
        'tier_family' => 'setTierFamily',
        'tier' => 'setTier',
        'role' => 'setRole',
        'guid' => 'setGuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'references' => 'getReferences',
        'name' => 'getName',
        'bsds' => 'getBsds',
        'created' => 'getCreated',
        'is_active' => 'getIsActive',
        'modified' => 'getModified',
        'tier_display_name' => 'getTierDisplayName',
        'tier_family' => 'getTierFamily',
        'tier' => 'getTier',
        'role' => 'getRole',
        'guid' => 'getGuid'
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
        $this->container['references'] = $data['references'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['bsds'] = $data['bsds'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['tier_display_name'] = $data['tier_display_name'] ?? null;
        $this->container['tier_family'] = $data['tier_family'] ?? null;
        $this->container['tier'] = $data['tier'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['guid'] = $data['guid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['bsds'] === null) {
            $invalidProperties[] = "'bsds' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalidProperties[] = "'modified' can't be null";
        }
        if ($this->container['tier_display_name'] === null) {
            $invalidProperties[] = "'tier_display_name' can't be null";
        }
        if ($this->container['tier_family'] === null) {
            $invalidProperties[] = "'tier_family' can't be null";
        }
        if ($this->container['tier'] === null) {
            $invalidProperties[] = "'tier' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['guid'] === null) {
            $invalidProperties[] = "'guid' can't be null";
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
     * Gets references
     *
     * @return array<string,string>|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param array<string,string>|null $references references
     *
     * @return self
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

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
     * Gets bsds
     *
     * @return string[]
     */
    public function getBsds()
    {
        return $this->container['bsds'];
    }

    /**
     * Sets bsds
     *
     * @param string[] $bsds bsds
     *
     * @return self
     */
    public function setBsds($bsds)
    {
        $this->container['bsds'] = $bsds;

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
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string $modified modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets tier_display_name
     *
     * @return string
     */
    public function getTierDisplayName()
    {
        return $this->container['tier_display_name'];
    }

    /**
     * Sets tier_display_name
     *
     * @param string $tier_display_name tier_display_name
     *
     * @return self
     */
    public function setTierDisplayName($tier_display_name)
    {
        $this->container['tier_display_name'] = $tier_display_name;

        return $this;
    }

    /**
     * Gets tier_family
     *
     * @return string
     */
    public function getTierFamily()
    {
        return $this->container['tier_family'];
    }

    /**
     * Sets tier_family
     *
     * @param string $tier_family tier_family
     *
     * @return self
     */
    public function setTierFamily($tier_family)
    {
        $this->container['tier_family'] = $tier_family;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return string
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param string $tier tier
     *
     * @return self
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string $guid guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

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


