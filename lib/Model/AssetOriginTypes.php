<?php
/**
 * AssetOriginTypes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Dam
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Dam Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Dam\Model;
use \GeminiCommerce\Dam\ObjectSerializer;

/**
 * AssetOriginTypes Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Dam
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetOriginTypes
{
    /**
     * Possible values of this enum
     */
    public const EXTERNAL = 'EXTERNAL';

    public const S3 = 'S3';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTERNAL,
            self::S3
        ];
    }
}

