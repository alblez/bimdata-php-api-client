# OpenAPI\Client\WebhookApi

All URIs are relative to https://api.bimdata.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebHook()**](WebhookApi.md#createWebHook) | **POST** /cloud/{cloud_pk}/webhook | Create a new Webhook
[**deleteWebHook()**](WebhookApi.md#deleteWebHook) | **DELETE** /cloud/{cloud_pk}/webhook/{id} | Delete a webhook
[**fullUpdateWebHook()**](WebhookApi.md#fullUpdateWebHook) | **PUT** /cloud/{cloud_pk}/webhook/{id} | Update all field of a webhook
[**getWebHook()**](WebhookApi.md#getWebHook) | **GET** /cloud/{cloud_pk}/webhook/{id} | Retrieve one configured webhook
[**getWebHooks()**](WebhookApi.md#getWebHooks) | **GET** /cloud/{cloud_pk}/webhook | Retrieve all configured webhooks
[**pingWebHook()**](WebhookApi.md#pingWebHook) | **POST** /cloud/{cloud_pk}/webhook/{id}/ping | Test a webhook
[**updateWebHook()**](WebhookApi.md#updateWebHook) | **PATCH** /cloud/{cloud_pk}/webhook/{id} | Update some field of a webhook


## `createWebHook()`

```php
createWebHook($cloud_pk, $data): \OpenAPI\Client\Model\WebHook
```

Create a new Webhook

Create a new Webhook Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$data = new \OpenAPI\Client\Model\WebHook(); // \OpenAPI\Client\Model\WebHook

try {
    $result = $apiInstance->createWebHook($cloud_pk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->createWebHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebHook()`

```php
deleteWebHook($cloud_pk, $id)
```

Delete a webhook

Delete a webhook Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteWebHook($cloud_pk, $id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **string**|  |

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

## `fullUpdateWebHook()`

```php
fullUpdateWebHook($cloud_pk, $id, $data): \OpenAPI\Client\Model\WebHook
```

Update all field of a webhook

Update all field of a webhook Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 'id_example'; // string
$data = new \OpenAPI\Client\Model\WebHook(); // \OpenAPI\Client\Model\WebHook

try {
    $result = $apiInstance->fullUpdateWebHook($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->fullUpdateWebHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebHook()`

```php
getWebHook($cloud_pk, $id): \OpenAPI\Client\Model\WebHook
```

Retrieve one configured webhook

Retrieve one configured webhook Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWebHook($cloud_pk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebHooks()`

```php
getWebHooks($cloud_pk): \OpenAPI\Client\Model\WebHook[]
```

Retrieve all configured webhooks

Retrieve all configured webhooks Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string

try {
    $result = $apiInstance->getWebHooks($cloud_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebHooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\WebHook[]**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pingWebHook()`

```php
pingWebHook($cloud_pk, $id, $data): \OpenAPI\Client\Model\WebHook
```

Test a webhook

Trigger a Ping Event sending {\"ok\": true} to the webhook URL. Useful to test your app Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 'id_example'; // string
$data = new \OpenAPI\Client\Model\WebHook(); // \OpenAPI\Client\Model\WebHook

try {
    $result = $apiInstance->pingWebHook($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->pingWebHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebHook()`

```php
updateWebHook($cloud_pk, $id, $data): \OpenAPI\Client\Model\WebHook
```

Update some field of a webhook

Update some field of a webhook Required scopes: webhook:manage

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 'cloud_pk_example'; // string
$id = 'id_example'; // string
$data = new \OpenAPI\Client\Model\WebHook(); // \OpenAPI\Client\Model\WebHook

try {
    $result = $apiInstance->updateWebHook($cloud_pk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_pk** | **string**|  |
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [bimdata_connect](../../README.md#bimdata_connect), [client_credentials](../../README.md#client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
