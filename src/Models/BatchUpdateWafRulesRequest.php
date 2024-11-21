<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchUpdateWafRulesRequest extends Model
{
    /**
     * @description The configurations of rules.
     *
     * @var WafRuleConfig[]
     */
    public $configs;

    /**
     * @description The WAF rule category.
     *
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @description The ID of the WAF ruleset, which can be obtained by calling the [ListWafRulesets](https://help.aliyun.com/document_detail/2850233.html) operation.
     *
     * @example 10000001
     *
     * @var int
     */
    public $rulesetId;

    /**
     * @description The configurations shared by multiple rules.
     *
     * @var WafBatchRuleShared
     */
    public $shared;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 1
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version of the website.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configs'     => 'Configs',
        'phase'       => 'Phase',
        'rulesetId'   => 'RulesetId',
        'shared'      => 'Shared',
        'siteId'      => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->rulesetId) {
            $res['RulesetId'] = $this->rulesetId;
        }
        if (null !== $this->shared) {
            $res['Shared'] = null !== $this->shared ? $this->shared->toMap() : null;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateWafRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? WafRuleConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
        }
        if (isset($map['Shared'])) {
            $model->shared = WafBatchRuleShared::fromMap($map['Shared']);
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
