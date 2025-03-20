<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpsApplicationConfigurationsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description Alt-Svc feature switch, default is off. Value range:
     * - on: enabled.
     * - off: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $altSvc;

    /**
     * @description Whether the Alt-Svc header includes the clear parameter, default is off. Values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $altSvcClear;

    /**
     * @description The validity period of Alt-Svc in seconds, default is 86400 seconds.
     *
     * @example 86400
     *
     * @var string
     */
    public $altSvcMa;

    /**
     * @description Whether the Alt-Svc header includes the persist parameter, default is off. Values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $altSvcPersist;

    /**
     * @description Configuration ID.
     *
     * @example 395386449776640
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule-based configurations. Possible values:
     * - global: Query global configuration.
     * - rule: Query rule-based configuration.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Whether HSTS is enabled, default is off. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $hsts;

    /**
     * @description Whether to include subdomains in HSTS, default is off. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $hstsIncludeSubdomains;

    /**
     * @description The expiration time of HSTS in seconds.
     *
     * @example 3600
     *
     * @var string
     */
    public $hstsMaxAge;

    /**
     * @description Whether HSTS preloading is enabled, default is off. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $hstsPreload;

    /**
     * @description Whether to enable forced HTTPS, default is disabled. Possible values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $httpsForce;

    /**
     * @description Forced HTTPS redirect status code. Possible values:
     * - 301
     * - 302
     * - 307
     * - 308
     *
     * @example 301
     *
     * @var string
     */
    public $httpsForceCode;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true.
     * - Match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Possible values:
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
     * @description Site configuration version number. For sites with version management enabled, this parameter can specify the site version for which the configuration is effective, default is version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'altSvc' => 'AltSvc',
        'altSvcClear' => 'AltSvcClear',
        'altSvcMa' => 'AltSvcMa',
        'altSvcPersist' => 'AltSvcPersist',
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'hsts' => 'Hsts',
        'hstsIncludeSubdomains' => 'HstsIncludeSubdomains',
        'hstsMaxAge' => 'HstsMaxAge',
        'hstsPreload' => 'HstsPreload',
        'httpsForce' => 'HttpsForce',
        'httpsForceCode' => 'HttpsForceCode',
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
        if (null !== $this->altSvc) {
            $res['AltSvc'] = $this->altSvc;
        }
        if (null !== $this->altSvcClear) {
            $res['AltSvcClear'] = $this->altSvcClear;
        }
        if (null !== $this->altSvcMa) {
            $res['AltSvcMa'] = $this->altSvcMa;
        }
        if (null !== $this->altSvcPersist) {
            $res['AltSvcPersist'] = $this->altSvcPersist;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->hsts) {
            $res['Hsts'] = $this->hsts;
        }
        if (null !== $this->hstsIncludeSubdomains) {
            $res['HstsIncludeSubdomains'] = $this->hstsIncludeSubdomains;
        }
        if (null !== $this->hstsMaxAge) {
            $res['HstsMaxAge'] = $this->hstsMaxAge;
        }
        if (null !== $this->hstsPreload) {
            $res['HstsPreload'] = $this->hstsPreload;
        }
        if (null !== $this->httpsForce) {
            $res['HttpsForce'] = $this->httpsForce;
        }
        if (null !== $this->httpsForceCode) {
            $res['HttpsForceCode'] = $this->httpsForceCode;
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
        if (isset($map['AltSvc'])) {
            $model->altSvc = $map['AltSvc'];
        }
        if (isset($map['AltSvcClear'])) {
            $model->altSvcClear = $map['AltSvcClear'];
        }
        if (isset($map['AltSvcMa'])) {
            $model->altSvcMa = $map['AltSvcMa'];
        }
        if (isset($map['AltSvcPersist'])) {
            $model->altSvcPersist = $map['AltSvcPersist'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['Hsts'])) {
            $model->hsts = $map['Hsts'];
        }
        if (isset($map['HstsIncludeSubdomains'])) {
            $model->hstsIncludeSubdomains = $map['HstsIncludeSubdomains'];
        }
        if (isset($map['HstsMaxAge'])) {
            $model->hstsMaxAge = $map['HstsMaxAge'];
        }
        if (isset($map['HstsPreload'])) {
            $model->hstsPreload = $map['HstsPreload'];
        }
        if (isset($map['HttpsForce'])) {
            $model->httpsForce = $map['HttpsForce'];
        }
        if (isset($map['HttpsForceCode'])) {
            $model->httpsForceCode = $map['HttpsForceCode'];
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
