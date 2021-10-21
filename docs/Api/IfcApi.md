# OpenAPI\Client\IfcApi

All URIs are relative to https://api.bimdata.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addIfcErrors()**](IfcApi.md#addIfcErrors) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/errors | Add errors to IFC
[**bulkDeleteIfcClassifications()**](IfcApi.md#bulkDeleteIfcClassifications) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements
[**bulkDeleteIfcProperties()**](IfcApi.md#bulkDeleteIfcProperties) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_destroy | Delete many Property of a model
[**bulkDeleteIfcPropertyDefinitions()**](IfcApi.md#bulkDeleteIfcPropertyDefinitions) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model
[**bulkDeleteIfcUnits()**](IfcApi.md#bulkDeleteIfcUnits) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/bulk_destroy | Delete many Units of a model
[**bulkDeletePropertySet()**](IfcApi.md#bulkDeletePropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model
[**bulkFullUpdateElements()**](IfcApi.md#bulkFullUpdateElements) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined)
[**bulkFullUpdateIfcProperty()**](IfcApi.md#bulkFullUpdateIfcProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update some fields of many properties of a model
[**bulkRemoveClassificationsOfElement()**](IfcApi.md#bulkRemoveClassificationsOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element
[**bulkRemoveElementsFromClassification()**](IfcApi.md#bulkRemoveElementsFromClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{ifc_classification_pk}/element/bulk_destroy | Remove the classifications from all elements
[**bulkUpdateElements()**](IfcApi.md#bulkUpdateElements) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (all field must be defined)
[**bulkUpdateIfcProperty()**](IfcApi.md#bulkUpdateIfcProperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update all fields of many properties of a model
[**createAccessToken()**](IfcApi.md#createAccessToken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Create a token for this model
[**createClassificationElementRelations()**](IfcApi.md#createClassificationElementRelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | Create association between existing classification and existing element
[**createClassificationsOfElement()**](IfcApi.md#createClassificationsOfElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Create one or many classifications to an element
[**createElement()**](IfcApi.md#createElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Create an element in the model
[**createElementPropertySet()**](IfcApi.md#createElementPropertySet) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element
[**createElementPropertySetProperty()**](IfcApi.md#createElementPropertySetProperty) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet
[**createElementPropertySetPropertyDefinition()**](IfcApi.md#createElementPropertySetPropertyDefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property
[**createElementPropertySetPropertyDefinitionUnit()**](IfcApi.md#createElementPropertySetPropertyDefinitionUnit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition
[**createIfcPropertyDefinition()**](IfcApi.md#createIfcPropertyDefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Create a PropertyDefinition on the model
[**createIfcUnit()**](IfcApi.md#createIfcUnit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Create a Unit on a model
[**createLayer()**](IfcApi.md#createLayer) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Create a layer in the model
[**createPropertySet()**](IfcApi.md#createPropertySet) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Create a PropertySet
[**createPropertySetElementRelations()**](IfcApi.md#createPropertySetElementRelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset-element | Create association between PropertySet and element
[**createRawElements()**](IfcApi.md#createRawElements) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Create elements in an optimized format
[**createSpace()**](IfcApi.md#createSpace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Create a space in the model
[**createSystem()**](IfcApi.md#createSystem) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Create a system in the model
[**createZone()**](IfcApi.md#createZone) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Create a zone in the model
[**createZoneSpace()**](IfcApi.md#createZoneSpace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Create a space in a zone
[**deleteAccessToken()**](IfcApi.md#deleteAccessToken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Delete a token
[**deleteElement()**](IfcApi.md#deleteElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Delete an element of a model
[**deleteIfc()**](IfcApi.md#deleteIfc) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Delete a model
[**deleteIfcProperty()**](IfcApi.md#deleteIfcProperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Delete a Property of a model
[**deleteIfcPropertyDefinition()**](IfcApi.md#deleteIfcPropertyDefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model
[**deleteIfcUnit()**](IfcApi.md#deleteIfcUnit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Delete a Unit of a model
[**deleteLayer()**](IfcApi.md#deleteLayer) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Delete a layer of a model
[**deletePropertySet()**](IfcApi.md#deletePropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Delete a PropertySet of a model
[**deleteSpace()**](IfcApi.md#deleteSpace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Delete a space
[**deleteSystem()**](IfcApi.md#deleteSystem) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Delete a system of a model
[**deleteZone()**](IfcApi.md#deleteZone) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Delete a zone of a model
[**deleteZoneSpace()**](IfcApi.md#deleteZoneSpace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone
[**exportIfc()**](IfcApi.md#exportIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/export | Export IFC
[**fullUpdateAccessToken()**](IfcApi.md#fullUpdateAccessToken) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update all fields of a token
[**fullUpdateElement()**](IfcApi.md#fullUpdateElement) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update all fields of an element
[**fullUpdateElementPropertySetProperty()**](IfcApi.md#fullUpdateElementPropertySetProperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
[**fullUpdateIfc()**](IfcApi.md#fullUpdateIfc) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update all fields of a model
[**fullUpdateIfcProperty()**](IfcApi.md#fullUpdateIfcProperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property
[**fullUpdateIfcPropertyDefinition()**](IfcApi.md#fullUpdateIfcPropertyDefinition) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update all fields of many PropertyDefinitions of a model
[**fullUpdateIfcUnit()**](IfcApi.md#fullUpdateIfcUnit) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update all fields of a Unit of a model
[**fullUpdateLayer()**](IfcApi.md#fullUpdateLayer) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update all fields of a layer
[**fullUpdateProcessorHandler()**](IfcApi.md#fullUpdateProcessorHandler) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler
[**fullUpdatePropertySet()**](IfcApi.md#fullUpdatePropertySet) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update all fields of a PropertySet
[**fullUpdateSpace()**](IfcApi.md#fullUpdateSpace) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update all fields of a space
[**fullUpdateSystem()**](IfcApi.md#fullUpdateSystem) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update all fields of a system
[**fullUpdateZone()**](IfcApi.md#fullUpdateZone) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update all fields of a zone
[**fullUpdateZoneSpace()**](IfcApi.md#fullUpdateZoneSpace) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update all fields of a space
[**getAccessToken()**](IfcApi.md#getAccessToken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Retrieve one token created for this model
[**getAccessTokens()**](IfcApi.md#getAccessTokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Retrieve all tokens created for this model
[**getClassificationsOfElement()**](IfcApi.md#getClassificationsOfElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element
[**getElement()**](IfcApi.md#getElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Retrieve an element of a model
[**getElementPropertySet()**](IfcApi.md#getElementPropertySet) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element
[**getElementPropertySetProperties()**](IfcApi.md#getElementPropertySetProperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet
[**getElementPropertySetProperty()**](IfcApi.md#getElementPropertySetProperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet
[**getElementPropertySetPropertyDefinition()**](IfcApi.md#getElementPropertySetPropertyDefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property
[**getElementPropertySetPropertyDefinitionUnit()**](IfcApi.md#getElementPropertySetPropertyDefinitionUnit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition
[**getElementPropertySetPropertyDefinitionUnits()**](IfcApi.md#getElementPropertySetPropertyDefinitionUnits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition
[**getElementPropertySetPropertyDefinitions()**](IfcApi.md#getElementPropertySetPropertyDefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet
[**getElementPropertySets()**](IfcApi.md#getElementPropertySets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element
[**getElements()**](IfcApi.md#getElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Retrieve all elements of a model
[**getElementsFromClassification()**](IfcApi.md#getElementsFromClassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{ifc_classification_pk}/element | Retrieve all elements with the classification
[**getIfc()**](IfcApi.md#getIfc) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Retrieve one model
[**getIfcBVH()**](IfcApi.md#getIfcBVH) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/map | Get svg file
[**getIfcClassifications()**](IfcApi.md#getIfcClassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification | Retrieve all classifications in a model
[**getIfcGLTF()**](IfcApi.md#getIfcGLTF) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/gltf | Get gltf file
[**getIfcMap()**](IfcApi.md#getIfcMap) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/bvh | Get bvh file
[**getIfcMaterial()**](IfcApi.md#getIfcMaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material/{id} | Retrieve a material of a model
[**getIfcMaterials()**](IfcApi.md#getIfcMaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material | Retrieve all materials of a model
[**getIfcProperties()**](IfcApi.md#getIfcProperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property | Retrieve all Properties of a model
[**getIfcProperty()**](IfcApi.md#getIfcProperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Retrieve a Property of a model
[**getIfcPropertyDefinition()**](IfcApi.md#getIfcPropertyDefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model
[**getIfcPropertyDefinitions()**](IfcApi.md#getIfcPropertyDefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model
[**getIfcStructure()**](IfcApi.md#getIfcStructure) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/structure | Get structure file
[**getIfcSystems()**](IfcApi.md#getIfcSystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/systems | Get systems file
[**getIfcUnit()**](IfcApi.md#getIfcUnit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Retrieve a Unit of a model
[**getIfcUnits()**](IfcApi.md#getIfcUnits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Retrieve all Units of a model
[**getIfcs()**](IfcApi.md#getIfcs) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc | Retrieve all models
[**getLayer()**](IfcApi.md#getLayer) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Retrieve a layer of a model
[**getLayers()**](IfcApi.md#getLayers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Retrieve all layers of a model
[**getMaterial()**](IfcApi.md#getMaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model
[**getMaterials()**](IfcApi.md#getMaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material | Retrieve all materials of a model
[**getProcessorHandler()**](IfcApi.md#getProcessorHandler) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Retrieve a processor handler
[**getProcessorHandlers()**](IfcApi.md#getProcessorHandlers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler | Get all processor handlers
[**getPropertySet()**](IfcApi.md#getPropertySet) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Retrieve a PropertySet of a model
[**getPropertySets()**](IfcApi.md#getPropertySets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Retrieve all PropertySets of a model
[**getRawElements()**](IfcApi.md#getRawElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Retrieve all elements in a optimized format
[**getSimpleElement()**](IfcApi.md#getSimpleElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation
[**getSimpleElements()**](IfcApi.md#getSimpleElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/simple | Retrieve all elements of a model with a simple value representation
[**getSpace()**](IfcApi.md#getSpace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Retrieve one space of the model
[**getSpaces()**](IfcApi.md#getSpaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Retrieve all spaces of the model
[**getSystem()**](IfcApi.md#getSystem) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Retrieve a system of a model
[**getSystems()**](IfcApi.md#getSystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Retrieve all systems of a model
[**getZone()**](IfcApi.md#getZone) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Retrieve one zone of a model
[**getZoneSpace()**](IfcApi.md#getZoneSpace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone
[**getZoneSpaces()**](IfcApi.md#getZoneSpaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone
[**getZones()**](IfcApi.md#getZones) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Retrieve zones of a model
[**listClassificationElementRelations()**](IfcApi.md#listClassificationElementRelations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | List all associations between classifications and elements
[**mergeIfcs()**](IfcApi.md#mergeIfcs) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/merge | Merge IFC files
[**optimizeIfc()**](IfcApi.md#optimizeIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/optimize | Optimize the IFC
[**removeAllElementPropertySet()**](IfcApi.md#removeAllElementPropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element
[**removeClassificationOfElement()**](IfcApi.md#removeClassificationOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element
[**removeElementPropertySet()**](IfcApi.md#removeElementPropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element
[**removeElementPropertySetProperty()**](IfcApi.md#removeElementPropertySetProperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet
[**removeElementPropertySetPropertyDefinition()**](IfcApi.md#removeElementPropertySetPropertyDefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Remove a Definition from a Property
[**removeElementPropertySetPropertyDefinitionUnit()**](IfcApi.md#removeElementPropertySetPropertyDefinitionUnit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition
[**removeElementsFromClassification()**](IfcApi.md#removeElementsFromClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{ifc_classification_pk}/element/{uuid} | Remove the classification from all elements
[**reprocessIfc()**](IfcApi.md#reprocessIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/reprocess | Reprocess IFC file
[**updateAccessToken()**](IfcApi.md#updateAccessToken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update some fields of a token
[**updateElement()**](IfcApi.md#updateElement) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update some fields of an element
[**updateElementPropertySetProperty()**](IfcApi.md#updateElementPropertySetProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
[**updateIfc()**](IfcApi.md#updateIfc) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update some fields of a model
[**updateIfcFiles()**](IfcApi.md#updateIfcFiles) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/files | Update models file (gltf, svg, structure, etc)
[**updateIfcProperty()**](IfcApi.md#updateIfcProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property
[**updateIfcPropertyDefinition()**](IfcApi.md#updateIfcPropertyDefinition) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model
[**updateIfcUnit()**](IfcApi.md#updateIfcUnit) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update some fields of a Unit of a model
[**updateLayer()**](IfcApi.md#updateLayer) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update some fields of a layer
[**updateProcessorHandler()**](IfcApi.md#updateProcessorHandler) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler
[**updatePropertySet()**](IfcApi.md#updatePropertySet) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update some fields of a PropertySet
[**updateSpace()**](IfcApi.md#updateSpace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update some fields of a space
[**updateSystem()**](IfcApi.md#updateSystem) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update some fields of a system
[**updateZone()**](IfcApi.md#updateZone) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update some fields of a zone
[**updateZoneSpace()**](IfcApi.md#updateZoneSpace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space


## `addIfcErrors()`

```php
addIfcErrors($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\IfcErrors
```

Add errors to IFC

IFC errors are warnings and errors during IFC process. They alert about missing elements or malformed files Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\IfcErrors(); // \OpenAPI\Client\Model\IfcErrors

try {
    $result = $apiInstance->addIfcErrors($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->addIfcErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcErrors**](../Model/IfcErrors.md)|  |

### Return type

[**\OpenAPI\Client\Model\IfcErrors**](../Model/IfcErrors.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcClassifications()`

```php
bulkDeleteIfcClassifications($cloud_pk, $ifc_pk, $project_pk)
```

Remove all classifications from model's elements

Delete relation between filtered classifications (eg. /classifications?name=untec) and all ifc's elements.             No classification will be deleted on this endpoint, only the relation between ifc's elements and their classification.  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkDeleteIfcClassifications($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcProperties()`

```php
bulkDeleteIfcProperties($cloud_pk, $ifc_pk, $project_pk)
```

Delete many Property of a model

Bulk delete.         You should send a list of ids in the body.         These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkDeleteIfcProperties($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcPropertyDefinitions()`

```php
bulkDeleteIfcPropertyDefinitions($cloud_pk, $ifc_pk, $project_pk)
```

Delete many PropertyDefinitions of a model

Bulk delete.         You should send a list of ids in the body.         These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkDeleteIfcPropertyDefinitions($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcPropertyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcUnits()`

```php
bulkDeleteIfcUnits($cloud_pk, $ifc_pk, $project_pk)
```

Delete many Units of a model

Bulk delete.         You should send a list of ids in the body.         These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkDeleteIfcUnits($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeletePropertySet()`

```php
bulkDeletePropertySet($cloud_pk, $ifc_pk, $project_pk)
```

Delete many PropertySet of a model

Bulk delete.         You should send a list of ids in the body.         These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkDeletePropertySet($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeletePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkFullUpdateElements()`

```php
bulkFullUpdateElements($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Element[]
```

Update many elements at once (only changing fields may be defined)

Bulk update.         Similar to update, but the body should be a list of objects to patch or put         The response will be a list (in the same order) of updated objects or of errors if any         If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Element()); // \OpenAPI\Client\Model\Element[]

try {
    $result = $apiInstance->bulkFullUpdateElements($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkFullUpdateElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)|  |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkFullUpdateIfcProperty()`

```php
bulkFullUpdateIfcProperty($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Property[]
```

Update some fields of many properties of a model

Bulk update.         Similar to update, but the body should be a list of objects to patch or put         The response will be a list (in the same order) of updated objects or of errors if any         If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Property()); // \OpenAPI\Client\Model\Property[]

try {
    $result = $apiInstance->bulkFullUpdateIfcProperty($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkFullUpdateIfcProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRemoveClassificationsOfElement()`

```php
bulkRemoveClassificationsOfElement($cloud_pk, $element_uuid, $ifc_pk, $project_pk)
```

Remove many classifications from an element

Bulk delete.         You should send a list of ids in the body.         These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkRemoveClassificationsOfElement($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkRemoveClassificationsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRemoveElementsFromClassification()`

```php
bulkRemoveElementsFromClassification($cloud_pk, $ifc_classification_pk, $ifc_pk, $project_pk)
```

Remove the classifications from all elements

Bulk delete.         You should send a list of ids in the body.         These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_classification_pk = 'ifc_classification_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->bulkRemoveElementsFromClassification($cloud_pk, $ifc_classification_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkRemoveElementsFromClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_classification_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateElements()`

```php
bulkUpdateElements($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Element[]
```

Update many elements at once (all field must be defined)

Bulk update.         Similar to update, but the body should be a list of objects to patch or put         The response will be a list (in the same order) of updated objects or of errors if any         If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Element()); // \OpenAPI\Client\Model\Element[]

try {
    $result = $apiInstance->bulkUpdateElements($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkUpdateElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)|  |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateIfcProperty()`

```php
bulkUpdateIfcProperty($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Property[]
```

Update all fields of many properties of a model

Bulk update.         Similar to update, but the body should be a list of objects to patch or put         The response will be a list (in the same order) of updated objects or of errors if any         If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Property()); // \OpenAPI\Client\Model\Property[]

try {
    $result = $apiInstance->bulkUpdateIfcProperty($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkUpdateIfcProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccessToken()`

```php
createAccessToken($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\IfcAccessToken
```

Create a token for this model

Tokens are read_only by default and are valid 1 day Required scopes: ifc:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\IfcAccessToken(); // \OpenAPI\Client\Model\IfcAccessToken

try {
    $result = $apiInstance->createAccessToken($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClassificationElementRelations()`

```php
createClassificationElementRelations($cloud_pk, $ifc_pk, $project_pk)
```

Create association between existing classification and existing element

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->createClassificationElementRelations($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createClassificationElementRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClassificationsOfElement()`

```php
createClassificationsOfElement($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Classification[]
```

Create one or many classifications to an element

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors      If classification created already exists, it will just be added to item's classifications and will not be duplicated  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Classification()); // \OpenAPI\Client\Model\Classification[]

try {
    $result = $apiInstance->createClassificationsOfElement($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createClassificationsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)|  |

### Return type

[**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElement()`

```php
createElement($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Element[]
```

Create an element in the model

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Element()); // \OpenAPI\Client\Model\Element[]

try {
    $result = $apiInstance->createElement($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)|  |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySet()`

```php
createElementPropertySet($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertySet
```

Create a PropertySets to an element

Create a PropertySets that will be automatically linked to the element Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\PropertySet(); // \OpenAPI\Client\Model\PropertySet

try {
    $result = $apiInstance->createElementPropertySet($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetProperty()`

```php
createElementPropertySetProperty($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk, $data): \OpenAPI\Client\Model\Property
```

Create a property to a PropertySet

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string
$data = new \OpenAPI\Client\Model\Property(); // \OpenAPI\Client\Model\Property

try {
    $result = $apiInstance->createElementPropertySetProperty($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **propertyset_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetPropertyDefinition()`

```php
createElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk, $data): \OpenAPI\Client\Model\PropertyDefinition
```

Create a Definition to a Property

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string
$data = new \OpenAPI\Client\Model\PropertyDefinition(); // \OpenAPI\Client\Model\PropertyDefinition

try {
    $result = $apiInstance->createElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertyset_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetPropertyDefinitionUnit()`

```php
createElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk, $data): \OpenAPI\Client\Model\Unit
```

Create a Unit to a Definition

Create a Unit to a Definition Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertydefinition_pk = 'propertydefinition_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string
$data = new \OpenAPI\Client\Model\Unit(); // \OpenAPI\Client\Model\Unit

try {
    $result = $apiInstance->createElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetPropertyDefinitionUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertydefinition_pk** | **string**|  |
 **propertyset_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)|  |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIfcPropertyDefinition()`

```php
createIfcPropertyDefinition($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertyDefinition[]
```

Create a PropertyDefinition on the model

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\PropertyDefinition()); // \OpenAPI\Client\Model\PropertyDefinition[]

try {
    $result = $apiInstance->createIfcPropertyDefinition($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createIfcPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIfcUnit()`

```php
createIfcUnit($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Unit[]
```

Create a Unit on a model

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Unit()); // \OpenAPI\Client\Model\Unit[]

try {
    $result = $apiInstance->createIfcUnit($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createIfcUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)|  |

### Return type

[**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLayer()`

```php
createLayer($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Layer
```

Create a layer in the model

The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Layer(); // \OpenAPI\Client\Model\Layer

try {
    $result = $apiInstance->createLayer($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)|  |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPropertySet()`

```php
createPropertySet($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertySet[]
```

Create a PropertySet

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\PropertySet()); // \OpenAPI\Client\Model\PropertySet[]

try {
    $result = $apiInstance->createPropertySet($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPropertySetElementRelations()`

```php
createPropertySetElementRelations($cloud_pk, $ifc_pk, $project_pk)
```

Create association between PropertySet and element

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->createPropertySetElementRelations($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createPropertySetElementRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRawElements()`

```php
createRawElements($cloud_pk, $ifc_pk, $project_pk, $data)
```

Create elements in an optimized format

You can use the same optimized structure to post multiple elements, property_sets, properties, definitions and units at once.         For performance reasons, we do not check the validity of the json. If the json is malformed, an error 500 without more explaination may be returned instead of a 400.  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\RawElements(); // \OpenAPI\Client\Model\RawElements

try {
    $apiInstance->createRawElements($cloud_pk, $ifc_pk, $project_pk, $data);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createRawElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\RawElements**](../Model/RawElements.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSpace()`

```php
createSpace($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Space[]
```

Create a space in the model

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Space()); // \OpenAPI\Client\Model\Space[]

try {
    $result = $apiInstance->createSpace($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Space[]**](../Model/Space.md)|  |

### Return type

[**\OpenAPI\Client\Model\Space[]**](../Model/Space.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSystem()`

```php
createSystem($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\System
```

Create a system in the model

The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\System(); // \OpenAPI\Client\Model\System

try {
    $result = $apiInstance->createSystem($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\System**](../Model/System.md)|  |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createZone()`

```php
createZone($cloud_pk, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Zone[]
```

Create a zone in the model

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Zone()); // \OpenAPI\Client\Model\Zone[]

try {
    $result = $apiInstance->createZone($cloud_pk, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Zone[]**](../Model/Zone.md)|  |

### Return type

[**\OpenAPI\Client\Model\Zone[]**](../Model/Zone.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createZoneSpace()`

```php
createZoneSpace($cloud_pk, $ifc_pk, $project_pk, $zone_pk, $data): \OpenAPI\Client\Model\ZoneSpace
```

Create a space in a zone

The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$zone_pk = 'zone_pk_example'; // string
$data = new \OpenAPI\Client\Model\ZoneSpace(); // \OpenAPI\Client\Model\ZoneSpace

try {
    $result = $apiInstance->createZoneSpace($cloud_pk, $ifc_pk, $project_pk, $zone_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **zone_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)|  |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccessToken()`

```php
deleteAccessToken($cloud_pk, $ifc_pk, $project_pk, $token)
```

Delete a token

Deleting a token will revoke it. Required scopes: ifc:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string

try {
    $apiInstance->deleteAccessToken($cloud_pk, $ifc_pk, $project_pk, $token);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteElement()`

```php
deleteElement($cloud_pk, $ifc_pk, $project_pk, $uuid)
```

Delete an element of a model

The IFC file will not be updated. The remaining elements are available in API and will be available when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC element or element type UUID

try {
    $apiInstance->deleteElement($cloud_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC element or element type UUID |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfc()`

```php
deleteIfc($cloud_pk, $id, $project_pk)
```

Delete a model

It will delete the related document too Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteIfc($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcProperty()`

```php
deleteIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a Property of a model

Delete a Property of a model Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcPropertyDefinition()`

```php
deleteIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a PropertyDefinitions of a model

Delete a PropertyDefinitions of a model Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcUnit()`

```php
deleteIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a Unit of a model

Delete a Unit of a model Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLayer()`

```php
deleteLayer($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a layer of a model

The IFC file will not be updated. The remaining layers are available in API and will be available when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteLayer($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePropertySet()`

```php
deletePropertySet($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a PropertySet of a model

Delete a PropertySet of a model Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deletePropertySet($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deletePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpace()`

```php
deleteSpace($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a space

It will not delete related zones. The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteSpace($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSystem()`

```php
deleteSystem($cloud_pk, $ifc_pk, $project_pk, $uuid)
```

Delete a system of a model

The IFC file will not be updated. The remaining systems are available in API and will be available when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC sytem or system type UUID

try {
    $apiInstance->deleteSystem($cloud_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC sytem or system type UUID |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteZone()`

```php
deleteZone($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a zone of a model

The IFC file will not be updated. The remaining zones are available in API and will be available when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteZone($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteZoneSpace()`

```php
deleteZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk)
```

Delete a space of a zone

The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$zone_pk = 'zone_pk_example'; // string

try {
    $apiInstance->deleteZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **zone_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportIfc()`

```php
exportIfc($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\IfcExport
```

Export IFC

Export IFC as requested in parameters. When the export is finished, a new IFC file with will be created in the same folder than the original IFC. You can query the folder or subscribe to the new document webhook to retrieve the result Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\IfcExport(); // \OpenAPI\Client\Model\IfcExport

try {
    $result = $apiInstance->exportIfc($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->exportIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcExport**](../Model/IfcExport.md)|  |

### Return type

[**\OpenAPI\Client\Model\IfcExport**](../Model/IfcExport.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateAccessToken()`

```php
fullUpdateAccessToken($cloud_pk, $ifc_pk, $project_pk, $token, $data): \OpenAPI\Client\Model\IfcAccessToken
```

Update all fields of a token

You can update the expiration date or the read_only field Required scopes: ifc:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string
$data = new \OpenAPI\Client\Model\IfcAccessToken(); // \OpenAPI\Client\Model\IfcAccessToken

try {
    $result = $apiInstance->fullUpdateAccessToken($cloud_pk, $ifc_pk, $project_pk, $token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateElement()`

```php
fullUpdateElement($cloud_pk, $ifc_pk, $project_pk, $uuid, $data): \OpenAPI\Client\Model\Element
```

Update all fields of an element

Update all fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC element or element type UUID
$data = new \OpenAPI\Client\Model\Element(); // \OpenAPI\Client\Model\Element

try {
    $result = $apiInstance->fullUpdateElement($cloud_pk, $ifc_pk, $project_pk, $uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC element or element type UUID |
 **data** | [**\OpenAPI\Client\Model\Element**](../Model/Element.md)|  |

### Return type

[**\OpenAPI\Client\Model\Element**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateElementPropertySetProperty()`

```php
fullUpdateElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk, $data): \OpenAPI\Client\Model\Property
```

Update a property from an element

Update a property value from an element. If the element is the only one to have this property, the property will be update in place. If many elements share this property, a new propertySet will be created to replace the propertyset for this element. Keeping the property for all other elements. If you want to update the property of all elements, see updateIfcProperty

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string
$data = new \OpenAPI\Client\Model\Property(); // \OpenAPI\Client\Model\Property

try {
    $result = $apiInstance->fullUpdateElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **propertyset_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateIfc()`

```php
fullUpdateIfc($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\Ifc
```

Update all fields of a model

Update all fields of a model Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Ifc(); // \OpenAPI\Client\Model\Ifc

try {
    $result = $apiInstance->fullUpdateIfc($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Ifc**](../Model/Ifc.md)|  |

### Return type

[**\OpenAPI\Client\Model\Ifc**](../Model/Ifc.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateIfcProperty()`

```php
fullUpdateIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Property
```

Update some fields of a Property

Update some fields of a Property Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Property(); // \OpenAPI\Client\Model\Property

try {
    $result = $apiInstance->fullUpdateIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateIfcProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateIfcPropertyDefinition()`

```php
fullUpdateIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertyDefinition
```

Update all fields of many PropertyDefinitions of a model

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\PropertyDefinition(); // \OpenAPI\Client\Model\PropertyDefinition

try {
    $result = $apiInstance->fullUpdateIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateIfcPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateIfcUnit()`

```php
fullUpdateIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Unit
```

Update all fields of a Unit of a model

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Unit(); // \OpenAPI\Client\Model\Unit

try {
    $result = $apiInstance->fullUpdateIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateIfcUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)|  |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateLayer()`

```php
fullUpdateLayer($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Layer
```

Update all fields of a layer

Update all fields of a layer. The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Layer(); // \OpenAPI\Client\Model\Layer

try {
    $result = $apiInstance->fullUpdateLayer($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)|  |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateProcessorHandler()`

```php
fullUpdateProcessorHandler($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\ProcessorHandler
```

Update the status of a processor handler

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this processor handler.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\ProcessorHandler(); // \OpenAPI\Client\Model\ProcessorHandler

try {
    $result = $apiInstance->fullUpdateProcessorHandler($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateProcessorHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this processor handler. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdatePropertySet()`

```php
fullUpdatePropertySet($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertySet
```

Update all fields of a PropertySet

Update all fields of a PropertySet Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\PropertySet(); // \OpenAPI\Client\Model\PropertySet

try {
    $result = $apiInstance->fullUpdatePropertySet($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdatePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateSpace()`

```php
fullUpdateSpace($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Space
```

Update all fields of a space

Update all fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Space(); // \OpenAPI\Client\Model\Space

try {
    $result = $apiInstance->fullUpdateSpace($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Space**](../Model/Space.md)|  |

### Return type

[**\OpenAPI\Client\Model\Space**](../Model/Space.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateSystem()`

```php
fullUpdateSystem($cloud_pk, $ifc_pk, $project_pk, $uuid, $data): \OpenAPI\Client\Model\System
```

Update all fields of a system

Update all fields of a system. The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC sytem or system type UUID
$data = new \OpenAPI\Client\Model\System(); // \OpenAPI\Client\Model\System

try {
    $result = $apiInstance->fullUpdateSystem($cloud_pk, $ifc_pk, $project_pk, $uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC sytem or system type UUID |
 **data** | [**\OpenAPI\Client\Model\System**](../Model/System.md)|  |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateZone()`

```php
fullUpdateZone($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Zone
```

Update all fields of a zone

Update all fields of a zone. The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Zone(); // \OpenAPI\Client\Model\Zone

try {
    $result = $apiInstance->fullUpdateZone($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)|  |

### Return type

[**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateZoneSpace()`

```php
fullUpdateZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk, $data): \OpenAPI\Client\Model\ZoneSpace
```

Update all fields of a space

Update all fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$zone_pk = 'zone_pk_example'; // string
$data = new \OpenAPI\Client\Model\ZoneSpace(); // \OpenAPI\Client\Model\ZoneSpace

try {
    $result = $apiInstance->fullUpdateZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **zone_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)|  |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessToken()`

```php
getAccessToken($cloud_pk, $ifc_pk, $project_pk, $token): \OpenAPI\Client\Model\IfcAccessToken
```

Retrieve one token created for this model

Retrieve one token created for this model Required scopes: ifc:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string

try {
    $result = $apiInstance->getAccessToken($cloud_pk, $ifc_pk, $project_pk, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessTokens()`

```php
getAccessTokens($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\IfcAccessToken[]
```

Retrieve all tokens created for this model

Retrieve all tokens created for this model Required scopes: ifc:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getAccessTokens($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getAccessTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken[]**](../Model/IfcAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassificationsOfElement()`

```php
getClassificationsOfElement($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
```

Retrieve all classifications of an element

Retrieve all classifications of an element Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getClassificationsOfElement($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getClassificationsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElement()`

```php
getElement($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Element
```

Retrieve an element of a model

Retrieve an element of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC element or element type UUID

try {
    $result = $apiInstance->getElement($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC element or element type UUID |

### Return type

[**\OpenAPI\Client\Model\Element**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySet()`

```php
getElementPropertySet($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet
```

Retrieve a PropertySet of an element

Retrieve a PropertySet of an element Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySet($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetProperties()`

```php
getElementPropertySetProperties($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk): \OpenAPI\Client\Model\Property[]
```

Retrieve all Properties of a PropertySet

Retrieve all Properties of a PropertySet Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySetProperties($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetProperty()`

```php
getElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk): \OpenAPI\Client\Model\Property
```

Retrieve a Property of a PropertySet

Retrieve a Property of a PropertySet Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinition()`

```php
getElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk): \OpenAPI\Client\Model\PropertyDefinition
```

Retrieve a Definition of a Property

Retrieve a Definition of a Property Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitionUnit()`

```php
getElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk): \OpenAPI\Client\Model\Unit
```

Retrieve a Unit of a Definition

Retrieve a Unit of a Definition Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertydefinition_pk = 'propertydefinition_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitionUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertydefinition_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitionUnits()`

```php
getElementPropertySetPropertyDefinitionUnits($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk): \OpenAPI\Client\Model\Unit[]
```

Retrieve all Units of a Definition

Retrieve all Units of a Definition Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertydefinition_pk = 'propertydefinition_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionUnits($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitionUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertydefinition_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitions()`

```php
getElementPropertySetPropertyDefinitions($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk): \OpenAPI\Client\Model\PropertyDefinition[]
```

Retrieve all Definitions of a PropertySet

Retrieve all Definitions of a PropertySet Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitions($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySets()`

```php
getElementPropertySets($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet[]
```

Retrieve all PropertySets of an element

Retrieve all PropertySets of an element Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getElementPropertySets($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElements()`

```php
getElements($cloud_pk, $ifc_pk, $project_pk, $type, $classification, $classification__notation): \OpenAPI\Client\Model\Element[]
```

Retrieve all elements of a model

Retrieve all elements of a model. If not filtered, the json may be very large. To efficently retrieve all elements and their data, see getRawElements Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$type = 'type_example'; // string | Filter the returned list by type
$classification = 'classification_example'; // string | Filter the returned list by classification
$classification__notation = 'classification__notation_example'; // string | Filter the returned list by classification__notation

try {
    $result = $apiInstance->getElements($cloud_pk, $ifc_pk, $project_pk, $type, $classification, $classification__notation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **type** | **string**| Filter the returned list by type | [optional]
 **classification** | **string**| Filter the returned list by classification | [optional]
 **classification__notation** | **string**| Filter the returned list by classification__notation | [optional]

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementsFromClassification()`

```php
getElementsFromClassification($cloud_pk, $ifc_classification_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Element[]
```

Retrieve all elements with the classification

Retrieve all elements with the classification Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_classification_pk = 'ifc_classification_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getElementsFromClassification($cloud_pk, $ifc_classification_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementsFromClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_classification_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfc()`

```php
getIfc($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\Ifc
```

Retrieve one model

Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfc($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Ifc**](../Model/Ifc.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcBVH()`

```php
getIfcBVH($cloud_pk, $id, $project_pk)
```

Get svg file

DEPRECATED: Now, retrieve the file url in the ifc object itself         Returns the map file  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->getIfcBVH($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcBVH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcClassifications()`

```php
getIfcClassifications($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
```

Retrieve all classifications in a model

Retrieve all classifications in a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcClassifications($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcGLTF()`

```php
getIfcGLTF($cloud_pk, $id, $project_pk)
```

Get gltf file

DEPRECATED: Now, retrieve the file url in the ifc object itself         Returns the gltf file  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->getIfcGLTF($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcGLTF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcMap()`

```php
getIfcMap($cloud_pk, $id, $project_pk)
```

Get bvh file

DEPRECATED: Now, retrieve the file url in the ifc object itself         Returns the bvh file  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->getIfcMap($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcMaterial()`

```php
getIfcMaterial($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material
```

Retrieve a material of a model

Retrieve a material of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this material.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcMaterial($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcMaterial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this material. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Material**](../Model/Material.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcMaterials()`

```php
getIfcMaterials($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material[]
```

Retrieve all materials of a model

Retrieve all materials of a model. Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcMaterials($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Material[]**](../Model/Material.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcProperties()`

```php
getIfcProperties($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Property[]
```

Retrieve all Properties of a model

Retrieve all PropertySets of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcProperties($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcProperty()`

```php
getIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Property
```

Retrieve a Property of a model

Retrieve a Property of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcPropertyDefinition()`

```php
getIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertyDefinition
```

Retrieve a PropertyDefinition of a model

Retrieve a PropertyDefinition of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcPropertyDefinitions()`

```php
getIfcPropertyDefinitions($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertyDefinition[]
```

Retrieve all PropertyDefinitions of a model

Retrieve all PropertyDefinitions of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcPropertyDefinitions($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcPropertyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcStructure()`

```php
getIfcStructure($cloud_pk, $id, $project_pk)
```

Get structure file

DEPRECATED: Now, retrieve the file url in the ifc object itself         Returns the structure file  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->getIfcStructure($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcSystems()`

```php
getIfcSystems($cloud_pk, $id, $project_pk)
```

Get systems file

DEPRECATED: Now, retrieve the file url in the ifc object itself         Returns the system file  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->getIfcSystems($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcUnit()`

```php
getIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Unit
```

Retrieve a Unit of a model

Retrieve a Unit of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcUnits()`

```php
getIfcUnits($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Unit[]
```

Retrieve all Units of a model

Retrieve all Units of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getIfcUnits($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcs()`

```php
getIfcs($cloud_pk, $project_pk, $status, $source): \OpenAPI\Client\Model\Ifc[]
```

Retrieve all models

Retrieve all models Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$status = 'status_example'; // string | Filter the returned list by status
$source = 'source_example'; // string | Filter the returned list by source

try {
    $result = $apiInstance->getIfcs($cloud_pk, $project_pk, $status, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **status** | **string**| Filter the returned list by status | [optional]
 **source** | **string**| Filter the returned list by source | [optional]

### Return type

[**\OpenAPI\Client\Model\Ifc[]**](../Model/Ifc.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayer()`

```php
getLayer($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Layer
```

Retrieve a layer of a model

Retrieve a layer of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getLayer($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayers()`

```php
getLayers($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Layer[]
```

Retrieve all layers of a model

Retrieve all layers of a model. Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getLayers($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getLayers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Layer[]**](../Model/Layer.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaterial()`

```php
getMaterial($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material
```

Retrieve a material of a model

Retrieve a material of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this material.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getMaterial($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getMaterial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this material. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Material**](../Model/Material.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaterials()`

```php
getMaterials($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material[]
```

Retrieve all materials of a model

Retrieve all materials of a model. Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getMaterials($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Material[]**](../Model/Material.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessorHandler()`

```php
getProcessorHandler($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\ProcessorHandler
```

Retrieve a processor handler

Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this processor handler.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getProcessorHandler($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getProcessorHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this processor handler. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessorHandlers()`

```php
getProcessorHandlers($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\ProcessorHandler[]
```

Get all processor handlers

Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getProcessorHandlers($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getProcessorHandlers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler[]**](../Model/ProcessorHandler.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertySet()`

```php
getPropertySet($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet
```

Retrieve a PropertySet of a model

Retrieve a PropertySet of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getPropertySet($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertySets()`

```php
getPropertySets($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet[]
```

Retrieve all PropertySets of a model

Retrieve all PropertySets of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getPropertySets($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getPropertySets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRawElements()`

```php
getRawElements($cloud_pk, $ifc_pk, $project_pk, $type, $classification, $classification__notation): \OpenAPI\Client\Model\RawElements
```

Retrieve all elements in a optimized format

Returns elements, property_sets, properties, definitions and units in a JSON optimized structure  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$type = 'type_example'; // string | Filter the returned list by type
$classification = 'classification_example'; // string | Filter the returned list by classification
$classification__notation = 'classification__notation_example'; // string | Filter the returned list by classification__notation

try {
    $result = $apiInstance->getRawElements($cloud_pk, $ifc_pk, $project_pk, $type, $classification, $classification__notation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getRawElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **type** | **string**| Filter the returned list by type | [optional]
 **classification** | **string**| Filter the returned list by classification | [optional]
 **classification__notation** | **string**| Filter the returned list by classification__notation | [optional]

### Return type

[**\OpenAPI\Client\Model\RawElements**](../Model/RawElements.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimpleElement()`

```php
getSimpleElement($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\SimpleElement
```

Retrieve an element of a model with a simple value representation

Retrieve an element of a model with a simple value representation         Format response :             {                 :element_uuid: {                     \"attributes\": {                         :property_name: value,                         :property_name: value                     },                     :property_set_name: {                         :property_name: value,                         :property_name: value                     }                 }             }  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC element or element type UUID

try {
    $result = $apiInstance->getSimpleElement($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSimpleElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC element or element type UUID |

### Return type

[**\OpenAPI\Client\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimpleElements()`

```php
getSimpleElements($cloud_pk, $ifc_pk, $project_pk, $type, $classification, $classification__notation): \OpenAPI\Client\Model\SimpleElement
```

Retrieve all elements of a model with a simple value representation

Retrieve all elements of a model with a simple value representation         Format response :             {                 :element_uuid: {                     \"attributes\": {                         :property_name: value,                         :property_name: value                     },                     :property_set_name: {                         :property_name: value,                         :property_name: value                     }                 }             }  Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$type = 'type_example'; // string | Filter the returned list by type
$classification = 'classification_example'; // string | Filter the returned list by classification
$classification__notation = 'classification__notation_example'; // string | Filter the returned list by classification__notation

try {
    $result = $apiInstance->getSimpleElements($cloud_pk, $ifc_pk, $project_pk, $type, $classification, $classification__notation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSimpleElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **type** | **string**| Filter the returned list by type | [optional]
 **classification** | **string**| Filter the returned list by classification | [optional]
 **classification__notation** | **string**| Filter the returned list by classification__notation | [optional]

### Return type

[**\OpenAPI\Client\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpace()`

```php
getSpace($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Space
```

Retrieve one space of the model

Retrieve one space of the model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getSpace($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Space**](../Model/Space.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpaces()`

```php
getSpaces($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Space[]
```

Retrieve all spaces of the model

Retrieve all spaces of the model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getSpaces($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Space[]**](../Model/Space.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystem()`

```php
getSystem($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\System
```

Retrieve a system of a model

Retrieve a system of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC sytem or system type UUID

try {
    $result = $apiInstance->getSystem($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC sytem or system type UUID |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystems()`

```php
getSystems($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\System[]
```

Retrieve all systems of a model

Retrieve all systems of a model. Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getSystems($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\System[]**](../Model/System.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZone()`

```php
getZone($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Zone
```

Retrieve one zone of a model

Retrieve one zone of a model Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getZone($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZoneSpace()`

```php
getZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk): \OpenAPI\Client\Model\ZoneSpace
```

Retrieve one space of a zone

Retrieve one space of a zone Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$zone_pk = 'zone_pk_example'; // string

try {
    $result = $apiInstance->getZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **zone_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZoneSpaces()`

```php
getZoneSpaces($cloud_pk, $ifc_pk, $project_pk, $zone_pk): \OpenAPI\Client\Model\ZoneSpace[]
```

Retrieve all spaces of a zone

Retrieve all spaces of a zone Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$zone_pk = 'zone_pk_example'; // string

try {
    $result = $apiInstance->getZoneSpaces($cloud_pk, $ifc_pk, $project_pk, $zone_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZoneSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **zone_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace[]**](../Model/ZoneSpace.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZones()`

```php
getZones($cloud_pk, $ifc_pk, $project_pk, $color): \OpenAPI\Client\Model\Zone[]
```

Retrieve zones of a model

Retrieve parent zones of a model. Children zones we'll be in the 'zones' field Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$color = 'color_example'; // string | Filter the returned list by color

try {
    $result = $apiInstance->getZones($cloud_pk, $ifc_pk, $project_pk, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **color** | **string**| Filter the returned list by color | [optional]

### Return type

[**\OpenAPI\Client\Model\Zone[]**](../Model/Zone.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listClassificationElementRelations()`

```php
listClassificationElementRelations($cloud_pk, $ifc_pk, $project_pk)
```

List all associations between classifications and elements

Required scopes: ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->listClassificationElementRelations($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->listClassificationElementRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeIfcs()`

```php
mergeIfcs($cloud_pk, $project_pk, $data)
```

Merge IFC files

Merge IFC files. The merged IFC file will be put in the same folder that the first IFC of the list Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\IfcMerge(); // \OpenAPI\Client\Model\IfcMerge

try {
    $apiInstance->mergeIfcs($cloud_pk, $project_pk, $data);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->mergeIfcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcMerge**](../Model/IfcMerge.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optimizeIfc()`

```php
optimizeIfc($cloud_pk, $id, $project_pk, $data)
```

Optimize the IFC

Optimize the IFC. A new optimized IFC file will be put in the same folder that the original IFC Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\IfcOptimize(); // \OpenAPI\Client\Model\IfcOptimize

try {
    $apiInstance->optimizeIfc($cloud_pk, $id, $project_pk, $data);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->optimizeIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcOptimize**](../Model/IfcOptimize.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAllElementPropertySet()`

```php
removeAllElementPropertySet($cloud_pk, $element_uuid, $ifc_pk, $project_pk)
```

Remove all property sets from element

Remove all property sets from element. Property Sets will not be deleted, just detached from element Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->removeAllElementPropertySet($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeAllElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeClassificationOfElement()`

```php
removeClassificationOfElement($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk)
```

Remove a classification from an element

The classification will not be deleted Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->removeClassificationOfElement($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeClassificationOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this classification. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySet()`

```php
removeElementPropertySet($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk)
```

Remove a PropertySet from an element

Delete the relation between the element and the property set. Does not delete any object Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->removeElementPropertySet($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetProperty()`

```php
removeElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk)
```

Remove a property from a PropertySet

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $apiInstance->removeElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetPropertyDefinition()`

```php
removeElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk)
```

Remove a Definition from a Property

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $apiInstance->removeElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetPropertyDefinitionUnit()`

```php
removeElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk)
```

Remove a Unit from a Definition

Remove a Unit from a Definition Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$property_pk = 'property_pk_example'; // string
$propertydefinition_pk = 'propertydefinition_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string

try {
    $apiInstance->removeElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetPropertyDefinitionUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **property_pk** | **string**|  |
 **propertydefinition_pk** | **string**|  |
 **propertyset_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementsFromClassification()`

```php
removeElementsFromClassification($cloud_pk, $ifc_classification_pk, $ifc_pk, $project_pk, $uuid)
```

Remove the classification from all elements

Remove the classification from all elements. No element nor classification will be deleted Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_classification_pk = 'ifc_classification_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC element or element type UUID

try {
    $apiInstance->removeElementsFromClassification($cloud_pk, $ifc_classification_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementsFromClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_classification_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC element or element type UUID |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reprocessIfc()`

```php
reprocessIfc($cloud_pk, $id, $project_pk)
```

Reprocess IFC file

Reprocess the IFC. All data that are not in the original IFC files will be lost Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->reprocessIfc($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->reprocessIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccessToken()`

```php
updateAccessToken($cloud_pk, $ifc_pk, $project_pk, $token, $data): \OpenAPI\Client\Model\IfcAccessToken
```

Update some fields of a token

You can update the expiration date or the read_only field Required scopes: ifc:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string
$data = new \OpenAPI\Client\Model\IfcAccessToken(); // \OpenAPI\Client\Model\IfcAccessToken

try {
    $result = $apiInstance->updateAccessToken($cloud_pk, $ifc_pk, $project_pk, $token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElement()`

```php
updateElement($cloud_pk, $ifc_pk, $project_pk, $uuid, $data): \OpenAPI\Client\Model\Element
```

Update some fields of an element

Update some fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC element or element type UUID
$data = new \OpenAPI\Client\Model\Element(); // \OpenAPI\Client\Model\Element

try {
    $result = $apiInstance->updateElement($cloud_pk, $ifc_pk, $project_pk, $uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC element or element type UUID |
 **data** | [**\OpenAPI\Client\Model\Element**](../Model/Element.md)|  |

### Return type

[**\OpenAPI\Client\Model\Element**](../Model/Element.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElementPropertySetProperty()`

```php
updateElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk, $data): \OpenAPI\Client\Model\Property
```

Update a property from an element

Update a property value from an element. If the element is the only one to have this property, the property will be update in place. If many elements share this property, a new property will be created to replace the property for this element. Keeping the property for all other elements. If you want to update the property of all elements, see updateIfcProperty Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$propertyset_pk = 'propertyset_pk_example'; // string
$data = new \OpenAPI\Client\Model\Property(); // \OpenAPI\Client\Model\Property

try {
    $result = $apiInstance->updateElementPropertySetProperty($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **element_uuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **propertyset_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfc()`

```php
updateIfc($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\Ifc
```

Update some fields of a model

Update some fields of a model Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Ifc(); // \OpenAPI\Client\Model\Ifc

try {
    $result = $apiInstance->updateIfc($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Ifc**](../Model/Ifc.md)|  |

### Return type

[**\OpenAPI\Client\Model\Ifc**](../Model/Ifc.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcFiles()`

```php
updateIfcFiles($cloud_pk, $id, $project_pk, $structure_file, $systems_file, $map_file, $gltf_file, $gltf_with_openings_file, $bvh_tree_file, $viewer_360_file, $xkt_file): \OpenAPI\Client\Model\IfcFiles
```

Update models file (gltf, svg, structure, etc)

Patch ifc files (gltf, structure, svg, etc)  Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this ifc.
$project_pk = 'project_pk_example'; // string
$structure_file = "/path/to/file.txt"; // \SplFileObject
$systems_file = "/path/to/file.txt"; // \SplFileObject
$map_file = "/path/to/file.txt"; // \SplFileObject
$gltf_file = "/path/to/file.txt"; // \SplFileObject
$gltf_with_openings_file = "/path/to/file.txt"; // \SplFileObject
$bvh_tree_file = "/path/to/file.txt"; // \SplFileObject
$viewer_360_file = "/path/to/file.txt"; // \SplFileObject
$xkt_file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateIfcFiles($cloud_pk, $id, $project_pk, $structure_file, $systems_file, $map_file, $gltf_file, $gltf_with_openings_file, $bvh_tree_file, $viewer_360_file, $xkt_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this ifc. |
 **project_pk** | **string**|  |
 **structure_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **systems_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **map_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **gltf_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **gltf_with_openings_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **bvh_tree_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **viewer_360_file** | **\SplFileObject****\SplFileObject**|  | [optional]
 **xkt_file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\IfcFiles**](../Model/IfcFiles.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcProperty()`

```php
updateIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Property
```

Update some fields of a Property

Update some fields of a Property Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Property(); // \OpenAPI\Client\Model\Property

try {
    $result = $apiInstance->updateIfcProperty($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Property**](../Model/Property.md)|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcPropertyDefinition()`

```php
updateIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertyDefinition
```

Update some fields of many PropertyDefinitions of a model

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\PropertyDefinition(); // \OpenAPI\Client\Model\PropertyDefinition

try {
    $result = $apiInstance->updateIfcPropertyDefinition($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcUnit()`

```php
updateIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Unit
```

Update some fields of a Unit of a model

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Unit(); // \OpenAPI\Client\Model\Unit

try {
    $result = $apiInstance->updateIfcUnit($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)|  |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLayer()`

```php
updateLayer($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Layer
```

Update some fields of a layer

Update some fields of a layer. The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Layer(); // \OpenAPI\Client\Model\Layer

try {
    $result = $apiInstance->updateLayer($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)|  |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessorHandler()`

```php
updateProcessorHandler($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\ProcessorHandler
```

Update the status of a processor handler

Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this processor handler.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\ProcessorHandler(); // \OpenAPI\Client\Model\ProcessorHandler

try {
    $result = $apiInstance->updateProcessorHandler($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateProcessorHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this processor handler. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePropertySet()`

```php
updatePropertySet($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\PropertySet
```

Update some fields of a PropertySet

Update some fields of a PropertySet Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\PropertySet(); // \OpenAPI\Client\Model\PropertySet

try {
    $result = $apiInstance->updatePropertySet($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updatePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)|  |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSpace()`

```php
updateSpace($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Space
```

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Space(); // \OpenAPI\Client\Model\Space

try {
    $result = $apiInstance->updateSpace($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Space**](../Model/Space.md)|  |

### Return type

[**\OpenAPI\Client\Model\Space**](../Model/Space.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSystem()`

```php
updateSystem($cloud_pk, $ifc_pk, $project_pk, $uuid, $data): \OpenAPI\Client\Model\System
```

Update some fields of a system

Update some fields of a system. The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$uuid = 'uuid_example'; // string | IFC sytem or system type UUID
$data = new \OpenAPI\Client\Model\System(); // \OpenAPI\Client\Model\System

try {
    $result = $apiInstance->updateSystem($cloud_pk, $ifc_pk, $project_pk, $uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **uuid** | **string**| IFC sytem or system type UUID |
 **data** | [**\OpenAPI\Client\Model\System**](../Model/System.md)|  |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZone()`

```php
updateZone($cloud_pk, $id, $ifc_pk, $project_pk, $data): \OpenAPI\Client\Model\Zone
```

Update some fields of a zone

Update some fields of a zone. The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Zone(); // \OpenAPI\Client\Model\Zone

try {
    $result = $apiInstance->updateZone($cloud_pk, $id, $ifc_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)|  |

### Return type

[**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZoneSpace()`

```php
updateZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk, $data): \OpenAPI\Client\Model\ZoneSpace
```

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file Required scopes: ifc:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 'ifc_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$zone_pk = 'zone_pk_example'; // string
$data = new \OpenAPI\Client\Model\ZoneSpace(); // \OpenAPI\Client\Model\ZoneSpace

try {
    $result = $apiInstance->updateZoneSpace($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this space. |
 **ifc_pk** | **string**|  |
 **project_pk** | **string**|  |
 **zone_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)|  |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
