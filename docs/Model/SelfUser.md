# # SelfUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**email** | **string** |  |
**firstname** | **string** |  |
**lastname** | **string** |  |
**created_at** | **\DateTime** |  | [optional] [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**organizations** | [**\OpenAPI\Client\Model\Organization[]**](Organization.md) |  | [optional] [readonly]
**clouds** | [**\OpenAPI\Client\Model\CloudRole[]**](CloudRole.md) |  | [optional] [readonly]
**projects** | [**\OpenAPI\Client\Model\ProjectRole[]**](ProjectRole.md) |  | [optional] [readonly]
**provider** | **string** |  | [optional] [readonly]
**provider_sub** | **string** | sub from original identity provider | [optional]
**sub** | **string** | sub from Keycloak | [optional] [readonly]
**profile_picture** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
