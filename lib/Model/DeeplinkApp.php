<?php
/**
 * DeeplinkApp
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
 * DeeplinkApp Class Doc Comment
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeeplinkApp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeeplinkApp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'third_party_app_id' => 'string',
        'created_ts' => 'int',
        'scheme' => 'string',
        'install_url' => 'string',
        'name' => 'string',
        'legacy_app_id' => 'string',
        'icon_url' => 'string',
        'organization_guid' => 'string',
        'modified_ts' => 'int',
        'guid' => 'string',
        'apple_app_entitlement_id' => 'string',
        'android_sha256' => 'string[]',
        'os' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'third_party_app_id' => null,
        'created_ts' => null,
        'scheme' => null,
        'install_url' => null,
        'name' => null,
        'legacy_app_id' => null,
        'icon_url' => null,
        'organization_guid' => null,
        'modified_ts' => null,
        'guid' => null,
        'apple_app_entitlement_id' => null,
        'android_sha256' => null,
        'os' => null
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
        'third_party_app_id' => 'third_party_app_id',
        'created_ts' => 'created_ts',
        'scheme' => 'scheme',
        'install_url' => 'install_url',
        'name' => 'name',
        'legacy_app_id' => 'legacy_app_id',
        'icon_url' => 'icon_url',
        'organization_guid' => 'organization_guid',
        'modified_ts' => 'modified_ts',
        'guid' => 'guid',
        'apple_app_entitlement_id' => 'apple_app_entitlement_id',
        'android_sha256' => 'android_sha256',
        'os' => 'os'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'third_party_app_id' => 'setThirdPartyAppId',
        'created_ts' => 'setCreatedTs',
        'scheme' => 'setScheme',
        'install_url' => 'setInstallUrl',
        'name' => 'setName',
        'legacy_app_id' => 'setLegacyAppId',
        'icon_url' => 'setIconUrl',
        'organization_guid' => 'setOrganizationGuid',
        'modified_ts' => 'setModifiedTs',
        'guid' => 'setGuid',
        'apple_app_entitlement_id' => 'setAppleAppEntitlementId',
        'android_sha256' => 'setAndroidSha256',
        'os' => 'setOs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'third_party_app_id' => 'getThirdPartyAppId',
        'created_ts' => 'getCreatedTs',
        'scheme' => 'getScheme',
        'install_url' => 'getInstallUrl',
        'name' => 'getName',
        'legacy_app_id' => 'getLegacyAppId',
        'icon_url' => 'getIconUrl',
        'organization_guid' => 'getOrganizationGuid',
        'modified_ts' => 'getModifiedTs',
        'guid' => 'getGuid',
        'apple_app_entitlement_id' => 'getAppleAppEntitlementId',
        'android_sha256' => 'getAndroidSha256',
        'os' => 'getOs'
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

    const OS_IOS = 'ios';
    const OS_ANDROID = 'android';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOsAllowableValues()
    {
        return [
            self::OS_IOS,
            self::OS_ANDROID,
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
        $this->container['third_party_app_id'] = $data['third_party_app_id'] ?? null;
        $this->container['created_ts'] = $data['created_ts'] ?? null;
        $this->container['scheme'] = $data['scheme'] ?? null;
        $this->container['install_url'] = $data['install_url'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['legacy_app_id'] = $data['legacy_app_id'] ?? null;
        $this->container['icon_url'] = $data['icon_url'] ?? null;
        $this->container['organization_guid'] = $data['organization_guid'] ?? null;
        $this->container['modified_ts'] = $data['modified_ts'] ?? null;
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['apple_app_entitlement_id'] = $data['apple_app_entitlement_id'] ?? null;
        $this->container['android_sha256'] = $data['android_sha256'] ?? null;
        $this->container['os'] = $data['os'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['third_party_app_id'] === null) {
            $invalidProperties[] = "'third_party_app_id' can't be null";
        }
        if ($this->container['install_url'] === null) {
            $invalidProperties[] = "'install_url' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        $allowedValues = $this->getOsAllowableValues();
        if (!is_null($this->container['os']) && !in_array($this->container['os'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'os', must be one of '%s'",
                $this->container['os'],
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
     * Gets third_party_app_id
     *
     * @return string
     */
    public function getThirdPartyAppId()
    {
        return $this->container['third_party_app_id'];
    }

    /**
     * Sets third_party_app_id
     *
     * @param string $third_party_app_id third_party_app_id
     *
     * @return self
     */
    public function setThirdPartyAppId($third_party_app_id)
    {
        $this->container['third_party_app_id'] = $third_party_app_id;

        return $this;
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
     * Gets scheme
     *
     * @return string|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string|null $scheme scheme
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets install_url
     *
     * @return string
     */
    public function getInstallUrl()
    {
        return $this->container['install_url'];
    }

    /**
     * Sets install_url
     *
     * @param string $install_url install_url
     *
     * @return self
     */
    public function setInstallUrl($install_url)
    {
        $this->container['install_url'] = $install_url;

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
     * Gets legacy_app_id
     *
     * @return string|null
     */
    public function getLegacyAppId()
    {
        return $this->container['legacy_app_id'];
    }

    /**
     * Sets legacy_app_id
     *
     * @param string|null $legacy_app_id legacy_app_id
     *
     * @return self
     */
    public function setLegacyAppId($legacy_app_id)
    {
        $this->container['legacy_app_id'] = $legacy_app_id;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url icon_url
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets organization_guid
     *
     * @return string|null
     */
    public function getOrganizationGuid()
    {
        return $this->container['organization_guid'];
    }

    /**
     * Sets organization_guid
     *
     * @param string|null $organization_guid organization_guid
     *
     * @return self
     */
    public function setOrganizationGuid($organization_guid)
    {
        $this->container['organization_guid'] = $organization_guid;

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
     * Gets apple_app_entitlement_id
     *
     * @return string|null
     */
    public function getAppleAppEntitlementId()
    {
        return $this->container['apple_app_entitlement_id'];
    }

    /**
     * Sets apple_app_entitlement_id
     *
     * @param string|null $apple_app_entitlement_id apple_app_entitlement_id
     *
     * @return self
     */
    public function setAppleAppEntitlementId($apple_app_entitlement_id)
    {
        $this->container['apple_app_entitlement_id'] = $apple_app_entitlement_id;

        return $this;
    }

    /**
     * Gets android_sha256
     *
     * @return string[]|null
     */
    public function getAndroidSha256()
    {
        return $this->container['android_sha256'];
    }

    /**
     * Sets android_sha256
     *
     * @param string[]|null $android_sha256 android_sha256
     *
     * @return self
     */
    public function setAndroidSha256($android_sha256)
    {
        $this->container['android_sha256'] = $android_sha256;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os os
     *
     * @return self
     */
    public function setOs($os)
    {
        $allowedValues = $this->getOsAllowableValues();
        if (!in_array($os, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'os', must be one of '%s'",
                    $os,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['os'] = $os;

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


