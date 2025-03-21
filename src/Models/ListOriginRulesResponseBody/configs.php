<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginRulesResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 395386449776640
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule configurations. Value range:
     * - global: Query global configuration.
     * - rule: Query rule configuration.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Rewrite the DNS resolution record for the origin request.
     *
     * @example test.example.com
     *
     * @var string
     */
    public $dnsRecord;

    /**
     * @description HOST carried in the origin request.
     *
     * @example origin.example.com
     *
     * @var string
     */
    public $originHost;

    /**
     * @description The port of the origin server to access when using the HTTP protocol for origin requests.
     *
     * @example 8080
     *
     * @var string
     */
    public $originHttpPort;

    /**
     * @description The port of the origin server to access when using the HTTPS protocol for origin requests.
     *
     * @example 4433
     *
     * @var string
     */
    public $originHttpsPort;

    /**
     * @description mTLS switch. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $originMtls;

    /**
     * @description Protocol used for the origin request. Value range:
     * - http: Use HTTP protocol for origin.
     * - https: Use HTTPS protocol for origin.
     * - follow: Follow the client\\"s protocol for origin.
     *
     * @example http
     *
     * @var string
     */
    public $originScheme;

    /**
     * @description SNI carried in the back-to-origin request.
     *
     * @example origin.example.com
     *
     * @var string
     */
    public $originSni;

    /**
     * @description Origin certificate verification switch. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $originVerify;

    /**
     * @description Use range slicing to download files from the origin. Value range:
     * - on: Enable
     * - off: Disable
     * - force: Force
     *
     * @example on
     *
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $rangeChunkSize;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule execution order. The smaller the value, the higher the priority.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, this parameter can specify the version of the site for which the configuration is effective, defaulting to version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'dnsRecord' => 'DnsRecord',
        'originHost' => 'OriginHost',
        'originHttpPort' => 'OriginHttpPort',
        'originHttpsPort' => 'OriginHttpsPort',
        'originMtls' => 'OriginMtls',
        'originScheme' => 'OriginScheme',
        'originSni' => 'OriginSni',
        'originVerify' => 'OriginVerify',
        'range' => 'Range',
        'rangeChunkSize' => 'RangeChunkSize',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->dnsRecord) {
            $res['DnsRecord'] = $this->dnsRecord;
        }
        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }
        if (null !== $this->originHttpPort) {
            $res['OriginHttpPort'] = $this->originHttpPort;
        }
        if (null !== $this->originHttpsPort) {
            $res['OriginHttpsPort'] = $this->originHttpsPort;
        }
        if (null !== $this->originMtls) {
            $res['OriginMtls'] = $this->originMtls;
        }
        if (null !== $this->originScheme) {
            $res['OriginScheme'] = $this->originScheme;
        }
        if (null !== $this->originSni) {
            $res['OriginSni'] = $this->originSni;
        }
        if (null !== $this->originVerify) {
            $res['OriginVerify'] = $this->originVerify;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }
        if (null !== $this->rangeChunkSize) {
            $res['RangeChunkSize'] = $this->rangeChunkSize;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['DnsRecord'])) {
            $model->dnsRecord = $map['DnsRecord'];
        }
        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }
        if (isset($map['OriginHttpPort'])) {
            $model->originHttpPort = $map['OriginHttpPort'];
        }
        if (isset($map['OriginHttpsPort'])) {
            $model->originHttpsPort = $map['OriginHttpsPort'];
        }
        if (isset($map['OriginMtls'])) {
            $model->originMtls = $map['OriginMtls'];
        }
        if (isset($map['OriginScheme'])) {
            $model->originScheme = $map['OriginScheme'];
        }
        if (isset($map['OriginSni'])) {
            $model->originSni = $map['OriginSni'];
        }
        if (isset($map['OriginVerify'])) {
            $model->originVerify = $map['OriginVerify'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }
        if (isset($map['RangeChunkSize'])) {
            $model->rangeChunkSize = $map['RangeChunkSize'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
