<?php
/**
 * FullTopic
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
 * FullTopic Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FullTopic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FullTopic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guid' => 'string',
        'creation_date' => '\DateTime',
        'creation_author' => 'string',
        'modified_date' => '\DateTime',
        'modified_author' => 'string',
        'title' => 'string',
        'description' => 'string',
        'reference_links' => 'string[]',
        'ifcs' => 'int[]',
        'labels' => 'string[]',
        'topic_type' => 'string',
        'topic_status' => 'string',
        'stage' => 'string',
        'priority' => 'string',
        'index' => 'int',
        'assigned_to' => 'string',
        'format' => 'string',
        'due_date' => '\DateTime',
        'comments' => '\OpenAPI\Client\Model\Comment[]',
        'viewpoints' => '\OpenAPI\Client\Model\Viewpoint[]',
        'project' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'guid' => 'uuid',
        'creation_date' => 'date-time',
        'creation_author' => null,
        'modified_date' => 'date-time',
        'modified_author' => null,
        'title' => null,
        'description' => null,
        'reference_links' => null,
        'ifcs' => null,
        'labels' => null,
        'topic_type' => null,
        'topic_status' => null,
        'stage' => null,
        'priority' => null,
        'index' => null,
        'assigned_to' => null,
        'format' => null,
        'due_date' => 'date-time',
        'comments' => null,
        'viewpoints' => null,
        'project' => null
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
        'guid' => 'guid',
        'creation_date' => 'creation_date',
        'creation_author' => 'creation_author',
        'modified_date' => 'modified_date',
        'modified_author' => 'modified_author',
        'title' => 'title',
        'description' => 'description',
        'reference_links' => 'reference_links',
        'ifcs' => 'ifcs',
        'labels' => 'labels',
        'topic_type' => 'topic_type',
        'topic_status' => 'topic_status',
        'stage' => 'stage',
        'priority' => 'priority',
        'index' => 'index',
        'assigned_to' => 'assigned_to',
        'format' => 'format',
        'due_date' => 'due_date',
        'comments' => 'comments',
        'viewpoints' => 'viewpoints',
        'project' => 'project'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guid' => 'setGuid',
        'creation_date' => 'setCreationDate',
        'creation_author' => 'setCreationAuthor',
        'modified_date' => 'setModifiedDate',
        'modified_author' => 'setModifiedAuthor',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'reference_links' => 'setReferenceLinks',
        'ifcs' => 'setIfcs',
        'labels' => 'setLabels',
        'topic_type' => 'setTopicType',
        'topic_status' => 'setTopicStatus',
        'stage' => 'setStage',
        'priority' => 'setPriority',
        'index' => 'setIndex',
        'assigned_to' => 'setAssignedTo',
        'format' => 'setFormat',
        'due_date' => 'setDueDate',
        'comments' => 'setComments',
        'viewpoints' => 'setViewpoints',
        'project' => 'setProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guid' => 'getGuid',
        'creation_date' => 'getCreationDate',
        'creation_author' => 'getCreationAuthor',
        'modified_date' => 'getModifiedDate',
        'modified_author' => 'getModifiedAuthor',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'reference_links' => 'getReferenceLinks',
        'ifcs' => 'getIfcs',
        'labels' => 'getLabels',
        'topic_type' => 'getTopicType',
        'topic_status' => 'getTopicStatus',
        'stage' => 'getStage',
        'priority' => 'getPriority',
        'index' => 'getIndex',
        'assigned_to' => 'getAssignedTo',
        'format' => 'getFormat',
        'due_date' => 'getDueDate',
        'comments' => 'getComments',
        'viewpoints' => 'getViewpoints',
        'project' => 'getProject'
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
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['creation_author'] = $data['creation_author'] ?? null;
        $this->container['modified_date'] = $data['modified_date'] ?? null;
        $this->container['modified_author'] = $data['modified_author'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['reference_links'] = $data['reference_links'] ?? null;
        $this->container['ifcs'] = $data['ifcs'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['topic_type'] = $data['topic_type'] ?? null;
        $this->container['topic_status'] = $data['topic_status'] ?? null;
        $this->container['stage'] = $data['stage'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['assigned_to'] = $data['assigned_to'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['viewpoints'] = $data['viewpoints'] ?? null;
        $this->container['project'] = $data['project'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['creation_author']) && (mb_strlen($this->container['creation_author']) > 254)) {
            $invalidProperties[] = "invalid value for 'creation_author', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['modified_author']) && (mb_strlen($this->container['modified_author']) > 254)) {
            $invalidProperties[] = "invalid value for 'modified_author', the character length must be smaller than or equal to 254.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['index']) && ($this->container['index'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['index']) && ($this->container['index'] < 0)) {
            $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['assigned_to']) && (mb_strlen($this->container['assigned_to']) > 254)) {
            $invalidProperties[] = "invalid value for 'assigned_to', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 64)) {
            $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 1)) {
            $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['project'] === null) {
            $invalidProperties[] = "'project' can't be null";
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
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date creation_date
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets creation_author
     *
     * @return string|null
     */
    public function getCreationAuthor()
    {
        return $this->container['creation_author'];
    }

    /**
     * Sets creation_author
     *
     * @param string|null $creation_author creation_author
     *
     * @return self
     */
    public function setCreationAuthor($creation_author)
    {
        if (!is_null($creation_author) && (mb_strlen($creation_author) > 254)) {
            throw new \InvalidArgumentException('invalid length for $creation_author when calling FullTopic., must be smaller than or equal to 254.');
        }

        $this->container['creation_author'] = $creation_author;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return \DateTime|null
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param \DateTime|null $modified_date modified_date
     *
     * @return self
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets modified_author
     *
     * @return string|null
     */
    public function getModifiedAuthor()
    {
        return $this->container['modified_author'];
    }

    /**
     * Sets modified_author
     *
     * @param string|null $modified_author modified_author
     *
     * @return self
     */
    public function setModifiedAuthor($modified_author)
    {
        if (!is_null($modified_author) && (mb_strlen($modified_author) > 254)) {
            throw new \InvalidArgumentException('invalid length for $modified_author when calling FullTopic., must be smaller than or equal to 254.');
        }

        $this->container['modified_author'] = $modified_author;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling FullTopic., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets reference_links
     *
     * @return string[]|null
     */
    public function getReferenceLinks()
    {
        return $this->container['reference_links'];
    }

    /**
     * Sets reference_links
     *
     * @param string[]|null $reference_links reference_links
     *
     * @return self
     */
    public function setReferenceLinks($reference_links)
    {
        $this->container['reference_links'] = $reference_links;

        return $this;
    }

    /**
     * Gets ifcs
     *
     * @return int[]|null
     */
    public function getIfcs()
    {
        return $this->container['ifcs'];
    }

    /**
     * Sets ifcs
     *
     * @param int[]|null $ifcs ifcs
     *
     * @return self
     */
    public function setIfcs($ifcs)
    {


        $this->container['ifcs'] = $ifcs;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[]|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets topic_type
     *
     * @return string|null
     */
    public function getTopicType()
    {
        return $this->container['topic_type'];
    }

    /**
     * Sets topic_type
     *
     * @param string|null $topic_type topic_type
     *
     * @return self
     */
    public function setTopicType($topic_type)
    {
        $this->container['topic_type'] = $topic_type;

        return $this;
    }

    /**
     * Gets topic_status
     *
     * @return string|null
     */
    public function getTopicStatus()
    {
        return $this->container['topic_status'];
    }

    /**
     * Sets topic_status
     *
     * @param string|null $topic_status topic_status
     *
     * @return self
     */
    public function setTopicStatus($topic_status)
    {
        $this->container['topic_status'] = $topic_status;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return string|null
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param string|null $stage stage
     *
     * @return self
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $index when calling FullTopic., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($index) && ($index < 0)) {
            throw new \InvalidArgumentException('invalid value for $index when calling FullTopic., must be bigger than or equal to 0.');
        }

        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets assigned_to
     *
     * @return string|null
     */
    public function getAssignedTo()
    {
        return $this->container['assigned_to'];
    }

    /**
     * Sets assigned_to
     *
     * @param string|null $assigned_to assigned_to
     *
     * @return self
     */
    public function setAssignedTo($assigned_to)
    {
        if (!is_null($assigned_to) && (mb_strlen($assigned_to) > 254)) {
            throw new \InvalidArgumentException('invalid length for $assigned_to when calling FullTopic., must be smaller than or equal to 254.');
        }

        $this->container['assigned_to'] = $assigned_to;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (!is_null($format) && (mb_strlen($format) > 64)) {
            throw new \InvalidArgumentException('invalid length for $format when calling FullTopic., must be smaller than or equal to 64.');
        }
        if (!is_null($format) && (mb_strlen($format) < 1)) {
            throw new \InvalidArgumentException('invalid length for $format when calling FullTopic., must be bigger than or equal to 1.');
        }

        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \OpenAPI\Client\Model\Comment[]|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \OpenAPI\Client\Model\Comment[]|null $comments comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets viewpoints
     *
     * @return \OpenAPI\Client\Model\Viewpoint[]|null
     */
    public function getViewpoints()
    {
        return $this->container['viewpoints'];
    }

    /**
     * Sets viewpoints
     *
     * @param \OpenAPI\Client\Model\Viewpoint[]|null $viewpoints viewpoints
     *
     * @return self
     */
    public function setViewpoints($viewpoints)
    {
        $this->container['viewpoints'] = $viewpoints;

        return $this;
    }

    /**
     * Gets project
     *
     * @return int
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param int $project project
     *
     * @return self
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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


