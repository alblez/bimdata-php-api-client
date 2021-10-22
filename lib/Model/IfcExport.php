<?php
/**
 * IfcExport
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
 * IfcExport Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IfcExport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IfcExport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'classifications' => 'string',
        'zones' => 'string',
        'properties' => 'string',
        'systems' => 'string',
        'layers' => 'string',
        'materials' => 'string',
        'attributes' => 'string',
        'structure' => 'string',
        'uuids' => 'string[]',
        'file_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'classifications' => null,
        'zones' => null,
        'properties' => null,
        'systems' => null,
        'layers' => null,
        'materials' => null,
        'attributes' => null,
        'structure' => null,
        'uuids' => null,
        'file_name' => null
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
        'classifications' => 'classifications',
        'zones' => 'zones',
        'properties' => 'properties',
        'systems' => 'systems',
        'layers' => 'layers',
        'materials' => 'materials',
        'attributes' => 'attributes',
        'structure' => 'structure',
        'uuids' => 'uuids',
        'file_name' => 'file_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classifications' => 'setClassifications',
        'zones' => 'setZones',
        'properties' => 'setProperties',
        'systems' => 'setSystems',
        'layers' => 'setLayers',
        'materials' => 'setMaterials',
        'attributes' => 'setAttributes',
        'structure' => 'setStructure',
        'uuids' => 'setUuids',
        'file_name' => 'setFileName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classifications' => 'getClassifications',
        'zones' => 'getZones',
        'properties' => 'getProperties',
        'systems' => 'getSystems',
        'layers' => 'getLayers',
        'materials' => 'getMaterials',
        'attributes' => 'getAttributes',
        'structure' => 'getStructure',
        'uuids' => 'getUuids',
        'file_name' => 'getFileName'
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

    const CLASSIFICATIONS_ORIGINAL = 'ORIGINAL';
    const CLASSIFICATIONS_UPDATED = 'UPDATED';
    const CLASSIFICATIONS_NONE = 'NONE';
    const ZONES_ORIGINAL = 'ORIGINAL';
    const ZONES_UPDATED = 'UPDATED';
    const ZONES_NONE = 'NONE';
    const PROPERTIES_ORIGINAL = 'ORIGINAL';
    const PROPERTIES_UPDATED = 'UPDATED';
    const PROPERTIES_NONE = 'NONE';
    const SYSTEMS_ORIGINAL = 'ORIGINAL';
    const SYSTEMS_UPDATED = 'UPDATED';
    const SYSTEMS_NONE = 'NONE';
    const LAYERS_ORIGINAL = 'ORIGINAL';
    const LAYERS_UPDATED = 'UPDATED';
    const LAYERS_NONE = 'NONE';
    const MATERIALS_ORIGINAL = 'ORIGINAL';
    const MATERIALS_UPDATED = 'UPDATED';
    const MATERIALS_NONE = 'NONE';
    const ATTRIBUTES_ORIGINAL = 'ORIGINAL';
    const ATTRIBUTES_UPDATED = 'UPDATED';
    const ATTRIBUTES_NONE = 'NONE';
    const STRUCTURE_ORIGINAL = 'ORIGINAL';
    const STRUCTURE_UPDATED = 'UPDATED';
    const STRUCTURE_NONE = 'NONE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassificationsAllowableValues()
    {
        return [
            self::CLASSIFICATIONS_ORIGINAL,
            self::CLASSIFICATIONS_UPDATED,
            self::CLASSIFICATIONS_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getZonesAllowableValues()
    {
        return [
            self::ZONES_ORIGINAL,
            self::ZONES_UPDATED,
            self::ZONES_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertiesAllowableValues()
    {
        return [
            self::PROPERTIES_ORIGINAL,
            self::PROPERTIES_UPDATED,
            self::PROPERTIES_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSystemsAllowableValues()
    {
        return [
            self::SYSTEMS_ORIGINAL,
            self::SYSTEMS_UPDATED,
            self::SYSTEMS_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayersAllowableValues()
    {
        return [
            self::LAYERS_ORIGINAL,
            self::LAYERS_UPDATED,
            self::LAYERS_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaterialsAllowableValues()
    {
        return [
            self::MATERIALS_ORIGINAL,
            self::MATERIALS_UPDATED,
            self::MATERIALS_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAttributesAllowableValues()
    {
        return [
            self::ATTRIBUTES_ORIGINAL,
            self::ATTRIBUTES_UPDATED,
            self::ATTRIBUTES_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStructureAllowableValues()
    {
        return [
            self::STRUCTURE_ORIGINAL,
            self::STRUCTURE_UPDATED,
            self::STRUCTURE_NONE,
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
        $this->container['classifications'] = $data['classifications'] ?? 'UPDATED';
        $this->container['zones'] = $data['zones'] ?? 'UPDATED';
        $this->container['properties'] = $data['properties'] ?? 'UPDATED';
        $this->container['systems'] = $data['systems'] ?? 'UPDATED';
        $this->container['layers'] = $data['layers'] ?? 'UPDATED';
        $this->container['materials'] = $data['materials'] ?? 'UPDATED';
        $this->container['attributes'] = $data['attributes'] ?? 'UPDATED';
        $this->container['structure'] = $data['structure'] ?? 'UPDATED';
        $this->container['uuids'] = $data['uuids'] ?? null;
        $this->container['file_name'] = $data['file_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getClassificationsAllowableValues();
        if (!is_null($this->container['classifications']) && !in_array($this->container['classifications'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'classifications', must be one of '%s'",
                $this->container['classifications'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getZonesAllowableValues();
        if (!is_null($this->container['zones']) && !in_array($this->container['zones'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'zones', must be one of '%s'",
                $this->container['zones'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPropertiesAllowableValues();
        if (!is_null($this->container['properties']) && !in_array($this->container['properties'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'properties', must be one of '%s'",
                $this->container['properties'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSystemsAllowableValues();
        if (!is_null($this->container['systems']) && !in_array($this->container['systems'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'systems', must be one of '%s'",
                $this->container['systems'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLayersAllowableValues();
        if (!is_null($this->container['layers']) && !in_array($this->container['layers'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'layers', must be one of '%s'",
                $this->container['layers'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMaterialsAllowableValues();
        if (!is_null($this->container['materials']) && !in_array($this->container['materials'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'materials', must be one of '%s'",
                $this->container['materials'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAttributesAllowableValues();
        if (!is_null($this->container['attributes']) && !in_array($this->container['attributes'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'attributes', must be one of '%s'",
                $this->container['attributes'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStructureAllowableValues();
        if (!is_null($this->container['structure']) && !in_array($this->container['structure'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'structure', must be one of '%s'",
                $this->container['structure'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ((mb_strlen($this->container['file_name']) > 512)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be smaller than or equal to 512.";
        }

        if ((mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
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
     * Gets classifications
     *
     * @return string|null
     */
    public function getClassifications()
    {
        return $this->container['classifications'];
    }

    /**
     * Sets classifications
     *
     * @param string|null $classifications Exported IFC will include classifications from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include classifications(NONE)
     *
     * @return self
     */
    public function setClassifications($classifications)
    {
        $allowedValues = $this->getClassificationsAllowableValues();
        if (!is_null($classifications) && !in_array($classifications, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'classifications', must be one of '%s'",
                    $classifications,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['classifications'] = $classifications;

        return $this;
    }

    /**
     * Gets zones
     *
     * @return string|null
     */
    public function getZones()
    {
        return $this->container['zones'];
    }

    /**
     * Sets zones
     *
     * @param string|null $zones Exported IFC will include zones from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include zones(NONE)
     *
     * @return self
     */
    public function setZones($zones)
    {
        $allowedValues = $this->getZonesAllowableValues();
        if (!is_null($zones) && !in_array($zones, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'zones', must be one of '%s'",
                    $zones,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['zones'] = $zones;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string|null $properties Exported IFC will include properties from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include properties(NONE)
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $allowedValues = $this->getPropertiesAllowableValues();
        if (!is_null($properties) && !in_array($properties, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'properties', must be one of '%s'",
                    $properties,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets systems
     *
     * @return string|null
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     *
     * @param string|null $systems Exported IFC will include systems from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include systems(NONE)
     *
     * @return self
     */
    public function setSystems($systems)
    {
        $allowedValues = $this->getSystemsAllowableValues();
        if (!is_null($systems) && !in_array($systems, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'systems', must be one of '%s'",
                    $systems,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['systems'] = $systems;

        return $this;
    }

    /**
     * Gets layers
     *
     * @return string|null
     */
    public function getLayers()
    {
        return $this->container['layers'];
    }

    /**
     * Sets layers
     *
     * @param string|null $layers Exported IFC will include layers from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include layers(NONE)
     *
     * @return self
     */
    public function setLayers($layers)
    {
        $allowedValues = $this->getLayersAllowableValues();
        if (!is_null($layers) && !in_array($layers, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'layers', must be one of '%s'",
                    $layers,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['layers'] = $layers;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return string|null
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param string|null $materials Exported IFC will include materials from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include materials(NONE)
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        $allowedValues = $this->getMaterialsAllowableValues();
        if (!is_null($materials) && !in_array($materials, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'materials', must be one of '%s'",
                    $materials,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string|null $attributes Exported IFC will include attributes from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include attributes(NONE)
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $allowedValues = $this->getAttributesAllowableValues();
        if (!is_null($attributes) && !in_array($attributes, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'attributes', must be one of '%s'",
                    $attributes,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets structure
     *
     * @return string|null
     */
    public function getStructure()
    {
        return $this->container['structure'];
    }

    /**
     * Sets structure
     *
     * @param string|null $structure Exported IFC will include the structure from original IFC file (ORIGINAL), from latest API updates (UPDATED), or won't include structure(NONE)
     *
     * @return self
     */
    public function setStructure($structure)
    {
        $allowedValues = $this->getStructureAllowableValues();
        if (!is_null($structure) && !in_array($structure, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'structure', must be one of '%s'",
                    $structure,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['structure'] = $structure;

        return $this;
    }

    /**
     * Gets uuids
     *
     * @return string[]|null
     */
    public function getUuids()
    {
        return $this->container['uuids'];
    }

    /**
     * Sets uuids
     *
     * @param string[]|null $uuids Exported IFC will only have those elements. If omitted, all elements will be exported
     *
     * @return self
     */
    public function setUuids($uuids)
    {
        $this->container['uuids'] = $uuids;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name The name of the exported IFC file. It MUST end with .ifc or the exported file won't be processed by BIMData
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if ((mb_strlen($file_name) > 512)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling IfcExport., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($file_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling IfcExport., must be bigger than or equal to 1.');
        }

        $this->container['file_name'] = $file_name;

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

