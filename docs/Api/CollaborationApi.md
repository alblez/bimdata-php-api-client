# OpenAPI\Client\CollaborationApi

All URIs are relative to https://api.bimdata.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupMember()**](CollaborationApi.md#addGroupMember) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member | Add a user to a group
[**cancelCloudUserInvitation()**](CollaborationApi.md#cancelCloudUserInvitation) | **DELETE** /cloud/{cloud_pk}/invitation/{id} | Cancel a pending invitation
[**cancelProjectUserInvitation()**](CollaborationApi.md#cancelProjectUserInvitation) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/invitation/{id} | Cancel a pending invitation
[**checkAccess()**](CollaborationApi.md#checkAccess) | **GET** /cloud/{id}/check-access | Check app access from cloud
[**createClassification()**](CollaborationApi.md#createClassification) | **POST** /cloud/{cloud_pk}/project/{project_pk}/classification | Create a classification
[**createCloud()**](CollaborationApi.md#createCloud) | **POST** /cloud | Create a cloud
[**createDMSTree()**](CollaborationApi.md#createDMSTree) | **POST** /cloud/{cloud_pk}/project/{id}/dms-tree | Create a complete DMS tree
[**createDemo()**](CollaborationApi.md#createDemo) | **POST** /cloud/{id}/create-demo | Create a Demo project in a cloud
[**createDocument()**](CollaborationApi.md#createDocument) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document | Create a document
[**createFolder()**](CollaborationApi.md#createFolder) | **POST** /cloud/{cloud_pk}/project/{project_pk}/folder | Create a folder
[**createManageGroup()**](CollaborationApi.md#createManageGroup) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group | Create a group
[**createProject()**](CollaborationApi.md#createProject) | **POST** /cloud/{cloud_pk}/project | Create a project
[**createProjectAccessToken()**](CollaborationApi.md#createProjectAccessToken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/access-token | Create a token for this project
[**deleteClassification()**](CollaborationApi.md#deleteClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Delete a classification
[**deleteCloud()**](CollaborationApi.md#deleteCloud) | **DELETE** /cloud/{id} | Delete a cloud
[**deleteCloudUser()**](CollaborationApi.md#deleteCloudUser) | **DELETE** /cloud/{cloud_pk}/user/{id} | Remove a user from a cloud
[**deleteDocument()**](CollaborationApi.md#deleteDocument) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Delete the document
[**deleteFolder()**](CollaborationApi.md#deleteFolder) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Delete a folder
[**deleteGroupMember()**](CollaborationApi.md#deleteGroupMember) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member/{id} | Delete a user from a group
[**deleteManageGroup()**](CollaborationApi.md#deleteManageGroup) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Delete a group
[**deleteProject()**](CollaborationApi.md#deleteProject) | **DELETE** /cloud/{cloud_pk}/project/{id} | Delete a project
[**deleteProjectAccessToken()**](CollaborationApi.md#deleteProjectAccessToken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Delete a token
[**deleteProjectUser()**](CollaborationApi.md#deleteProjectUser) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Remove a user from a project
[**fullUpdateClassification()**](CollaborationApi.md#fullUpdateClassification) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Update all fields of a classification
[**fullUpdateCloud()**](CollaborationApi.md#fullUpdateCloud) | **PUT** /cloud/{id} | Update all fields of a cloud
[**fullUpdateCloudUser()**](CollaborationApi.md#fullUpdateCloudUser) | **PUT** /cloud/{cloud_pk}/user/{id} | Update all fields of a cloud user
[**fullUpdateDocument()**](CollaborationApi.md#fullUpdateDocument) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Update all fields of the document
[**fullUpdateFolder()**](CollaborationApi.md#fullUpdateFolder) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Update all fields of a folder
[**fullUpdateGroupFolder()**](CollaborationApi.md#fullUpdateGroupFolder) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/group/{id} | Update the permission of a group on a folder
[**fullUpdateManageGroup()**](CollaborationApi.md#fullUpdateManageGroup) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Update all fields of a group
[**fullUpdateProject()**](CollaborationApi.md#fullUpdateProject) | **PUT** /cloud/{cloud_pk}/project/{id} | Update all fields of a project
[**fullUpdateProjectAccessToken()**](CollaborationApi.md#fullUpdateProjectAccessToken) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Update all fields of a token
[**fullUpdateProjectUser()**](CollaborationApi.md#fullUpdateProjectUser) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Update all fields of a project user
[**getClassification()**](CollaborationApi.md#getClassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Retrieve a classification
[**getClassifications()**](CollaborationApi.md#getClassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification | Retrieve all classifications
[**getCloud()**](CollaborationApi.md#getCloud) | **GET** /cloud/{id} | Retrieve one cloud
[**getCloudInvitations()**](CollaborationApi.md#getCloudInvitations) | **GET** /cloud/{cloud_pk}/invitation | Retrieve all pending invitations in the cloud
[**getCloudSize()**](CollaborationApi.md#getCloudSize) | **GET** /cloud/{id}/size | Get size of all ifc files in the cloud
[**getCloudUser()**](CollaborationApi.md#getCloudUser) | **GET** /cloud/{cloud_pk}/user/{id} | Retrieve a user in a cloud
[**getCloudUsers()**](CollaborationApi.md#getCloudUsers) | **GET** /cloud/{cloud_pk}/user | Retrieve all users in a cloud, or a list with a filter by email
[**getClouds()**](CollaborationApi.md#getClouds) | **GET** /cloud | Retrieve all clouds
[**getDocument()**](CollaborationApi.md#getDocument) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Retrieve a document
[**getDocuments()**](CollaborationApi.md#getDocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document | Retrieve all documents
[**getFolder()**](CollaborationApi.md#getFolder) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Retrieve a folder
[**getFolders()**](CollaborationApi.md#getFolders) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder | Retrieve all folders
[**getGroup()**](CollaborationApi.md#getGroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group/{id} | Retrieve a group
[**getGroups()**](CollaborationApi.md#getGroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group | Retrieve all groups
[**getManageGroup()**](CollaborationApi.md#getManageGroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Retrieve a group
[**getManageGroups()**](CollaborationApi.md#getManageGroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group | Retrieve all groups
[**getProject()**](CollaborationApi.md#getProject) | **GET** /cloud/{cloud_pk}/project/{id} | Retrieve a project
[**getProjectAccessToken()**](CollaborationApi.md#getProjectAccessToken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Retrieve one token created for this project
[**getProjectAccessTokens()**](CollaborationApi.md#getProjectAccessTokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token | Retrieve all tokens created for this project
[**getProjectDMSTree()**](CollaborationApi.md#getProjectDMSTree) | **GET** /cloud/{cloud_pk}/project/{id}/dms-tree | Retrieve the complete DMS tree
[**getProjectInvitations()**](CollaborationApi.md#getProjectInvitations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/invitation | Retrieve all pending invitations in the project
[**getProjectSubTree()**](CollaborationApi.md#getProjectSubTree) | **GET** /cloud/{cloud_pk}/project/subtree | Retrieve the complete projects tree of the cloud
[**getProjectUser()**](CollaborationApi.md#getProjectUser) | **GET** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Retrieve a user in a project
[**getProjectUsers()**](CollaborationApi.md#getProjectUsers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/user | Retrieve all users in a project, or a list with a filter by email
[**getProject_0()**](CollaborationApi.md#getProject_0) | **GET** /cloud/{cloud_pk}/project/{id}/tree | Retrieve a project
[**getProjects()**](CollaborationApi.md#getProjects) | **GET** /cloud/{cloud_pk}/project | Retrieve all projects
[**getSelfProjects()**](CollaborationApi.md#getSelfProjects) | **GET** /user/projects | List current user&#39;s projects
[**getSelfUser()**](CollaborationApi.md#getSelfUser) | **GET** /user | Get info about the current user
[**inviteCloudUser()**](CollaborationApi.md#inviteCloudUser) | **POST** /cloud/{cloud_pk}/invitation | Invite a cloud administrator
[**inviteProjectUser()**](CollaborationApi.md#inviteProjectUser) | **POST** /cloud/{cloud_pk}/project/{project_pk}/invitation | Invite a project member
[**updateClassification()**](CollaborationApi.md#updateClassification) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Update some fields of a classification
[**updateCloud()**](CollaborationApi.md#updateCloud) | **PATCH** /cloud/{id} | Update some fields of a cloud
[**updateCloudUser()**](CollaborationApi.md#updateCloudUser) | **PATCH** /cloud/{cloud_pk}/user/{id} | Update some fields of a cloud user
[**updateDocument()**](CollaborationApi.md#updateDocument) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Update some fields of the document
[**updateFolder()**](CollaborationApi.md#updateFolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Update some fields of a folder
[**updateGroupFolder()**](CollaborationApi.md#updateGroupFolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/group/{id} | Update the permission of a group on a folder
[**updateManageGroup()**](CollaborationApi.md#updateManageGroup) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Update some fields of a group
[**updateProject()**](CollaborationApi.md#updateProject) | **PATCH** /cloud/{cloud_pk}/project/{id} | Update some fields of a project
[**updateProjectAccessToken()**](CollaborationApi.md#updateProjectAccessToken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Update some fields of a token
[**updateProjectUser()**](CollaborationApi.md#updateProjectUser) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Update some fields of a project user
[**updateSelfUser()**](CollaborationApi.md#updateSelfUser) | **PATCH** /user | Update info of the current user


## `addGroupMember()`

```php
addGroupMember($cloud_pk, $group_pk, $project_pk, $data): \OpenAPI\Client\Model\User
```

Add a user to a group

Add a user to a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$group_pk = 'group_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\FosUserId(); // \OpenAPI\Client\Model\FosUserId

try {
    $result = $apiInstance->addGroupMember($cloud_pk, $group_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->addGroupMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **group_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\FosUserId**](../Model/FosUserId.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelCloudUserInvitation()`

```php
cancelCloudUserInvitation($cloud_pk, $id)
```

Cancel a pending invitation

Cancel a pending invitation Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this invitation.

try {
    $apiInstance->cancelCloudUserInvitation($cloud_pk, $id);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->cancelCloudUserInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this invitation. |

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

## `cancelProjectUserInvitation()`

```php
cancelProjectUserInvitation($cloud_pk, $id, $project_pk)
```

Cancel a pending invitation

Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this invitation.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->cancelProjectUserInvitation($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->cancelProjectUserInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this invitation. |
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

## `checkAccess()`

```php
checkAccess($id)
```

Check app access from cloud

Return code 200 if the cloud has access to the marketplace app

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.

try {
    $apiInstance->checkAccess($id);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->checkAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

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

## `createClassification()`

```php
createClassification($cloud_pk, $project_pk, $data): \OpenAPI\Client\Model\Classification[]
```

Create a classification

Bulk create available.         You can either post an object or a list of objects.         Is you post a list, the response will be a list (in the same order) of created objects or of errors if any         If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors      If created classification already exists, it will not be duplicated and the previous one will be returned.     You also can add a 'classification' filter on this endpoint. By ex: /classification?name='untec'. The name is case sensitive  Required scopes: ifc:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = array(new \OpenAPI\Client\Model\Classification()); // \OpenAPI\Client\Model\Classification[]

try {
    $result = $apiInstance->createClassification($cloud_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
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

## `createCloud()`

```php
createCloud($data): \OpenAPI\Client\Model\Cloud
```

Create a cloud

Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\Cloud(); // \OpenAPI\Client\Model\Cloud

try {
    $result = $apiInstance->createCloud($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createCloud: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)|  |

### Return type

[**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDMSTree()`

```php
createDMSTree($cloud_pk, $id, $data)
```

Create a complete DMS tree

Create a DMS structure of folder                 Format request :                     [{                         \"name\": :name:                         \"parent_id\": :parent_id:                      # optionnal                         \"default_permission\": :default_permission:    # optionnal                         \"children\": [{                                # optionnal                             \"name\": :name:,                             \"children\": []                         }]                     }],  Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.
$data = new \OpenAPI\Client\Model\Folder(); // \OpenAPI\Client\Model\Folder

try {
    $apiInstance->createDMSTree($cloud_pk, $id, $data);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createDMSTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |
 **data** | [**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)|  |

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

## `createDemo()`

```php
createDemo($id): \OpenAPI\Client\Model\Project
```

Create a Demo project in a cloud

Create a demo project with a pre-populated IFC and its data Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.

try {
    $result = $apiInstance->createDemo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createDemo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($cloud_pk, $project_pk, $name, $file, $parent, $parent_id, $creator, $file_name, $description, $size, $ifc_source): \OpenAPI\Client\Model\Document
```

Create a document

RCreate a document. If the document is an IFC, an IFC model will be created and attached to this document Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$name = 'name_example'; // string | Shown name of the file
$file = "/path/to/file.txt"; // \SplFileObject
$parent = 56; // int
$parent_id = 56; // int
$creator = 56; // int
$file_name = 'file_name_example'; // string | Full name of the file
$description = 'description_example'; // string | Description of the file
$size = 56; // int | Size of the file.
$ifc_source = 'ifc_source_example'; // string | Define the ifc.source field if the upload is an IFC

try {
    $result = $apiInstance->createDocument($cloud_pk, $project_pk, $name, $file, $parent, $parent_id, $creator, $file_name, $description, $size, $ifc_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **name** | **string**| Shown name of the file |
 **file** | **\SplFileObject****\SplFileObject**|  |
 **parent** | **int**|  | [optional]
 **parent_id** | **int**|  | [optional]
 **creator** | **int**|  | [optional]
 **file_name** | **string**| Full name of the file | [optional]
 **description** | **string**| Description of the file | [optional]
 **size** | **int**| Size of the file. | [optional]
 **ifc_source** | **string**| Define the ifc.source field if the upload is an IFC | [optional]

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFolder()`

```php
createFolder($cloud_pk, $project_pk, $data): \OpenAPI\Client\Model\InlineObject
```

Create a folder

If the created folder have no parent, it will be put as a child of the default root folder of the project Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->createFolder($cloud_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createManageGroup()`

```php
createManageGroup($cloud_pk, $project_pk, $data): \OpenAPI\Client\Model\InlineObject3
```

Create a group

Create a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $result = $apiInstance->createManageGroup($cloud_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createManageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProject()`

```php
createProject($cloud_pk, $data): \OpenAPI\Client\Model\Project
```

Create a project

Create a project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$data = new \OpenAPI\Client\Model\Project(); // \OpenAPI\Client\Model\Project

try {
    $result = $apiInstance->createProject($cloud_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Project**](../Model/Project.md)|  |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProjectAccessToken()`

```php
createProjectAccessToken($cloud_pk, $project_pk, $data): \OpenAPI\Client\Model\ProjectAccessToken
```

Create a token for this project

Tokens are valid 1 day by default Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\ProjectAccessToken(); // \OpenAPI\Client\Model\ProjectAccessToken

try {
    $result = $apiInstance->createProjectAccessToken($cloud_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->createProjectAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteClassification()`

```php
deleteClassification($cloud_pk, $id, $project_pk)
```

Delete a classification

All elements having this classification will lose it Required scopes: ifc:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteClassification($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this classification. |
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

## `deleteCloud()`

```php
deleteCloud($id)
```

Delete a cloud

Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.

try {
    $apiInstance->deleteCloud($id);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteCloud: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

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

## `deleteCloudUser()`

```php
deleteCloudUser($cloud_pk, $id)
```

Remove a user from a cloud

The user will also be removed from all the projects of the cloud Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.

try {
    $apiInstance->deleteCloudUser($cloud_pk, $id);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteCloudUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |

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

## `deleteDocument()`

```php
deleteDocument($cloud_pk, $id, $project_pk)
```

Delete the document

Delete the document Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this document.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteDocument($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this document. |
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

## `deleteFolder()`

```php
deleteFolder($cloud_pk, $id, $project_pk)
```

Delete a folder

All files and subfolders will be deleted too. If folder is a project's root folder, only children are deleted Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this folder.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteFolder($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this folder. |
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

## `deleteGroupMember()`

```php
deleteGroupMember($cloud_pk, $group_pk, $id, $project_pk)
```

Delete a user from a group

Delete a user from a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$group_pk = 'group_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteGroupMember($cloud_pk, $group_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteGroupMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **group_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
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

## `deleteManageGroup()`

```php
deleteManageGroup($cloud_pk, $id, $project_pk)
```

Delete a group

Delete a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteManageGroup($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteManageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group. |
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

## `deleteProject()`

```php
deleteProject($cloud_pk, $id)
```

Delete a project

It can take a long time to respond because we may need to delete all properties of all elements of all models in the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteProject($cloud_pk, $id);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |

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

## `deleteProjectAccessToken()`

```php
deleteProjectAccessToken($cloud_pk, $project_pk, $token)
```

Delete a token

Deleting a token will revoke it Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string

try {
    $apiInstance->deleteProjectAccessToken($cloud_pk, $project_pk, $token);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteProjectAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
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

## `deleteProjectUser()`

```php
deleteProjectUser($cloud_pk, $id, $project_pk)
```

Remove a user from a project

Remove a user from a project Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$project_pk = 'project_pk_example'; // string

try {
    $apiInstance->deleteProjectUser($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->deleteProjectUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
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

## `fullUpdateClassification()`

```php
fullUpdateClassification($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\Classification
```

Update all fields of a classification

Update all fields of a classification Required scopes: ifc:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Classification(); // \OpenAPI\Client\Model\Classification

try {
    $result = $apiInstance->fullUpdateClassification($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this classification. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Classification**](../Model/Classification.md)|  |

### Return type

[**\OpenAPI\Client\Model\Classification**](../Model/Classification.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateCloud()`

```php
fullUpdateCloud($id, $data): \OpenAPI\Client\Model\Cloud
```

Update all fields of a cloud

Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.
$data = new \OpenAPI\Client\Model\Cloud(); // \OpenAPI\Client\Model\Cloud

try {
    $result = $apiInstance->fullUpdateCloud($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateCloud: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |
 **data** | [**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)|  |

### Return type

[**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateCloudUser()`

```php
fullUpdateCloudUser($cloud_pk, $id, $data): \OpenAPI\Client\Model\User
```

Update all fields of a cloud user

Change the user role in the cloud Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$data = new \OpenAPI\Client\Model\UserCloudUpdate(); // \OpenAPI\Client\Model\UserCloudUpdate

try {
    $result = $apiInstance->fullUpdateCloudUser($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateCloudUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
 **data** | [**\OpenAPI\Client\Model\UserCloudUpdate**](../Model/UserCloudUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateDocument()`

```php
fullUpdateDocument($cloud_pk, $id, $project_pk, $name, $file, $parent, $parent_id, $creator, $file_name, $description, $size, $ifc_source): \OpenAPI\Client\Model\Document
```

Update all fields of the document

Update all fields of the document Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this document.
$project_pk = 'project_pk_example'; // string
$name = 'name_example'; // string | Shown name of the file
$file = "/path/to/file.txt"; // \SplFileObject
$parent = 56; // int
$parent_id = 56; // int
$creator = 56; // int
$file_name = 'file_name_example'; // string | Full name of the file
$description = 'description_example'; // string | Description of the file
$size = 56; // int | Size of the file.
$ifc_source = 'ifc_source_example'; // string | Define the ifc.source field if the upload is an IFC

try {
    $result = $apiInstance->fullUpdateDocument($cloud_pk, $id, $project_pk, $name, $file, $parent, $parent_id, $creator, $file_name, $description, $size, $ifc_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this document. |
 **project_pk** | **string**|  |
 **name** | **string**| Shown name of the file |
 **file** | **\SplFileObject****\SplFileObject**|  |
 **parent** | **int**|  | [optional]
 **parent_id** | **int**|  | [optional]
 **creator** | **int**|  | [optional]
 **file_name** | **string**| Full name of the file | [optional]
 **description** | **string**| Description of the file | [optional]
 **size** | **int**| Size of the file. | [optional]
 **ifc_source** | **string**| Define the ifc.source field if the upload is an IFC | [optional]

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateFolder()`

```php
fullUpdateFolder($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\InlineObject1
```

Update all fields of a folder

Update all fields of a folder. Only project admins can update the `default_permission` field Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this folder.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $result = $apiInstance->fullUpdateFolder($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this folder. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateGroupFolder()`

```php
fullUpdateGroupFolder($cloud_pk, $folder_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\GroupFolder
```

Update the permission of a group on a folder

Update the permission of a group on a folder.             0: ACCESS_DENIED,             50: READ_ONLY,             100: READ_WRTIE  Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$folder_pk = 'folder_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group folder.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\GroupFolder(); // \OpenAPI\Client\Model\GroupFolder

try {
    $result = $apiInstance->fullUpdateGroupFolder($cloud_pk, $folder_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateGroupFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **folder_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group folder. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\GroupFolder**](../Model/GroupFolder.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupFolder**](../Model/GroupFolder.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateManageGroup()`

```php
fullUpdateManageGroup($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\InlineObject4
```

Update all fields of a group

Update all fields of a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4

try {
    $result = $apiInstance->fullUpdateManageGroup($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateManageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateProject()`

```php
fullUpdateProject($cloud_pk, $id, $data): \OpenAPI\Client\Model\Project
```

Update all fields of a project

Update all fields of a project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.
$data = new \OpenAPI\Client\Model\Project(); // \OpenAPI\Client\Model\Project

try {
    $result = $apiInstance->fullUpdateProject($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |
 **data** | [**\OpenAPI\Client\Model\Project**](../Model/Project.md)|  |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateProjectAccessToken()`

```php
fullUpdateProjectAccessToken($cloud_pk, $project_pk, $token, $data): \OpenAPI\Client\Model\ProjectAccessToken
```

Update all fields of a token

You can update the expiration date field Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string
$data = new \OpenAPI\Client\Model\ProjectAccessToken(); // \OpenAPI\Client\Model\ProjectAccessToken

try {
    $result = $apiInstance->fullUpdateProjectAccessToken($cloud_pk, $project_pk, $token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateProjectAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateProjectUser()`

```php
fullUpdateProjectUser($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\User
```

Update all fields of a project user

Change the user role in the cloud Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\UserProjectUpdate(); // \OpenAPI\Client\Model\UserProjectUpdate

try {
    $result = $apiInstance->fullUpdateProjectUser($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->fullUpdateProjectUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\UserProjectUpdate**](../Model/UserProjectUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassification()`

```php
getClassification($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\Classification
```

Retrieve a classification

Retrieve a classification Required scopes: ifc:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getClassification($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this classification. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Classification**](../Model/Classification.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifications()`

```php
getClassifications($cloud_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
```

Retrieve all classifications

Retrieve all classifications of all models in the project Required scopes: ifc:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getClassifications($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
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

## `getCloud()`

```php
getCloud($id): \OpenAPI\Client\Model\Cloud
```

Retrieve one cloud

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.

try {
    $result = $apiInstance->getCloud($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getCloud: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

[**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudInvitations()`

```php
getCloudInvitations($cloud_pk): \OpenAPI\Client\Model\CloudInvitation[]
```

Retrieve all pending invitations in the cloud

Returns app's invitations only Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string

try {
    $result = $apiInstance->getCloudInvitations($cloud_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getCloudInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\CloudInvitation[]**](../Model/CloudInvitation.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudSize()`

```php
getCloudSize($id): int
```

Get size of all ifc files in the cloud

Returns the size of the cloud in Bytes

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.

try {
    $result = $apiInstance->getCloudSize($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getCloudSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

**int**

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudUser()`

```php
getCloudUser($cloud_pk, $id): \OpenAPI\Client\Model\User
```

Retrieve a user in a cloud

Only administrators can see a cloud member Required scopes: cloud:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.

try {
    $result = $apiInstance->getCloudUser($cloud_pk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getCloudUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudUsers()`

```php
getCloudUsers($cloud_pk, $email, $email__contains, $email__startswith, $email__endswith): \OpenAPI\Client\Model\User[]
```

Retrieve all users in a cloud, or a list with a filter by email

Only administrators can see cloud members. Required scopes: cloud:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$email = 'email_example'; // string | Filter the returned list by email
$email__contains = 'email__contains_example'; // string | Filter the returned list by email__contains
$email__startswith = 'email__startswith_example'; // string | Filter the returned list by email__startswith
$email__endswith = 'email__endswith_example'; // string | Filter the returned list by email__endswith

try {
    $result = $apiInstance->getCloudUsers($cloud_pk, $email, $email__contains, $email__startswith, $email__endswith);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getCloudUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **email** | **string**| Filter the returned list by email | [optional]
 **email__contains** | **string**| Filter the returned list by email__contains | [optional]
 **email__startswith** | **string**| Filter the returned list by email__startswith | [optional]
 **email__endswith** | **string**| Filter the returned list by email__endswith | [optional]

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClouds()`

```php
getClouds(): \OpenAPI\Client\Model\Cloud[]
```

Retrieve all clouds

Returns user's (or app's) clouds only

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getClouds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getClouds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Cloud[]**](../Model/Cloud.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\Document
```

Retrieve a document

Retrieve a document in the project Required scopes: document:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this document.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getDocument($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this document. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocuments()`

```php
getDocuments($cloud_pk, $project_pk): \OpenAPI\Client\Model\Document[]
```

Retrieve all documents

Retrieve all documents in the project Required scopes: document:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getDocuments($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolder()`

```php
getFolder($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\InlineObject
```

Retrieve a folder

Retrieve a folder Required scopes: document:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this folder.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getFolder($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this folder. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolders()`

```php
getFolders($cloud_pk, $project_pk): \OpenAPI\Client\Model\InlineResponse200[]
```

Retrieve all folders

Retrieve all folders in the project. This is an array of folder. If you want to get the tree of all folders, see getProjectTree Required scopes: document:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getFolders($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\InlineObject5
```

Retrieve a group

Retrieve a group to which the user belongs Required scopes: document:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getGroup($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($cloud_pk, $project_pk): \OpenAPI\Client\Model\InlineObject5[]
```

Retrieve all groups

Retrieves all groups to which the user belongs Required scopes: document:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getGroups($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject5[]**](../Model/InlineObject5.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManageGroup()`

```php
getManageGroup($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\InlineObject3
```

Retrieve a group

Retrieve a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getManageGroup($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getManageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManageGroups()`

```php
getManageGroups($cloud_pk, $project_pk): \OpenAPI\Client\Model\InlineResponse2001[]
```

Retrieve all groups

Retrieve all groups in the project. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getManageGroups($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getManageGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($cloud_pk, $id): \OpenAPI\Client\Model\ProjectWithChildren
```

Retrieve a project

Retrieve a project

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProject($cloud_pk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**\OpenAPI\Client\Model\ProjectWithChildren**](../Model/ProjectWithChildren.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectAccessToken()`

```php
getProjectAccessToken($cloud_pk, $project_pk, $token): \OpenAPI\Client\Model\ProjectAccessToken
```

Retrieve one token created for this project

Retrieve one token created for this project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string

try {
    $result = $apiInstance->getProjectAccessToken($cloud_pk, $project_pk, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectAccessTokens()`

```php
getProjectAccessTokens($cloud_pk, $project_pk): \OpenAPI\Client\Model\ProjectAccessToken[]
```

Retrieve all tokens created for this project

Retrieve all tokens created for this project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getProjectAccessTokens($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectAccessTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProjectAccessToken[]**](../Model/ProjectAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectDMSTree()`

```php
getProjectDMSTree($cloud_pk, $id): \OpenAPI\Client\Model\Folder
```

Retrieve the complete DMS tree

Retrieve the complete DMS tree (all folders and all documents in the project)

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProjectDMSTree($cloud_pk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectDMSTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectInvitations()`

```php
getProjectInvitations($cloud_pk, $project_pk): \OpenAPI\Client\Model\ProjectInvitation[]
```

Retrieve all pending invitations in the project

Returns app's invitations only Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getProjectInvitations($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProjectInvitation[]**](../Model/ProjectInvitation.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectSubTree()`

```php
getProjectSubTree($cloud_pk): \OpenAPI\Client\Model\ProjectWithChildren[]
```

Retrieve the complete projects tree of the cloud

Retrieve the complete projects tree of the cloud

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string

try {
    $result = $apiInstance->getProjectSubTree($cloud_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectSubTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProjectWithChildren[]**](../Model/ProjectWithChildren.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectUser()`

```php
getProjectUser($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\User
```

Retrieve a user in a project

Each member of a project can see other members of the project Required scopes: cloud:read, bcf:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$project_pk = 'project_pk_example'; // string

try {
    $result = $apiInstance->getProjectUser($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
 **project_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectUsers()`

```php
getProjectUsers($cloud_pk, $project_pk, $email, $email__contains, $email__startswith, $email__endswith): \OpenAPI\Client\Model\User[]
```

Retrieve all users in a project, or a list with a filter by email

Each member of a project can see other members of the project Required scopes: cloud:read, bcf:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$email = 'email_example'; // string | Filter the returned list by email
$email__contains = 'email__contains_example'; // string | Filter the returned list by email__contains
$email__startswith = 'email__startswith_example'; // string | Filter the returned list by email__startswith
$email__endswith = 'email__endswith_example'; // string | Filter the returned list by email__endswith

try {
    $result = $apiInstance->getProjectUsers($cloud_pk, $project_pk, $email, $email__contains, $email__startswith, $email__endswith);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjectUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **email** | **string**| Filter the returned list by email | [optional]
 **email__contains** | **string**| Filter the returned list by email__contains | [optional]
 **email__startswith** | **string**| Filter the returned list by email__startswith | [optional]
 **email__endswith** | **string**| Filter the returned list by email__endswith | [optional]

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject_0()`

```php
getProject_0($cloud_pk, $id): \OpenAPI\Client\Model\Folder
```

Retrieve a project

Retrieve a project

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProject_0($cloud_pk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProject_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjects()`

```php
getProjects($cloud_pk): \OpenAPI\Client\Model\Project[]
```

Retrieve all projects

Retrieve all projects of the cloud. All project are shown at the same level. see #getProjectSubTree

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string

try {
    $result = $apiInstance->getProjects($cloud_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Project[]**](../Model/Project.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelfProjects()`

```php
getSelfProjects(): \OpenAPI\Client\Model\Project[]
```

List current user's projects

List user's projects of all clouds Required scopes: user:read

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelfProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getSelfProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Project[]**](../Model/Project.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelfUser()`

```php
getSelfUser(): \OpenAPI\Client\Model\SelfUser
```

Get info about the current user

Get info about the current user

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelfUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->getSelfUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SelfUser**](../Model/SelfUser.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteCloudUser()`

```php
inviteCloudUser($cloud_pk, $data): \OpenAPI\Client\Model\CloudInvitation
```

Invite a cloud administrator

Invite cloud administrators only. To invite in a project, see inviteProjectUser. You can't invite a user already in the cloud. Create multiple invitations of the same email in the same cloud will generate multiple invitation emails but not multiple invitation object Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$data = new \OpenAPI\Client\Model\CloudInvitation(); // \OpenAPI\Client\Model\CloudInvitation

try {
    $result = $apiInstance->inviteCloudUser($cloud_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->inviteCloudUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\CloudInvitation**](../Model/CloudInvitation.md)|  |

### Return type

[**\OpenAPI\Client\Model\CloudInvitation**](../Model/CloudInvitation.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteProjectUser()`

```php
inviteProjectUser($cloud_pk, $project_pk, $data): \OpenAPI\Client\Model\ProjectInvitation
```

Invite a project member

Invite a project member. If the user is not already a cloud member, they will also be invited in the cloud with USER role. Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\ProjectInvitation(); // \OpenAPI\Client\Model\ProjectInvitation

try {
    $result = $apiInstance->inviteProjectUser($cloud_pk, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->inviteProjectUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ProjectInvitation**](../Model/ProjectInvitation.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProjectInvitation**](../Model/ProjectInvitation.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClassification()`

```php
updateClassification($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\Classification
```

Update some fields of a classification

Update some fields of a classification Required scopes: ifc:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Classification(); // \OpenAPI\Client\Model\Classification

try {
    $result = $apiInstance->updateClassification($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this classification. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Classification**](../Model/Classification.md)|  |

### Return type

[**\OpenAPI\Client\Model\Classification**](../Model/Classification.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCloud()`

```php
updateCloud($id, $data): \OpenAPI\Client\Model\Cloud
```

Update some fields of a cloud

Update some fields of a cloud Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cloud.
$data = new \OpenAPI\Client\Model\Cloud(); // \OpenAPI\Client\Model\Cloud

try {
    $result = $apiInstance->updateCloud($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateCloud: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |
 **data** | [**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)|  |

### Return type

[**\OpenAPI\Client\Model\Cloud**](../Model/Cloud.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCloudUser()`

```php
updateCloudUser($cloud_pk, $id, $data): \OpenAPI\Client\Model\User
```

Update some fields of a cloud user

Change the user role in the cloud Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$data = new \OpenAPI\Client\Model\UserCloudUpdate(); // \OpenAPI\Client\Model\UserCloudUpdate

try {
    $result = $apiInstance->updateCloudUser($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateCloudUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
 **data** | [**\OpenAPI\Client\Model\UserCloudUpdate**](../Model/UserCloudUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocument()`

```php
updateDocument($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\Document
```

Update some fields of the document

Update some fields of the document Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this document.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\Document(); // \OpenAPI\Client\Model\Document

try {
    $result = $apiInstance->updateDocument($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this document. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Document**](../Model/Document.md)|  |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFolder()`

```php
updateFolder($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\InlineObject2
```

Update some fields of a folder

Update some fields of a folder. Only project admins can update the `default_permission` field Required scopes: document:write

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this folder.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2

try {
    $result = $apiInstance->updateFolder($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this folder. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroupFolder()`

```php
updateGroupFolder($cloud_pk, $folder_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\GroupFolder
```

Update the permission of a group on a folder

Update the permission of a group on a folder.             0: ACCESS_DENIED,             50: READ_ONLY,             100: READ_WRTIE  Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$folder_pk = 'folder_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group folder.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\GroupFolder(); // \OpenAPI\Client\Model\GroupFolder

try {
    $result = $apiInstance->updateGroupFolder($cloud_pk, $folder_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateGroupFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **folder_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group folder. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\GroupFolder**](../Model/GroupFolder.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupFolder**](../Model/GroupFolder.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManageGroup()`

```php
updateManageGroup($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\InlineObject5
```

Update some fields of a group

Update some fields of a group. Must be an admin of the project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this group.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $result = $apiInstance->updateManageGroup($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateManageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this group. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($cloud_pk, $id, $data): \OpenAPI\Client\Model\Project
```

Update some fields of a project

Update some fields of a project Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this project.
$data = new \OpenAPI\Client\Model\Project(); // \OpenAPI\Client\Model\Project

try {
    $result = $apiInstance->updateProject($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this project. |
 **data** | [**\OpenAPI\Client\Model\Project**](../Model/Project.md)|  |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectAccessToken()`

```php
updateProjectAccessToken($cloud_pk, $project_pk, $token, $data): \OpenAPI\Client\Model\ProjectAccessToken
```

Update some fields of a token

You can update the expiration date field Required scopes: org:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$project_pk = 'project_pk_example'; // string
$token = 'token_example'; // string
$data = new \OpenAPI\Client\Model\ProjectAccessToken(); // \OpenAPI\Client\Model\ProjectAccessToken

try {
    $result = $apiInstance->updateProjectAccessToken($cloud_pk, $project_pk, $token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateProjectAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **project_pk** | **string**|  |
 **token** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectUser()`

```php
updateProjectUser($cloud_pk, $id, $project_pk, $data): \OpenAPI\Client\Model\User
```

Update some fields of a project user

Change the user role in the cloud Required scopes: cloud:manage

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 56; // int | A unique integer value identifying this fos user.
$project_pk = 'project_pk_example'; // string
$data = new \OpenAPI\Client\Model\UserProjectUpdate(); // \OpenAPI\Client\Model\UserProjectUpdate

try {
    $result = $apiInstance->updateProjectUser($cloud_pk, $id, $project_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateProjectUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **int**| A unique integer value identifying this fos user. |
 **project_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\UserProjectUpdate**](../Model/UserProjectUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSelfUser()`

```php
updateSelfUser($data): \OpenAPI\Client\Model\SelfUser
```

Update info of the current user

DEPRECATED. The user must be updated on its identity provider

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


$apiInstance = new OpenAPI\Client\Api\CollaborationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\SelfUser(); // \OpenAPI\Client\Model\SelfUser

try {
    $result = $apiInstance->updateSelfUser($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationApi->updateSelfUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\SelfUser**](../Model/SelfUser.md)|  |

### Return type

[**\OpenAPI\Client\Model\SelfUser**](../Model/SelfUser.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
