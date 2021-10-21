# # MarketplaceApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**name** | **string** |  |
**short_description** | **string** |  |
**long_description** | **string** |  |
**activation_webhook_url** | **string** |  | [optional]
**post_activation_redirect_uri** | **string** |  | [optional]
**viewer_plugins_urls** | **string[]** |  | [optional]
**webhook_secret** | **string** |  | [optional]
**creator** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**scopes** | **string[]** |  | [optional] [readonly]
**settings_url** | **string** | this URL will be called with query params ?cloud_id&#x3D; | [optional]
**is_public** | **bool** |  | [optional]
**tags** | **string[]** |  | [optional]
**logo** | **string** |  | [optional] [readonly]
**images** | [**\OpenAPI\Client\Model\MarketplaceAppImage[]**](MarketplaceAppImage.md) |  | [optional] [readonly]
**organization_id** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
