<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeHttpDDoSAttackIntelligentProtectionResponseBody extends Model
{
    /**
     * @example defense
     *
     * @var string
     */
    public $aiMode;

    /**
     * @example level60
     *
     * @var string
     */
    public $aiTemplate;

    /**
     * @description Id of the request
     *
     * @example CB1A380B-09F0-41BB-3C82-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'aiMode'     => 'AiMode',
        'aiTemplate' => 'AiTemplate',
        'requestId'  => 'RequestId',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiMode) {
            $res['AiMode'] = $this->aiMode;
        }
        if (null !== $this->aiTemplate) {
            $res['AiTemplate'] = $this->aiTemplate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHttpDDoSAttackIntelligentProtectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiMode'])) {
            $model->aiMode = $map['AiMode'];
        }
        if (isset($map['AiTemplate'])) {
            $model->aiTemplate = $map['AiTemplate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}