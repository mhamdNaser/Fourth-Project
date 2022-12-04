<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A legacy app install ad that only can be used by a few select customers.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.LegacyAppInstallAdInfo</code>
 */
class LegacyAppInstallAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the mobile app.
     *
     * Generated from protobuf field <code>optional string app_id = 6;</code>
     */
    protected $app_id = null;
    /**
     * The app store the mobile app is available in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore app_store = 2;</code>
     */
    protected $app_store = 0;
    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>optional string headline = 7;</code>
     */
    protected $headline = null;
    /**
     * The first description line of the ad.
     *
     * Generated from protobuf field <code>optional string description1 = 8;</code>
     */
    protected $description1 = null;
    /**
     * The second description line of the ad.
     *
     * Generated from protobuf field <code>optional string description2 = 9;</code>
     */
    protected $description2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_id
     *           The ID of the mobile app.
     *     @type int $app_store
     *           The app store the mobile app is available in.
     *     @type string $headline
     *           The headline of the ad.
     *     @type string $description1
     *           The first description line of the ad.
     *     @type string $description2
     *           The second description line of the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the mobile app.
     *
     * Generated from protobuf field <code>optional string app_id = 6;</code>
     * @return string
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : '';
    }

    public function hasAppId()
    {
        return isset($this->app_id);
    }

    public function clearAppId()
    {
        unset($this->app_id);
    }

    /**
     * The ID of the mobile app.
     *
     * Generated from protobuf field <code>optional string app_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The app store the mobile app is available in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore app_store = 2;</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * The app store the mobile app is available in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore app_store = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\LegacyAppInstallAdAppStoreEnum\LegacyAppInstallAdAppStore::class);
        $this->app_store = $var;

        return $this;
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>optional string headline = 7;</code>
     * @return string
     */
    public function getHeadline()
    {
        return isset($this->headline) ? $this->headline : '';
    }

    public function hasHeadline()
    {
        return isset($this->headline);
    }

    public function clearHeadline()
    {
        unset($this->headline);
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>optional string headline = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline = $var;

        return $this;
    }

    /**
     * The first description line of the ad.
     *
     * Generated from protobuf field <code>optional string description1 = 8;</code>
     * @return string
     */
    public function getDescription1()
    {
        return isset($this->description1) ? $this->description1 : '';
    }

    public function hasDescription1()
    {
        return isset($this->description1);
    }

    public function clearDescription1()
    {
        unset($this->description1);
    }

    /**
     * The first description line of the ad.
     *
     * Generated from protobuf field <code>optional string description1 = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription1($var)
    {
        GPBUtil::checkString($var, True);
        $this->description1 = $var;

        return $this;
    }

    /**
     * The second description line of the ad.
     *
     * Generated from protobuf field <code>optional string description2 = 9;</code>
     * @return string
     */
    public function getDescription2()
    {
        return isset($this->description2) ? $this->description2 : '';
    }

    public function hasDescription2()
    {
        return isset($this->description2);
    }

    public function clearDescription2()
    {
        unset($this->description2);
    }

    /**
     * The second description line of the ad.
     *
     * Generated from protobuf field <code>optional string description2 = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkString($var, True);
        $this->description2 = $var;

        return $this;
    }

}

