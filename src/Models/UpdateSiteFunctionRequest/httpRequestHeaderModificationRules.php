<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteFunctionRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteFunctionRequest\httpRequestHeaderModificationRules\requestHeaderModification;
use AlibabaCloud\Tea\Model;

class httpRequestHeaderModificationRules extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var requestHeaderModification[]
     */
    public $requestHeaderModification;

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
    protected $_name = [
        'configId'                  => 'ConfigId',
        'requestHeaderModification' => 'RequestHeaderModification',
        'rule'                      => 'Rule',
        'ruleEnable'                => 'RuleEnable',
        'ruleName'                  => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->requestHeaderModification) {
            $res['RequestHeaderModification'] = [];
            if (null !== $this->requestHeaderModification && \is_array($this->requestHeaderModification)) {
                $n = 0;
                foreach ($this->requestHeaderModification as $item) {
                    $res['RequestHeaderModification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpRequestHeaderModificationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['RequestHeaderModification'])) {
            if (!empty($map['RequestHeaderModification'])) {
                $model->requestHeaderModification = [];
                $n                                = 0;
                foreach ($map['RequestHeaderModification'] as $item) {
                    $model->requestHeaderModification[$n++] = null !== $item ? requestHeaderModification::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
