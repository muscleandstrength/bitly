<?php
/**
 * DomainUpdate
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
 * DomainUpdate Class Doc Comment
 *
 * @category Class
 * @description update custom domain fields
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DomainUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'https_enabled' => 'bool',
        'hsts_enabled' => 'bool',
        'upgrade_insecure_requests' => 'bool',
        'wildcard_redirect' => 'string',
        'root_redirect' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'https_enabled' => null,
        'hsts_enabled' => null,
        'upgrade_insecure_requests' => null,
        'wildcard_redirect' => null,
        'root_redirect' => null
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
        'https_enabled' => 'https_enabled',
        'hsts_enabled' => 'hsts_enabled',
        'upgrade_insecure_requests' => 'upgrade_insecure_requests',
        'wildcard_redirect' => 'wildcard_redirect',
        'root_redirect' => 'root_redirect'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'https_enabled' => 'setHttpsEnabled',
        'hsts_enabled' => 'setHstsEnabled',
        'upgrade_insecure_requests' => 'setUpgradeInsecureRequests',
        'wildcard_redirect' => 'setWildcardRedirect',
        'root_redirect' => 'setRootRedirect'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'https_enabled' => 'getHttpsEnabled',
        'hsts_enabled' => 'getHstsEnabled',
        'upgrade_insecure_requests' => 'getUpgradeInsecureRequests',
        'wildcard_redirect' => 'getWildcardRedirect',
        'root_redirect' => 'getRootRedirect'
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
        $this->container['https_enabled'] = $data['https_enabled'] ?? null;
        $this->container['hsts_enabled'] = $data['hsts_enabled'] ?? null;
        $this->container['upgrade_insecure_requests'] = $data['upgrade_insecure_requests'] ?? null;
        $this->container['wildcard_redirect'] = $data['wildcard_redirect'] ?? null;
        $this->container['root_redirect'] = $data['root_redirect'] ?? null;
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
     * Gets https_enabled
     *
     * @return bool|null
     */
    public function getHttpsEnabled()
    {
        return $this->container['https_enabled'];
    }

    /**
     * Sets https_enabled
     *
     * @param bool|null $https_enabled https_enabled
     *
     * @return self
     */
    public function setHttpsEnabled($https_enabled)
    {
        $this->container['https_enabled'] = $https_enabled;

        return $this;
    }

    /**
     * Gets hsts_enabled
     *
     * @return bool|null
     */
    public function getHstsEnabled()
    {
        return $this->container['hsts_enabled'];
    }

    /**
     * Sets hsts_enabled
     *
     * @param bool|null $hsts_enabled hsts_enabled
     *
     * @return self
     */
    public function setHstsEnabled($hsts_enabled)
    {
        $this->container['hsts_enabled'] = $hsts_enabled;

        return $this;
    }

    /**
     * Gets upgrade_insecure_requests
     *
     * @return bool|null
     */
    public function getUpgradeInsecureRequests()
    {
        return $this->container['upgrade_insecure_requests'];
    }

    /**
     * Sets upgrade_insecure_requests
     *
     * @param bool|null $upgrade_insecure_requests upgrade_insecure_requests
     *
     * @return self
     */
    public function setUpgradeInsecureRequests($upgrade_insecure_requests)
    {
        $this->container['upgrade_insecure_requests'] = $upgrade_insecure_requests;

        return $this;
    }

    /**
     * Gets wildcard_redirect
     *
     * @return string|null
     */
    public function getWildcardRedirect()
    {
        return $this->container['wildcard_redirect'];
    }

    /**
     * Sets wildcard_redirect
     *
     * @param string|null $wildcard_redirect wildcard_redirect
     *
     * @return self
     */
    public function setWildcardRedirect($wildcard_redirect)
    {
        $this->container['wildcard_redirect'] = $wildcard_redirect;

        return $this;
    }

    /**
     * Gets root_redirect
     *
     * @return string|null
     */
    public function getRootRedirect()
    {
        return $this->container['root_redirect'];
    }

    /**
     * Sets root_redirect
     *
     * @param string|null $root_redirect root_redirect
     *
     * @return self
     */
    public function setRootRedirect($root_redirect)
    {
        $this->container['root_redirect'] = $root_redirect;

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


