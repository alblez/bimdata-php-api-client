# OpenAPI\Client\BcfApi

All URIs are relative to https://api.bimdata.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment()**](BcfApi.md#createComment) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Create a comment
[**createFullTopic()**](BcfApi.md#createFullTopic) | **POST** /bcf/2.1/projects/{projects_pk}/full-topic | Create a Topic with viewpoints and comments
[**createTopic()**](BcfApi.md#createTopic) | **POST** /bcf/2.1/projects/{projects_pk}/topics | Create a topic
[**createViewpoint()**](BcfApi.md#createViewpoint) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Create a Viewpoint
[**deleteComment()**](BcfApi.md#deleteComment) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Delete a comment
[**deleteTopic()**](BcfApi.md#deleteTopic) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Delete a topic
[**deleteViewpoint()**](BcfApi.md#deleteViewpoint) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Delete a Viewpoint
[**downloadBcfExport()**](BcfApi.md#downloadBcfExport) | **GET** /bcf/2.1/projects/{id}/export | Export project&#39;s topics in bcf-xml format
[**fullUpdateBcfProject()**](BcfApi.md#fullUpdateBcfProject) | **PUT** /bcf/2.1/projects/{id} | Update all fields of a BCF project
[**fullUpdateComment()**](BcfApi.md#fullUpdateComment) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update all fields of a comment
[**fullUpdateFullTopic()**](BcfApi.md#fullUpdateFullTopic) | **PUT** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update all fields of a topic
[**fullUpdateTopic()**](BcfApi.md#fullUpdateTopic) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update all fields of a topic
[**fullUpdateViewpoint()**](BcfApi.md#fullUpdateViewpoint) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update all fields of a Viewpoint
[**getBcfProject()**](BcfApi.md#getBcfProject) | **GET** /bcf/2.1/projects/{id} | Retrieve a BCF project
[**getBcfProjects()**](BcfApi.md#getBcfProjects) | **GET** /bcf/2.1/projects | Retrieve all BCF projects
[**getColorings()**](BcfApi.md#getColorings) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/coloring | Retrieve all colorings of a viewpoint
[**getComment()**](BcfApi.md#getComment) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Retrieve a comment
[**getComments()**](BcfApi.md#getComments) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Retrieve all comments
[**getExtensions()**](BcfApi.md#getExtensions) | **GET** /bcf/2.1/projects/{projects_pk}/extensions | Retrieve project extensions
[**getFullTopic()**](BcfApi.md#getFullTopic) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Retrieve a full topic
[**getFullTopics()**](BcfApi.md#getFullTopics) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic | Retrieve all full topics
[**getSelections()**](BcfApi.md#getSelections) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/selection | Retrieve all selections of a viewpoint
[**getSnapshot()**](BcfApi.md#getSnapshot) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/snapshot | Retrieve the viewpoint&#39; snapshot
[**getTopic()**](BcfApi.md#getTopic) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Retrieve a topic
[**getTopicViewpoints()**](BcfApi.md#getTopicViewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/topic-viewpoints | Retrieve all viewpoints attached to the topic
[**getTopics()**](BcfApi.md#getTopics) | **GET** /bcf/2.1/projects/{projects_pk}/topics | Retrieve all topics
[**getUser()**](BcfApi.md#getUser) | **GET** /bcf/2.1/current-user | Get current user info
[**getViewpoint()**](BcfApi.md#getViewpoint) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Retrieve a Viewpoint
[**getViewpoints()**](BcfApi.md#getViewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Retrieve all Viewpoints of a topic
[**getVisibilities()**](BcfApi.md#getVisibilities) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/visibility | Retrieve all visibilities of a viewpoint
[**importBcf()**](BcfApi.md#importBcf) | **POST** /bcf/2.1/projects/{id}/import | Import bcf-xml format into this project
[**updateBcfProject()**](BcfApi.md#updateBcfProject) | **PATCH** /bcf/2.1/projects/{id} | Update some fields of a BCF project
[**updateComment()**](BcfApi.md#updateComment) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update some fields of a comment
[**updateExtensions()**](BcfApi.md#updateExtensions) | **PATCH** /bcf/2.1/projects/{projects_pk}/extensions | Update project extensions
[**updateFullTopic()**](BcfApi.md#updateFullTopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update some fields of a topic
[**updateTopic()**](BcfApi.md#updateTopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update some fields of a topic
[**updateViewpoint()**](BcfApi.md#updateViewpoint) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update some fields of a Viewpoint


## `createComment()`

```php
createComment($projects_pk, $topics_guid, $data): \OpenAPI\Client\Model\Comment
```

Create a comment

Create a comment Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Comment(); // \OpenAPI\Client\Model\Comment

try {
    $result = $apiInstance->createComment($projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->createComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)|  |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFullTopic()`

```php
createFullTopic($projects_pk, $data): \OpenAPI\Client\Model\FullTopic
```

Create a Topic with viewpoints and comments

This is not a standard route. You can send a topic, viewpoints and comments in a single call Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\FullTopic(); // \OpenAPI\Client\Model\FullTopic

try {
    $result = $apiInstance->createFullTopic($projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->createFullTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)|  |

### Return type

[**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTopic()`

```php
createTopic($projects_pk, $data): \OpenAPI\Client\Model\Topic
```

Create a topic

Create a topic Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\Topic(); // \OpenAPI\Client\Model\Topic

try {
    $result = $apiInstance->createTopic($projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->createTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)|  |

### Return type

[**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createViewpoint()`

```php
createViewpoint($projects_pk, $topics_guid, $data): \OpenAPI\Client\Model\Viewpoint
```

Create a Viewpoint

Create a Viewpoint Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Viewpoint(); // \OpenAPI\Client\Model\Viewpoint

try {
    $result = $apiInstance->createViewpoint($projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->createViewpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)|  |

### Return type

[**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteComment()`

```php
deleteComment($guid, $projects_pk, $topics_guid)
```

Delete a comment

Delete a comment Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $apiInstance->deleteComment($guid, $projects_pk, $topics_guid);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

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

## `deleteTopic()`

```php
deleteTopic($guid, $projects_pk)
```

Delete a topic

Delete a topic Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string

try {
    $apiInstance->deleteTopic($guid, $projects_pk);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->deleteTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |

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

## `deleteViewpoint()`

```php
deleteViewpoint($guid, $projects_pk, $topics_guid)
```

Delete a Viewpoint

This is not a standard route. Delete a Viewpoint Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $apiInstance->deleteViewpoint($guid, $projects_pk, $topics_guid);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->deleteViewpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

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

## `downloadBcfExport()`

```php
downloadBcfExport($id, $topics, $format): \SplFileObject
```

Export project's topics in bcf-xml format

Export project's topics in bcf-xml format Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this project.
$topics = 'topics_example'; // string | topic guids to export, comma separated. Default = all
$format = 'format_example'; // string | topic format to export, comma separated. Default = all

try {
    $result = $apiInstance->downloadBcfExport($id, $topics, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->downloadBcfExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **topics** | **string**| topic guids to export, comma separated. Default &#x3D; all | [optional]
 **format** | **string**| topic format to export, comma separated. Default &#x3D; all | [optional]

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateBcfProject()`

```php
fullUpdateBcfProject($id, $data): \OpenAPI\Client\Model\BcfProject
```

Update all fields of a BCF project

Update all fields of a BCF project Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this project.
$data = new \OpenAPI\Client\Model\BcfProject(); // \OpenAPI\Client\Model\BcfProject

try {
    $result = $apiInstance->fullUpdateBcfProject($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->fullUpdateBcfProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **data** | [**\OpenAPI\Client\Model\BcfProject**](../Model/BcfProject.md)|  |

### Return type

[**\OpenAPI\Client\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateComment()`

```php
fullUpdateComment($guid, $projects_pk, $topics_guid, $data): \OpenAPI\Client\Model\Comment
```

Update all fields of a comment

Update all fields of a comment Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Comment(); // \OpenAPI\Client\Model\Comment

try {
    $result = $apiInstance->fullUpdateComment($guid, $projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->fullUpdateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)|  |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateFullTopic()`

```php
fullUpdateFullTopic($guid, $projects_pk, $data): \OpenAPI\Client\Model\FullTopic
```

Update all fields of a topic

This is not a standard route. You can update topic, viewpoints and comment is a signle call Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\FullTopic(); // \OpenAPI\Client\Model\FullTopic

try {
    $result = $apiInstance->fullUpdateFullTopic($guid, $projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->fullUpdateFullTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)|  |

### Return type

[**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateTopic()`

```php
fullUpdateTopic($guid, $projects_pk, $data): \OpenAPI\Client\Model\Topic
```

Update all fields of a topic

Update all fields of a topic Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\Topic(); // \OpenAPI\Client\Model\Topic

try {
    $result = $apiInstance->fullUpdateTopic($guid, $projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->fullUpdateTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)|  |

### Return type

[**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateViewpoint()`

```php
fullUpdateViewpoint($guid, $projects_pk, $topics_guid, $data): \OpenAPI\Client\Model\Viewpoint
```

Update all fields of a Viewpoint

This is not a standard route. Update all fields of a Viewpoint Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Viewpoint(); // \OpenAPI\Client\Model\Viewpoint

try {
    $result = $apiInstance->fullUpdateViewpoint($guid, $projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->fullUpdateViewpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)|  |

### Return type

[**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBcfProject()`

```php
getBcfProject($id): \OpenAPI\Client\Model\BcfProject
```

Retrieve a BCF project

Retrieve a BCF project Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getBcfProject($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getBcfProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**\OpenAPI\Client\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBcfProjects()`

```php
getBcfProjects(): \OpenAPI\Client\Model\BcfProject[]
```

Retrieve all BCF projects

Retrieve all BCF projects Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBcfProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getBcfProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BcfProject[]**](../Model/BcfProject.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColorings()`

```php
getColorings($guid, $projects_pk, $topics_guid): \OpenAPI\Client\Model\Coloring[]
```

Retrieve all colorings of a viewpoint

Retrieve all colorings of a viewpoint Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getColorings($guid, $projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getColorings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Coloring[]**](../Model/Coloring.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComment()`

```php
getComment($guid, $projects_pk, $topics_guid): \OpenAPI\Client\Model\Comment
```

Retrieve a comment

Retrieve a comment Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getComment($guid, $projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComments()`

```php
getComments($projects_pk, $topics_guid): \OpenAPI\Client\Model\Comment[]
```

Retrieve all comments

Retrieve all comments Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getComments($projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Comment[]**](../Model/Comment.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtensions()`

```php
getExtensions($projects_pk): \OpenAPI\Client\Model\Extensions
```

Retrieve project extensions

Retrieve project extensions

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string

try {
    $result = $apiInstance->getExtensions($projects_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getExtensions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Extensions**](../Model/Extensions.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullTopic()`

```php
getFullTopic($guid, $projects_pk): \OpenAPI\Client\Model\FullTopic
```

Retrieve a full topic

This is not a standard route. It responds with a topic, its viewpoints and its comments Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string

try {
    $result = $apiInstance->getFullTopic($guid, $projects_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getFullTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullTopics()`

```php
getFullTopics($projects_pk, $ifcs, $format): \OpenAPI\Client\Model\FullTopic[]
```

Retrieve all full topics

This is not a standard route. It responds with all topics, their viewpoints and their comments Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$ifcs = 'ifcs_example'; // string | Filter the returned list by ifcs
$format = 'format_example'; // string | Filter the returned list by format

try {
    $result = $apiInstance->getFullTopics($projects_pk, $ifcs, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getFullTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **ifcs** | **string**| Filter the returned list by ifcs | [optional]
 **format** | **string**| Filter the returned list by format | [optional]

### Return type

[**\OpenAPI\Client\Model\FullTopic[]**](../Model/FullTopic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelections()`

```php
getSelections($guid, $projects_pk, $topics_guid): \OpenAPI\Client\Model\Component[]
```

Retrieve all selections of a viewpoint

Retrieve all selections of a viewpoint Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getSelections($guid, $projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getSelections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Component[]**](../Model/Component.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnapshot()`

```php
getSnapshot($guid, $projects_pk, $topics_guid): \SplFileObject
```

Retrieve the viewpoint' snapshot

Retrieve the viewpoint' snapshot Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getSnapshot($guid, $projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopic()`

```php
getTopic($guid, $projects_pk): \OpenAPI\Client\Model\Topic
```

Retrieve a topic

Retrieve a topic Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string

try {
    $result = $apiInstance->getTopic($guid, $projects_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopicViewpoints()`

```php
getTopicViewpoints($projects_pk, $topics_guid): \OpenAPI\Client\Model\Viewpoint[]
```

Retrieve all viewpoints attached to the topic

This is not a standard route. It returns all viewpoints of the topic that are not attached to a comment. Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getTopicViewpoints($projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getTopicViewpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Viewpoint[]**](../Model/Viewpoint.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopics()`

```php
getTopics($projects_pk, $ifcs, $format): \OpenAPI\Client\Model\Topic[]
```

Retrieve all topics

Retrieve all topics Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$ifcs = 'ifcs_example'; // string | Filter the returned list by ifcs
$format = 'format_example'; // string | Filter the returned list by format

try {
    $result = $apiInstance->getTopics($projects_pk, $ifcs, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **ifcs** | **string**| Filter the returned list by ifcs | [optional]
 **format** | **string**| Filter the returned list by format | [optional]

### Return type

[**\OpenAPI\Client\Model\Topic[]**](../Model/Topic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser(): \OpenAPI\Client\Model\SelfBcfUser
```

Get current user info

Get current user info. If request comes from an App, the response is always:         {             \"id\": None,             \"name\": None,             \"is_client\": True,         } Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SelfBcfUser**](../Model/SelfBcfUser.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getViewpoint()`

```php
getViewpoint($guid, $projects_pk, $topics_guid): \OpenAPI\Client\Model\Viewpoint
```

Retrieve a Viewpoint

Retrieve a Viewpoint Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getViewpoint($guid, $projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getViewpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getViewpoints()`

```php
getViewpoints($projects_pk, $topics_guid): \OpenAPI\Client\Model\Viewpoint[]
```

Retrieve all Viewpoints of a topic

Retrieve all Viewpoints of a topic Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getViewpoints($projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getViewpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Viewpoint[]**](../Model/Viewpoint.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVisibilities()`

```php
getVisibilities($guid, $projects_pk, $topics_guid): \OpenAPI\Client\Model\Visibility
```

Retrieve all visibilities of a viewpoint

Retrieve all visibilities of a viewpoint Required scopes: bcf:read

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string

try {
    $result = $apiInstance->getVisibilities($guid, $projects_pk, $topics_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->getVisibilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Visibility**](../Model/Visibility.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importBcf()`

```php
importBcf($id, $name)
```

Import bcf-xml format into this project

Import bcf-xml format into this project. If there are guid conflict, an error will be raised. If there are index conflicts, indexes of the imported file will be overriden with a new index. Author and assigned_to fields will be linked to existing users in the project. If no matching user are found, fields will be emptied. Only BCF 2.1 is supported Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this project.
$name = 'name_example'; // string | Name of the project

try {
    $apiInstance->importBcf($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->importBcf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **name** | **string**| Name of the project |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBcfProject()`

```php
updateBcfProject($id, $data): \OpenAPI\Client\Model\BcfProject
```

Update some fields of a BCF project

Update some fields of a BCF project Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this project.
$data = new \OpenAPI\Client\Model\BcfProject(); // \OpenAPI\Client\Model\BcfProject

try {
    $result = $apiInstance->updateBcfProject($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->updateBcfProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **data** | [**\OpenAPI\Client\Model\BcfProject**](../Model/BcfProject.md)|  |

### Return type

[**\OpenAPI\Client\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComment()`

```php
updateComment($guid, $projects_pk, $topics_guid, $data): \OpenAPI\Client\Model\Comment
```

Update some fields of a comment

Update some fields of a comment Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Comment(); // \OpenAPI\Client\Model\Comment

try {
    $result = $apiInstance->updateComment($guid, $projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)|  |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExtensions()`

```php
updateExtensions($projects_pk, $data): \OpenAPI\Client\Model\Extensions
```

Update project extensions

Update project extensions

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\Extensions(); // \OpenAPI\Client\Model\Extensions

try {
    $result = $apiInstance->updateExtensions($projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->updateExtensions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Extensions**](../Model/Extensions.md)|  |

### Return type

[**\OpenAPI\Client\Model\Extensions**](../Model/Extensions.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFullTopic()`

```php
updateFullTopic($guid, $projects_pk, $data): \OpenAPI\Client\Model\FullTopic
```

Update some fields of a topic

This is not a standard route. You can update topic, viewpoints and comment is a signle call Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\FullTopic(); // \OpenAPI\Client\Model\FullTopic

try {
    $result = $apiInstance->updateFullTopic($guid, $projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->updateFullTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)|  |

### Return type

[**\OpenAPI\Client\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTopic()`

```php
updateTopic($guid, $projects_pk, $data): \OpenAPI\Client\Model\Topic
```

Update some fields of a topic

Update some fields of a topic Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$data = new \OpenAPI\Client\Model\Topic(); // \OpenAPI\Client\Model\Topic

try {
    $result = $apiInstance->updateTopic($guid, $projects_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->updateTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)|  |

### Return type

[**\OpenAPI\Client\Model\Topic**](../Model/Topic.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateViewpoint()`

```php
updateViewpoint($guid, $projects_pk, $topics_guid, $data): \OpenAPI\Client\Model\Viewpoint
```

Update some fields of a Viewpoint

This is not a standard route. Update some fields of a Viewpoint Required scopes: bcf:write

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


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 'guid_example'; // string
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Viewpoint(); // \OpenAPI\Client\Model\Viewpoint

try {
    $result = $apiInstance->updateViewpoint($guid, $projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->updateViewpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projects_pk** | **string**|  |
 **topics_guid** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)|  |

### Return type

[**\OpenAPI\Client\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
