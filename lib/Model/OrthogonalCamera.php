<?php
/**
 * OrthogonalCamera
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
 * OrthogonalCamera Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrthogonalCamera implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrthogonalCamera';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'view_to_world_scale' => 'float',
        'camera_direction' => '\OpenAPI\Client\Model\Direction',
        'camera_up_vector' => '\OpenAPI\Client\Model\Direction',
        'camera_view_point' => '\OpenAPI\Client\Model\Point'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'view_to_world_scale' => null,
        'camera_direction' => null,
        'camera_up_vector' => null,
        'camera_view_point' => null
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
        'view_to_world_scale' => 'view_to_world_scale',
        'camera_direction' => 'camera_direction',
        'camera_up_vector' => 'camera_up_vector',
        'camera_view_point' => 'camera_view_point'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'view_to_world_scale' => 'setViewToWorldScale',
        'camera_direction' => 'setCameraDirection',
        'camera_up_vector' => 'setCameraUpVector',
        'camera_view_point' => 'setCameraViewPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'view_to_world_scale' => 'getViewToWorldScale',
        'camera_direction' => 'getCameraDirection',
        'camera_up_vector' => 'getCameraUpVector',
        'camera_view_point' => 'getCameraViewPoint'
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
        $this->container['view_to_world_scale'] = $data['view_to_world_scale'] ?? null;
        $this->container['camera_direction'] = $data['camera_direction'] ?? null;
        $this->container['camera_up_vector'] = $data['camera_up_vector'] ?? null;
        $this->container['camera_view_point'] = $data['camera_view_point'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['view_to_world_scale'] === null) {
            $invalidProperties[] = "'view_to_world_scale' can't be null";
        }
        if ($this->container['camera_direction'] === null) {
            $invalidProperties[] = "'camera_direction' can't be null";
        }
        if ($this->container['camera_up_vector'] === null) {
            $invalidProperties[] = "'camera_up_vector' can't be null";
        }
        if ($this->container['camera_view_point'] === null) {
            $invalidProperties[] = "'camera_view_point' can't be null";
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
     * Gets view_to_world_scale
     *
     * @return float
     */
    public function getViewToWorldScale()
    {
        return $this->container['view_to_world_scale'];
    }

    /**
     * Sets view_to_world_scale
     *
     * @param float $view_to_world_scale view_to_world_scale
     *
     * @return self
     */
    public function setViewToWorldScale($view_to_world_scale)
    {
        $this->container['view_to_world_scale'] = $view_to_world_scale;

        return $this;
    }

    /**
     * Gets camera_direction
     *
     * @return \OpenAPI\Client\Model\Direction
     */
    public function getCameraDirection()
    {
        return $this->container['camera_direction'];
    }

    /**
     * Sets camera_direction
     *
     * @param \OpenAPI\Client\Model\Direction $camera_direction camera_direction
     *
     * @return self
     */
    public function setCameraDirection($camera_direction)
    {
        $this->container['camera_direction'] = $camera_direction;

        return $this;
    }

    /**
     * Gets camera_up_vector
     *
     * @return \OpenAPI\Client\Model\Direction
     */
    public function getCameraUpVector()
    {
        return $this->container['camera_up_vector'];
    }

    /**
     * Sets camera_up_vector
     *
     * @param \OpenAPI\Client\Model\Direction $camera_up_vector camera_up_vector
     *
     * @return self
     */
    public function setCameraUpVector($camera_up_vector)
    {
        $this->container['camera_up_vector'] = $camera_up_vector;

        return $this;
    }

    /**
     * Gets camera_view_point
     *
     * @return \OpenAPI\Client\Model\Point
     */
    public function getCameraViewPoint()
    {
        return $this->container['camera_view_point'];
    }

    /**
     * Sets camera_view_point
     *
     * @param \OpenAPI\Client\Model\Point $camera_view_point camera_view_point
     *
     * @return self
     */
    public function setCameraViewPoint($camera_view_point)
    {
        $this->container['camera_view_point'] = $camera_view_point;

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


