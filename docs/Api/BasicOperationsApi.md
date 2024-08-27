# GeminiCommerce\Dam\BasicOperationsApi

All URIs are relative to https://dam.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchUploadAssets()**](BasicOperationsApi.md#batchUploadAssets) | **POST** /dam.Dam/BatchUploadAssets | Batch Upload Assets |
| [**batchUploadAssets_0()**](BasicOperationsApi.md#batchUploadAssets_0) | **POST** /dam/batch_upload_assets | Batch Upload Assets |
| [**createAsset()**](BasicOperationsApi.md#createAsset) | **POST** /dam.Dam/CreateAsset | Create Asset |
| [**createAsset_0()**](BasicOperationsApi.md#createAsset_0) | **POST** /dam/create_asset | Create Asset |
| [**getAssetByCode()**](BasicOperationsApi.md#getAssetByCode) | **POST** /dam.Dam/GetAssetByCode | Get Asset By Code |
| [**getAssetByCode_0()**](BasicOperationsApi.md#getAssetByCode_0) | **POST** /dam/get_asset_by_code | Get Asset By Code |
| [**listAssets()**](BasicOperationsApi.md#listAssets) | **POST** /dam.Dam/ListAssets | List Assets |
| [**listAssetsByCodes()**](BasicOperationsApi.md#listAssetsByCodes) | **POST** /dam.Dam/ListAssetsByCodes | List Assets By Codes |
| [**listAssetsByCodes_0()**](BasicOperationsApi.md#listAssetsByCodes_0) | **POST** /dam/list_assets_by_codes | List Assets By Codes |
| [**listAssetsByIds()**](BasicOperationsApi.md#listAssetsByIds) | **POST** /dam.Dam/ListAssetsByIds | List Assets By Ids |
| [**listAssetsByIds_0()**](BasicOperationsApi.md#listAssetsByIds_0) | **POST** /dam/list_assets_by_ids | List Assets By Ids |
| [**listAssets_0()**](BasicOperationsApi.md#listAssets_0) | **POST** /dam/list_assets | List Assets |
| [**updateAsset()**](BasicOperationsApi.md#updateAsset) | **POST** /dam.Dam/UpdateAsset | Update Asset |
| [**updateAsset_0()**](BasicOperationsApi.md#updateAsset_0) | **POST** /dam/update_asset | Update Asset |


## `batchUploadAssets()`

```php
batchUploadAssets($body): \GeminiCommerce\Dam\Model\DamBatchUploadAssetsResponse
```

Batch Upload Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamBatchUploadAssetsRequest(); // \GeminiCommerce\Dam\Model\DamBatchUploadAssetsRequest

try {
    $result = $apiInstance->batchUploadAssets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->batchUploadAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamBatchUploadAssetsRequest**](../Model/DamBatchUploadAssetsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamBatchUploadAssetsResponse**](../Model/DamBatchUploadAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchUploadAssets_0()`

```php
batchUploadAssets_0($body): \GeminiCommerce\Dam\Model\DamBatchUploadAssetsResponse
```

Batch Upload Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamBatchUploadAssetsRequest(); // \GeminiCommerce\Dam\Model\DamBatchUploadAssetsRequest

try {
    $result = $apiInstance->batchUploadAssets_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->batchUploadAssets_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamBatchUploadAssetsRequest**](../Model/DamBatchUploadAssetsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamBatchUploadAssetsResponse**](../Model/DamBatchUploadAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAsset()`

```php
createAsset($body): \GeminiCommerce\Dam\Model\DamAsset
```

Create Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamCreateAssetRequest(); // \GeminiCommerce\Dam\Model\DamCreateAssetRequest

try {
    $result = $apiInstance->createAsset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamCreateAssetRequest**](../Model/DamCreateAssetRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamAsset**](../Model/DamAsset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAsset_0()`

```php
createAsset_0($body): \GeminiCommerce\Dam\Model\DamAsset
```

Create Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamCreateAssetRequest(); // \GeminiCommerce\Dam\Model\DamCreateAssetRequest

try {
    $result = $apiInstance->createAsset_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->createAsset_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamCreateAssetRequest**](../Model/DamCreateAssetRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamAsset**](../Model/DamAsset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetByCode()`

```php
getAssetByCode($body): \GeminiCommerce\Dam\Model\DamAsset
```

Get Asset By Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamGetAssetByCodeRequest(); // \GeminiCommerce\Dam\Model\DamGetAssetByCodeRequest

try {
    $result = $apiInstance->getAssetByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->getAssetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamGetAssetByCodeRequest**](../Model/DamGetAssetByCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamAsset**](../Model/DamAsset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetByCode_0()`

```php
getAssetByCode_0($body): \GeminiCommerce\Dam\Model\DamAsset
```

Get Asset By Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamGetAssetByCodeRequest(); // \GeminiCommerce\Dam\Model\DamGetAssetByCodeRequest

try {
    $result = $apiInstance->getAssetByCode_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->getAssetByCode_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamGetAssetByCodeRequest**](../Model/DamGetAssetByCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamAsset**](../Model/DamAsset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssets()`

```php
listAssets($body): \GeminiCommerce\Dam\Model\DamListAssetsResponse
```

List Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamListAssetsRequest(); // \GeminiCommerce\Dam\Model\DamListAssetsRequest

try {
    $result = $apiInstance->listAssets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamListAssetsRequest**](../Model/DamListAssetsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamListAssetsResponse**](../Model/DamListAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetsByCodes()`

```php
listAssetsByCodes($body): \GeminiCommerce\Dam\Model\DamListAssetsByCodesResponse
```

List Assets By Codes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamListAssetsByCodesRequest(); // \GeminiCommerce\Dam\Model\DamListAssetsByCodesRequest

try {
    $result = $apiInstance->listAssetsByCodes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listAssetsByCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamListAssetsByCodesRequest**](../Model/DamListAssetsByCodesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamListAssetsByCodesResponse**](../Model/DamListAssetsByCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetsByCodes_0()`

```php
listAssetsByCodes_0($body): \GeminiCommerce\Dam\Model\DamListAssetsByCodesResponse
```

List Assets By Codes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamListAssetsByCodesRequest(); // \GeminiCommerce\Dam\Model\DamListAssetsByCodesRequest

try {
    $result = $apiInstance->listAssetsByCodes_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listAssetsByCodes_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamListAssetsByCodesRequest**](../Model/DamListAssetsByCodesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamListAssetsByCodesResponse**](../Model/DamListAssetsByCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetsByIds()`

```php
listAssetsByIds($body): \GeminiCommerce\Dam\Model\DamListAssetsByIdsResponse
```

List Assets By Ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamListAssetsByIdsRequest(); // \GeminiCommerce\Dam\Model\DamListAssetsByIdsRequest

try {
    $result = $apiInstance->listAssetsByIds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listAssetsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamListAssetsByIdsRequest**](../Model/DamListAssetsByIdsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamListAssetsByIdsResponse**](../Model/DamListAssetsByIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetsByIds_0()`

```php
listAssetsByIds_0($body): \GeminiCommerce\Dam\Model\DamListAssetsByIdsResponse
```

List Assets By Ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamListAssetsByIdsRequest(); // \GeminiCommerce\Dam\Model\DamListAssetsByIdsRequest

try {
    $result = $apiInstance->listAssetsByIds_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listAssetsByIds_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamListAssetsByIdsRequest**](../Model/DamListAssetsByIdsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamListAssetsByIdsResponse**](../Model/DamListAssetsByIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssets_0()`

```php
listAssets_0($body): \GeminiCommerce\Dam\Model\DamListAssetsResponse
```

List Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamListAssetsRequest(); // \GeminiCommerce\Dam\Model\DamListAssetsRequest

try {
    $result = $apiInstance->listAssets_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listAssets_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamListAssetsRequest**](../Model/DamListAssetsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamListAssetsResponse**](../Model/DamListAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAsset()`

```php
updateAsset($body): \GeminiCommerce\Dam\Model\DamAsset
```

Update Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamUpdateAssetRequest(); // \GeminiCommerce\Dam\Model\DamUpdateAssetRequest

try {
    $result = $apiInstance->updateAsset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->updateAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamUpdateAssetRequest**](../Model/DamUpdateAssetRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamAsset**](../Model/DamAsset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAsset_0()`

```php
updateAsset_0($body): \GeminiCommerce\Dam\Model\DamAsset
```

Update Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Dam\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Dam\Model\DamUpdateAssetRequest(); // \GeminiCommerce\Dam\Model\DamUpdateAssetRequest

try {
    $result = $apiInstance->updateAsset_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->updateAsset_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Dam\Model\DamUpdateAssetRequest**](../Model/DamUpdateAssetRequest.md)|  | |

### Return type

[**\GeminiCommerce\Dam\Model\DamAsset**](../Model/DamAsset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
