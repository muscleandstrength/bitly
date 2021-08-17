<?php
/**
 * ShareAccount
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
 * ShareAccount Class Doc Comment
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShareAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShareAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numeric_id' => 'int',
        'account_login' => 'string',
        'account_type' => '\Bitly\Model\SocialAccounts',
        'account_id' => 'string',
        'oauth_error' => 'string',
        'primary' => 'bool',
        'visible' => 'bool',
        'connected' => 'string',
        'account_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'numeric_id' => null,
        'account_login' => null,
        'account_type' => null,
        'account_id' => null,
        'oauth_error' => null,
        'primary' => null,
        'visible' => null,
        'connected' => null,
        'account_name' => null
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
        'numeric_id' => 'numeric_id',
        'account_login' => 'account_login',
        'account_type' => 'account_type',
        'account_id' => 'account_id',
        'oauth_error' => 'oauth_error',
        'primary' => 'primary',
        'visible' => 'visible',
        'connected' => 'connected',
        'account_name' => 'account_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numeric_id' => 'setNumericId',
        'account_login' => 'setAccountLogin',
        'account_type' => 'setAccountType',
        'account_id' => 'setAccountId',
        'oauth_error' => 'setOauthError',
        'primary' => 'setPrimary',
        'visible' => 'setVisible',
        'connected' => 'setConnected',
        'account_name' => 'setAccountName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numeric_id' => 'getNumericId',
        'account_login' => 'getAccountLogin',
        'account_type' => 'getAccountType',
        'account_id' => 'getAccountId',
        'oauth_error' => 'getOauthError',
        'primary' => 'getPrimary',
        'visible' => 'getVisible',
        'connected' => 'getConnected',
        'account_name' => 'getAccountName'
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
        $this->container['numeric_id'] = $data['numeric_id'] ?? null;
        $this->container['account_login'] = $data['account_login'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['oauth_error'] = $data['oauth_error'] ?? null;
        $this->container['primary'] = $data['primary'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['connected'] = $data['connected'] ?? null;
        $this->container['account_name'] = $data['account_name'] ?? null;
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
     * Gets numeric_id
     *
     * @return int|null
     */
    public function getNumericId()
    {
        return $this->container['numeric_id'];
    }

    /**
     * Sets numeric_id
     *
     * @param int|null $numeric_id numeric_id
     *
     * @return self
     */
    public function setNumericId($numeric_id)
    {
        $this->container['numeric_id'] = $numeric_id;

        return $this;
    }

    /**
     * Gets account_login
     *
     * @return string|null
     */
    public function getAccountLogin()
    {
        return $this->container['account_login'];
    }

    /**
     * Sets account_login
     *
     * @param string|null $account_login account_login
     *
     * @return self
     */
    public function setAccountLogin($account_login)
    {
        $this->container['account_login'] = $account_login;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return \Bitly\Model\SocialAccounts|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param \Bitly\Model\SocialAccounts|null $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets oauth_error
     *
     * @return string|null
     */
    public function getOauthError()
    {
        return $this->container['oauth_error'];
    }

    /**
     * Sets oauth_error
     *
     * @param string|null $oauth_error oauth_error
     *
     * @return self
     */
    public function setOauthError($oauth_error)
    {
        $this->container['oauth_error'] = $oauth_error;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary primary
     *
     * @return self
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets connected
     *
     * @return string|null
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param string|null $connected ISO timestamp
     *
     * @return self
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name account_name
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

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


