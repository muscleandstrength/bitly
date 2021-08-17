<?php
/**
 * DataExportQuery
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
 * DataExportQuery Class Doc Comment
 *
 * @category Class
 * @package  Bitly
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataExportQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataExportQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'archived' => 'string',
        'unit_reference' => 'int',
        'link_deeplinks' => 'string',
        'tags' => 'string[]',
        'campaign_ids' => 'string[]',
        'modified_after' => 'int',
        'keyword' => 'string',
        'created_after' => 'int',
        'custom_bitlink' => 'string',
        'units' => 'int',
        'query' => 'string',
        'report_type' => 'string',
        'created_before' => 'int',
        'emails' => 'string[]',
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
        'archived' => null,
        'unit_reference' => null,
        'link_deeplinks' => null,
        'tags' => null,
        'campaign_ids' => null,
        'modified_after' => null,
        'keyword' => null,
        'created_after' => null,
        'custom_bitlink' => null,
        'units' => null,
        'query' => null,
        'report_type' => null,
        'created_before' => null,
        'emails' => null,
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
        'archived' => 'archived',
        'unit_reference' => 'unit_reference',
        'link_deeplinks' => 'link_deeplinks',
        'tags' => 'tags',
        'campaign_ids' => 'campaign_ids',
        'modified_after' => 'modified_after',
        'keyword' => 'keyword',
        'created_after' => 'created_after',
        'custom_bitlink' => 'custom_bitlink',
        'units' => 'units',
        'query' => 'query',
        'report_type' => 'report_type',
        'created_before' => 'created_before',
        'emails' => 'emails',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'archived' => 'setArchived',
        'unit_reference' => 'setUnitReference',
        'link_deeplinks' => 'setLinkDeeplinks',
        'tags' => 'setTags',
        'campaign_ids' => 'setCampaignIds',
        'modified_after' => 'setModifiedAfter',
        'keyword' => 'setKeyword',
        'created_after' => 'setCreatedAfter',
        'custom_bitlink' => 'setCustomBitlink',
        'units' => 'setUnits',
        'query' => 'setQuery',
        'report_type' => 'setReportType',
        'created_before' => 'setCreatedBefore',
        'emails' => 'setEmails',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'archived' => 'getArchived',
        'unit_reference' => 'getUnitReference',
        'link_deeplinks' => 'getLinkDeeplinks',
        'tags' => 'getTags',
        'campaign_ids' => 'getCampaignIds',
        'modified_after' => 'getModifiedAfter',
        'keyword' => 'getKeyword',
        'created_after' => 'getCreatedAfter',
        'custom_bitlink' => 'getCustomBitlink',
        'units' => 'getUnits',
        'query' => 'getQuery',
        'report_type' => 'getReportType',
        'created_before' => 'getCreatedBefore',
        'emails' => 'getEmails',
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
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['unit_reference'] = $data['unit_reference'] ?? null;
        $this->container['link_deeplinks'] = $data['link_deeplinks'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['campaign_ids'] = $data['campaign_ids'] ?? null;
        $this->container['modified_after'] = $data['modified_after'] ?? null;
        $this->container['keyword'] = $data['keyword'] ?? null;
        $this->container['created_after'] = $data['created_after'] ?? null;
        $this->container['custom_bitlink'] = $data['custom_bitlink'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['created_before'] = $data['created_before'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
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
     * Gets archived
     *
     * @return string|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param string|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets unit_reference
     *
     * @return int|null
     */
    public function getUnitReference()
    {
        return $this->container['unit_reference'];
    }

    /**
     * Sets unit_reference
     *
     * @param int|null $unit_reference unit_reference
     *
     * @return self
     */
    public function setUnitReference($unit_reference)
    {
        $this->container['unit_reference'] = $unit_reference;

        return $this;
    }

    /**
     * Gets link_deeplinks
     *
     * @return string|null
     */
    public function getLinkDeeplinks()
    {
        return $this->container['link_deeplinks'];
    }

    /**
     * Sets link_deeplinks
     *
     * @param string|null $link_deeplinks link_deeplinks
     *
     * @return self
     */
    public function setLinkDeeplinks($link_deeplinks)
    {
        $this->container['link_deeplinks'] = $link_deeplinks;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets campaign_ids
     *
     * @return string[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaign_ids'];
    }

    /**
     * Sets campaign_ids
     *
     * @param string[]|null $campaign_ids campaign_ids
     *
     * @return self
     */
    public function setCampaignIds($campaign_ids)
    {
        $this->container['campaign_ids'] = $campaign_ids;

        return $this;
    }

    /**
     * Gets modified_after
     *
     * @return int|null
     */
    public function getModifiedAfter()
    {
        return $this->container['modified_after'];
    }

    /**
     * Sets modified_after
     *
     * @param int|null $modified_after modified_after
     *
     * @return self
     */
    public function setModifiedAfter($modified_after)
    {
        $this->container['modified_after'] = $modified_after;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string|null $keyword keyword
     *
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets created_after
     *
     * @return int|null
     */
    public function getCreatedAfter()
    {
        return $this->container['created_after'];
    }

    /**
     * Sets created_after
     *
     * @param int|null $created_after created_after
     *
     * @return self
     */
    public function setCreatedAfter($created_after)
    {
        $this->container['created_after'] = $created_after;

        return $this;
    }

    /**
     * Gets custom_bitlink
     *
     * @return string|null
     */
    public function getCustomBitlink()
    {
        return $this->container['custom_bitlink'];
    }

    /**
     * Sets custom_bitlink
     *
     * @param string|null $custom_bitlink custom_bitlink
     *
     * @return self
     */
    public function setCustomBitlink($custom_bitlink)
    {
        $this->container['custom_bitlink'] = $custom_bitlink;

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
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string|null $report_type report_type
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets created_before
     *
     * @return int|null
     */
    public function getCreatedBefore()
    {
        return $this->container['created_before'];
    }

    /**
     * Sets created_before
     *
     * @param int|null $created_before created_before
     *
     * @return self
     */
    public function setCreatedBefore($created_before)
    {
        $this->container['created_before'] = $created_before;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[]|null $emails emails
     *
     * @return self
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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


