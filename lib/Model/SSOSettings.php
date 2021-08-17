<?php
/**
 * SSOSettings
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
 * SSOSettings Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SSOSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SSOSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'slo_endpoint' => 'string',
        'default_group_guid' => 'string',
        'idp_url' => 'string',
        'certificate' => 'string',
        'organization_guid' => 'string',
        'saml_endpoint' => 'string',
        'identity_provider' => 'string',
        'domains' => 'string[]',
        'issuer_url' => 'string',
        'url_slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'slo_endpoint' => null,
        'default_group_guid' => null,
        'idp_url' => null,
        'certificate' => null,
        'organization_guid' => null,
        'saml_endpoint' => null,
        'identity_provider' => null,
        'domains' => null,
        'issuer_url' => null,
        'url_slug' => null
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
        'slo_endpoint' => 'slo_endpoint',
        'default_group_guid' => 'default_group_guid',
        'idp_url' => 'idp_url',
        'certificate' => 'certificate',
        'organization_guid' => 'organization_guid',
        'saml_endpoint' => 'saml_endpoint',
        'identity_provider' => 'identity_provider',
        'domains' => 'domains',
        'issuer_url' => 'issuer_url',
        'url_slug' => 'url_slug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'slo_endpoint' => 'setSloEndpoint',
        'default_group_guid' => 'setDefaultGroupGuid',
        'idp_url' => 'setIdpUrl',
        'certificate' => 'setCertificate',
        'organization_guid' => 'setOrganizationGuid',
        'saml_endpoint' => 'setSamlEndpoint',
        'identity_provider' => 'setIdentityProvider',
        'domains' => 'setDomains',
        'issuer_url' => 'setIssuerUrl',
        'url_slug' => 'setUrlSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'slo_endpoint' => 'getSloEndpoint',
        'default_group_guid' => 'getDefaultGroupGuid',
        'idp_url' => 'getIdpUrl',
        'certificate' => 'getCertificate',
        'organization_guid' => 'getOrganizationGuid',
        'saml_endpoint' => 'getSamlEndpoint',
        'identity_provider' => 'getIdentityProvider',
        'domains' => 'getDomains',
        'issuer_url' => 'getIssuerUrl',
        'url_slug' => 'getUrlSlug'
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
        $this->container['slo_endpoint'] = $data['slo_endpoint'] ?? null;
        $this->container['default_group_guid'] = $data['default_group_guid'] ?? null;
        $this->container['idp_url'] = $data['idp_url'] ?? null;
        $this->container['certificate'] = $data['certificate'] ?? null;
        $this->container['organization_guid'] = $data['organization_guid'] ?? null;
        $this->container['saml_endpoint'] = $data['saml_endpoint'] ?? null;
        $this->container['identity_provider'] = $data['identity_provider'] ?? null;
        $this->container['domains'] = $data['domains'] ?? null;
        $this->container['issuer_url'] = $data['issuer_url'] ?? null;
        $this->container['url_slug'] = $data['url_slug'] ?? null;
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
     * Gets slo_endpoint
     *
     * @return string|null
     */
    public function getSloEndpoint()
    {
        return $this->container['slo_endpoint'];
    }

    /**
     * Sets slo_endpoint
     *
     * @param string|null $slo_endpoint slo_endpoint
     *
     * @return self
     */
    public function setSloEndpoint($slo_endpoint)
    {
        $this->container['slo_endpoint'] = $slo_endpoint;

        return $this;
    }

    /**
     * Gets default_group_guid
     *
     * @return string|null
     */
    public function getDefaultGroupGuid()
    {
        return $this->container['default_group_guid'];
    }

    /**
     * Sets default_group_guid
     *
     * @param string|null $default_group_guid default_group_guid
     *
     * @return self
     */
    public function setDefaultGroupGuid($default_group_guid)
    {
        $this->container['default_group_guid'] = $default_group_guid;

        return $this;
    }

    /**
     * Gets idp_url
     *
     * @return string|null
     */
    public function getIdpUrl()
    {
        return $this->container['idp_url'];
    }

    /**
     * Sets idp_url
     *
     * @param string|null $idp_url idp_url
     *
     * @return self
     */
    public function setIdpUrl($idp_url)
    {
        $this->container['idp_url'] = $idp_url;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string|null $certificate certificate
     *
     * @return self
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

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
     * Gets saml_endpoint
     *
     * @return string|null
     */
    public function getSamlEndpoint()
    {
        return $this->container['saml_endpoint'];
    }

    /**
     * Sets saml_endpoint
     *
     * @param string|null $saml_endpoint saml_endpoint
     *
     * @return self
     */
    public function setSamlEndpoint($saml_endpoint)
    {
        $this->container['saml_endpoint'] = $saml_endpoint;

        return $this;
    }

    /**
     * Gets identity_provider
     *
     * @return string|null
     */
    public function getIdentityProvider()
    {
        return $this->container['identity_provider'];
    }

    /**
     * Sets identity_provider
     *
     * @param string|null $identity_provider identity_provider
     *
     * @return self
     */
    public function setIdentityProvider($identity_provider)
    {
        $this->container['identity_provider'] = $identity_provider;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return string[]|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param string[]|null $domains domains
     *
     * @return self
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets issuer_url
     *
     * @return string|null
     */
    public function getIssuerUrl()
    {
        return $this->container['issuer_url'];
    }

    /**
     * Sets issuer_url
     *
     * @param string|null $issuer_url issuer_url
     *
     * @return self
     */
    public function setIssuerUrl($issuer_url)
    {
        $this->container['issuer_url'] = $issuer_url;

        return $this;
    }

    /**
     * Gets url_slug
     *
     * @return string|null
     */
    public function getUrlSlug()
    {
        return $this->container['url_slug'];
    }

    /**
     * Sets url_slug
     *
     * @param string|null $url_slug url_slug
     *
     * @return self
     */
    public function setUrlSlug($url_slug)
    {
        $this->container['url_slug'] = $url_slug;

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


