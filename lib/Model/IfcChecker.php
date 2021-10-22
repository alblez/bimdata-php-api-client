<?php
/**
 * IfcChecker
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BIMData API
 *
 * BIMData API is a tool to interact with your models stored on BIMData’s servers.     Through the API, you can manage your projects, the clouds, upload your IFC files and manage them through endpoints.
 *
 * The version of the OpenAPI document: v1
 * Contact: support@bimdata.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
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
 * IfcChecker Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IfcChecker implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IfcChecker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'ifc' => '\OpenAPI\Client\Model\Ifc',
        'creator' => '\OpenAPI\Client\Model\User',
        'name' => 'string',
        'checkplan_id' => 'int',
        'results' => '\OpenAPI\Client\Model\IfcCheckerResults[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'checkplan' => '\OpenAPI\Client\Model\IfcCheckerCheckplan'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'ifc' => null,
        'creator' => null,
        'name' => null,
        'checkplan_id' => null,
        'results' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'checkplan' => null
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
        'id' => 'id',
        'ifc' => 'ifc',
        'creator' => 'creator',
        'name' => 'name',
        'checkplan_id' => 'checkplan_id',
        'results' => 'results',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'checkplan' => 'checkplan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ifc' => 'setIfc',
        'creator' => 'setCreator',
        'name' => 'setName',
        'checkplan_id' => 'setCheckplanId',
        'results' => 'setResults',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'checkplan' => 'setCheckplan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ifc' => 'getIfc',
        'creator' => 'getCreator',
        'name' => 'getName',
        'checkplan_id' => 'getCheckplanId',
        'results' => 'getResults',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'checkplan' => 'getCheckplan'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['ifc'] = $data['ifc'] ?? null;
        $this->container['creator'] = $data['creator'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['checkplan_id'] = $data['checkplan_id'] ?? null;
        $this->container['results'] = $data['results'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['checkplan'] = $data['checkplan'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ifc
     *
     * @return \OpenAPI\Client\Model\Ifc|null
     */
    public function getIfc()
    {
        return $this->container['ifc'];
    }

    /**
     * Sets ifc
     *
     * @param \OpenAPI\Client\Model\Ifc|null $ifc ifc
     *
     * @return self
     */
    public function setIfc($ifc)
    {
        $this->container['ifc'] = $ifc;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \OpenAPI\Client\Model\User|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \OpenAPI\Client\Model\User|null $creator creator
     *
     * @return self
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

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
        if (!is_null($name) && (mb_strlen($name) > 256)) {
            throw new \InvalidArgumentException('invalid length for $name when calling IfcChecker., must be smaller than or equal to 256.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets checkplan_id
     *
     * @return int|null
     */
    public function getCheckplanId()
    {
        return $this->container['checkplan_id'];
    }

    /**
     * Sets checkplan_id
     *
     * @param int|null $checkplan_id checkplan_id
     *
     * @return self
     */
    public function setCheckplanId($checkplan_id)
    {
        $this->container['checkplan_id'] = $checkplan_id;

        return $this;
    }

    /**
     * Gets results
     *
     * @return \OpenAPI\Client\Model\IfcCheckerResults[]|null
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \OpenAPI\Client\Model\IfcCheckerResults[]|null $results results
     *
     * @return self
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets checkplan
     *
     * @return \OpenAPI\Client\Model\IfcCheckerCheckplan|null
     */
    public function getCheckplan()
    {
        return $this->container['checkplan'];
    }

    /**
     * Sets checkplan
     *
     * @param \OpenAPI\Client\Model\IfcCheckerCheckplan|null $checkplan checkplan
     *
     * @return self
     */
    public function setCheckplan($checkplan)
    {
        $this->container['checkplan'] = $checkplan;

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

