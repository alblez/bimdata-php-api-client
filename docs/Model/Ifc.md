# # Ifc

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**name** | **string** |  | [optional] [readonly]
**creator** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**status** | **string** |  | [optional] [readonly]
**source** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional] [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**document_id** | **string** |  | [optional] [readonly]
**document** | [**\OpenAPI\Client\Model\Document**](Document.md) |  | [optional]
**structure_file** | **string** |  | [optional] [readonly]
**systems_file** | **string** |  | [optional] [readonly]
**map_file** | **string** |  | [optional] [readonly]
**gltf_file** | **string** |  | [optional] [readonly]
**bvh_tree_file** | **string** |  | [optional] [readonly]
**viewer_360_file** | **string** |  | [optional] [readonly]
**xkt_file** | **string** |  | [optional] [readonly]
**project_id** | **string** |  | [optional] [readonly]
**world_position** | **float[]** | [x,y,z] array of the position of the local_placement in world coordinates | [optional]
**errors** | **string[]** | List of errors that happened during IFC processing | [optional] [readonly]
**warnings** | **string[]** | List of warnings that happened during IFC processing | [optional] [readonly]
**archived** | **bool** |  | [optional]
**version** | **string** | This field is only for information. Updating it won&#39;t impact the export. | [optional]
**north_vector** | **float[][]** | This field is only for information. Updating it won&#39;t impact the export. | [optional]
**recommanded_2d_angle** | **float** | This is the angle in clockwise degree to apply on the 2D to optimise the horizontality of objects. This field is only for information. Updating it won&#39;t impact the export. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
