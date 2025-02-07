<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateOriginRuleRequest extends Model
{
    /**
     * @var string
     */
    public $dnsRecord;
    /**
     * @var string
     */
    public $originHost;
    /**
     * @var string
     */
    public $originHttpPort;
    /**
     * @var string
     */
    public $originHttpsPort;
    /**
     * @var string
     */
    public $originScheme;
    /**
     * @var string
     */
    public $originSni;
    /**
     * @var string
     */
    public $range;
    /**
     * @var string
     */
    public $rule;
    /**
     * @var string
     */
    public $ruleEnable;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'dnsRecord'       => 'DnsRecord',
        'originHost'      => 'OriginHost',
        'originHttpPort'  => 'OriginHttpPort',
        'originHttpsPort' => 'OriginHttpsPort',
        'originScheme'    => 'OriginScheme',
        'originSni'       => 'OriginSni',
        'range'           => 'Range',
        'rule'            => 'Rule',
        'ruleEnable'      => 'RuleEnable',
        'ruleName'        => 'RuleName',
        'siteId'          => 'SiteId',
        'siteVersion'     => 'SiteVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->originScheme) {
            $res['OriginScheme'] = $this->originScheme;
        }

        if (null !== $this->originSni) {
            $res['OriginSni'] = $this->originSni;
        }

        if (null !== $this->range) {
            $res['Range'] = $this->range;
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

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['OriginScheme'])) {
            $model->originScheme = $map['OriginScheme'];
        }

        if (isset($map['OriginSni'])) {
            $model->originSni = $map['OriginSni'];
        }

        if (isset($map['Range'])) {
            $model->range = $map['Range'];
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

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
