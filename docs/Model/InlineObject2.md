# # InlineObject2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**parent_id** | **int** |  | [optional]
**type** | **string** | Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files | [optional] [readonly]
**name** | **string** | Name of the folder |
**created_at** | **\DateTime** | Creation date | [optional] [readonly]
**updated_at** | **\DateTime** | Date of the last update | [optional] [readonly]
**created_by** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**groups_permissions** | [**\OpenAPI\Client\Model\FolderGroupPermission[]**](FolderGroupPermission.md) |  | [optional] [readonly]
**default_permission** | **int** | Permission for a Folder | [optional]
**user_permission** | **int** | Aggregate of group user permissions and folder default permission | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
