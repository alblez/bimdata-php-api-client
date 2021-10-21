# # RecursiveFolderChildren

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**parent_id** | **int** |  |
**created_by** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**creator** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**type** | **string** | Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Ifc&#39;. It is usefull to parse the tree and discriminate folders and files | [optional] [readonly]
**name** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**file_name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**size** | **int** |  | [optional]
**ifc_id** | **int** |  | [optional] [readonly]
**file** | **string** |  | [optional] [readonly]
**groups_permissions** | [**\OpenAPI\Client\Model\FolderGroupPermission[]**](FolderGroupPermission.md) | Groups permissions of folder | [optional] [readonly]
**default_permission** | **int** | Default permissions of folder | [optional] [readonly]
**user_permission** | **int** | Aggregate of group user permissions and folder default permission | [optional] [readonly]
**children** | [**\OpenAPI\Client\Model\RecursiveFolderChildren[]**](RecursiveFolderChildren.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
