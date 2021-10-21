# # Unit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**type** | **string** | IfcDerivedUnit, IfcContextDependentUnit, IfcConversionBasedUnit, IfcSIUnit or IfcMonetaryUnit |
**name** | **string** | Name of the unit (ex: DEGREE) | [optional]
**unit_type** | **string** | IFC type of the unit or user defined type (ex: PLANEANGLEUNIT for DEGREE and RADIAN) | [optional]
**prefix** | **string** | Litteral prefix for scale (ex: MILLI, KILO, etc..) | [optional]
**dimensions** | **float[]** | List of 7 units dimensions | [optional]
**conversion_factor** | **float** | Factor of conversion and base unit id (ex: DEGREE from RADIAN with factor 0.0174532925199433) | [optional]
**conversion_baseunit** | [**\OpenAPI\Client\Model\Unit**](Unit.md) |  | [optional]
**elements** | **object** | List of constitutive unit elements by id with corresponding exponent (ex: [meterID/1, secondID/-1] for velocity) | [optional]
**is_default** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
