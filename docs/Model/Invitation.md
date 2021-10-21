# # Invitation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**client_id** | **string** |  | [optional] [readonly]
**redirect_uri** | **string** | User will be redirected to this uri when they accept the invitation |
**cloud_name** | **string** |  |
**cloud_role** | **int** | Role the user will have when they accept the invitation |
**project_name** | **string** |  | [optional]
**project_role** | **int** | Role the user will have when they accept the invitation | [optional]
**email** | **string** | email of the user to invite |
**status** | **string** | A: Accepted D: Denied P: Pending | [optional]
**sender_provider_sub** | **string** | OIDC sub of the sender. The original sub from the provider is used instead of the broker sub | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
