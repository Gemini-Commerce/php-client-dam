# dam

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-dam.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-dam": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/dam/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DamBatchUploadAssetsRequest(); // \OpenAPI\Client\Model\DamBatchUploadAssetsRequest

try {
    $result = $apiInstance->batchUploadAssets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->batchUploadAssets: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://dam.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BasicOperationsApi* | [**batchUploadAssets**](docs/Api/BasicOperationsApi.md#batchuploadassets) | **POST** /dam.Dam/BatchUploadAssets | Batch Upload Assets
*BasicOperationsApi* | [**batchUploadAssets_0**](docs/Api/BasicOperationsApi.md#batchuploadassets_0) | **POST** /dam/batch_upload_assets | Batch Upload Assets
*BasicOperationsApi* | [**createAsset**](docs/Api/BasicOperationsApi.md#createasset) | **POST** /dam.Dam/CreateAsset | Create Asset
*BasicOperationsApi* | [**createAsset_0**](docs/Api/BasicOperationsApi.md#createasset_0) | **POST** /dam/create_asset | Create Asset
*BasicOperationsApi* | [**getAssetByCode**](docs/Api/BasicOperationsApi.md#getassetbycode) | **POST** /dam.Dam/GetAssetByCode | Get Asset By Code
*BasicOperationsApi* | [**getAssetByCode_0**](docs/Api/BasicOperationsApi.md#getassetbycode_0) | **POST** /dam/get_asset_by_code | Get Asset By Code
*BasicOperationsApi* | [**listAssets**](docs/Api/BasicOperationsApi.md#listassets) | **POST** /dam.Dam/ListAssets | List Assets
*BasicOperationsApi* | [**listAssetsByCodes**](docs/Api/BasicOperationsApi.md#listassetsbycodes) | **POST** /dam.Dam/ListAssetsByCodes | List Assets By Codes
*BasicOperationsApi* | [**listAssetsByCodes_0**](docs/Api/BasicOperationsApi.md#listassetsbycodes_0) | **POST** /dam/list_assets_by_codes | List Assets By Codes
*BasicOperationsApi* | [**listAssetsByIds**](docs/Api/BasicOperationsApi.md#listassetsbyids) | **POST** /dam.Dam/ListAssetsByIds | List Assets By Ids
*BasicOperationsApi* | [**listAssetsByIds_0**](docs/Api/BasicOperationsApi.md#listassetsbyids_0) | **POST** /dam/list_assets_by_ids | List Assets By Ids
*BasicOperationsApi* | [**listAssets_0**](docs/Api/BasicOperationsApi.md#listassets_0) | **POST** /dam/list_assets | List Assets
*BasicOperationsApi* | [**updateAsset**](docs/Api/BasicOperationsApi.md#updateasset) | **POST** /dam.Dam/UpdateAsset | Update Asset
*BasicOperationsApi* | [**updateAsset_0**](docs/Api/BasicOperationsApi.md#updateasset_0) | **POST** /dam/update_asset | Update Asset

## Models

- [AssetMetadata](docs/Model/AssetMetadata.md)
- [AssetOriginTypes](docs/Model/AssetOriginTypes.md)
- [BatchUploadAssetsRequestFiles](docs/Model/BatchUploadAssetsRequestFiles.md)
- [DamAsset](docs/Model/DamAsset.md)
- [DamAssetOrigin](docs/Model/DamAssetOrigin.md)
- [DamAssetType](docs/Model/DamAssetType.md)
- [DamBatchUploadAssetsRequest](docs/Model/DamBatchUploadAssetsRequest.md)
- [DamBatchUploadAssetsResponse](docs/Model/DamBatchUploadAssetsResponse.md)
- [DamCreateAssetRequest](docs/Model/DamCreateAssetRequest.md)
- [DamGetAssetByCodeRequest](docs/Model/DamGetAssetByCodeRequest.md)
- [DamListAssetsByCodesRequest](docs/Model/DamListAssetsByCodesRequest.md)
- [DamListAssetsByCodesResponse](docs/Model/DamListAssetsByCodesResponse.md)
- [DamListAssetsByIdsRequest](docs/Model/DamListAssetsByIdsRequest.md)
- [DamListAssetsByIdsResponse](docs/Model/DamListAssetsByIdsResponse.md)
- [DamListAssetsRequest](docs/Model/DamListAssetsRequest.md)
- [DamListAssetsResponse](docs/Model/DamListAssetsResponse.md)
- [DamUpdateAssetRequest](docs/Model/DamUpdateAssetRequest.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)
- [UpdateAssetRequestPayload](docs/Model/UpdateAssetRequestPayload.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
