<?php
/**
 * Viewpoint
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
 * Viewpoint Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Viewpoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Viewpoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'guid' => 'string',
        'orthogonal_camera' => '\OpenAPI\Client\Model\OrthogonalCamera',
        'perspective_camera' => '\OpenAPI\Client\Model\PerspectiveCamera',
        'lines' => '\OpenAPI\Client\Model\Line[]',
        'clipping_planes' => '\OpenAPI\Client\Model\ClippingPlane[]',
        'snapshot' => '\OpenAPI\Client\Model\Snapshot',
        'components' => '\OpenAPI\Client\Model\ComponentsParent',
        'temp_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'index' => null,
        'guid' => 'uuid',
        'orthogonal_camera' => null,
        'perspective_camera' => null,
        'lines' => null,
        'clipping_planes' => null,
        'snapshot' => null,
        'components' => null,
        'temp_id' => null
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
        'index' => 'index',
        'guid' => 'guid',
        'orthogonal_camera' => 'orthogonal_camera',
        'perspective_camera' => 'perspective_camera',
        'lines' => 'lines',
        'clipping_planes' => 'clipping_planes',
        'snapshot' => 'snapshot',
        'components' => 'components',
        'temp_id' => 'temp_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'guid' => 'setGuid',
        'orthogonal_camera' => 'setOrthogonalCamera',
        'perspective_camera' => 'setPerspectiveCamera',
        'lines' => 'setLines',
        'clipping_planes' => 'setClippingPlanes',
        'snapshot' => 'setSnapshot',
        'components' => 'setComponents',
        'temp_id' => 'setTempId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'guid' => 'getGuid',
        'orthogonal_camera' => 'getOrthogonalCamera',
        'perspective_camera' => 'getPerspectiveCamera',
        'lines' => 'getLines',
        'clipping_planes' => 'getClippingPlanes',
        'snapshot' => 'getSnapshot',
        'components' => 'getComponents',
        'temp_id' => 'getTempId'
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
        $this->container['index'] = $data['index'] ?? null;
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['orthogonal_camera'] = $data['orthogonal_camera'] ?? null;
        $this->container['perspective_camera'] = $data['perspective_camera'] ?? null;
        $this->container['lines'] = $data['lines'] ?? null;
        $this->container['clipping_planes'] = $data['clipping_planes'] ?? null;
        $this->container['snapshot'] = $data['snapshot'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
        $this->container['temp_id'] = $data['temp_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['index']) && ($this->container['index'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['index']) && ($this->container['index'] < 0)) {
            $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 0.";
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
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index index
     *
     * @return self
     */
    public function setIndex($index)
    {

        if (!is_null($index) && ($index > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $index when calling Viewpoint., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($index) && ($index < 0)) {
            throw new \InvalidArgumentException('invalid value for $index when calling Viewpoint., must be bigger than or equal to 0.');
        }

        $this->container['index'] = $index;

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
     * Gets orthogonal_camera
     *
     * @return \OpenAPI\Client\Model\OrthogonalCamera|null
     */
    public function getOrthogonalCamera()
    {
        return $this->container['orthogonal_camera'];
    }

    /**
     * Sets orthogonal_camera
     *
     * @param \OpenAPI\Client\Model\OrthogonalCamera|null $orthogonal_camera orthogonal_camera
     *
     * @return self
     */
    public function setOrthogonalCamera($orthogonal_camera)
    {
        $this->container['orthogonal_camera'] = $orthogonal_camera;

        return $this;
    }

    /**
     * Gets perspective_camera
     *
     * @return \OpenAPI\Client\Model\PerspectiveCamera|null
     */
    public function getPerspectiveCamera()
    {
        return $this->container['perspective_camera'];
    }

    /**
     * Sets perspective_camera
     *
     * @param \OpenAPI\Client\Model\PerspectiveCamera|null $perspective_camera perspective_camera
     *
     * @return self
     */
    public function setPerspectiveCamera($perspective_camera)
    {
        $this->container['perspective_camera'] = $perspective_camera;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \OpenAPI\Client\Model\Line[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \OpenAPI\Client\Model\Line[]|null $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets clipping_planes
     *
     * @return \OpenAPI\Client\Model\ClippingPlane[]|null
     */
    public function getClippingPlanes()
    {
        return $this->container['clipping_planes'];
    }

    /**
     * Sets clipping_planes
     *
     * @param \OpenAPI\Client\Model\ClippingPlane[]|null $clipping_planes clipping_planes
     *
     * @return self
     */
    public function setClippingPlanes($clipping_planes)
    {
        $this->container['clipping_planes'] = $clipping_planes;

        return $this;
    }

    /**
     * Gets snapshot
     *
     * @return \OpenAPI\Client\Model\Snapshot|null
     */
    public function getSnapshot()
    {
        return $this->container['snapshot'];
    }

    /**
     * Sets snapshot
     *
     * @param \OpenAPI\Client\Model\Snapshot|null $snapshot snapshot
     *
     * @return self
     */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \OpenAPI\Client\Model\ComponentsParent|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \OpenAPI\Client\Model\ComponentsParent|null $components components
     *
     * @return self
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets temp_id
     *
     * @return int|null
     */
    public function getTempId()
    {
        return $this->container['temp_id'];
    }

    /**
     * Sets temp_id
     *
     * @param int|null $temp_id Only used when using POST on the full-topic route to bind viewpoint with comment
     *
     * @return self
     */
    public function setTempId($temp_id)
    {
        $this->container['temp_id'] = $temp_id;

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


