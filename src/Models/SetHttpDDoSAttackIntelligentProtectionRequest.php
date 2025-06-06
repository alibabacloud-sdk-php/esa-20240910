<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetHttpDDoSAttackIntelligentProtectionRequest extends Model
{
    /**
     * @var string
     */
    public $aiMode;

    /**
     * @var string
     */
    public $aiTemplate;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'aiMode' => 'AiMode',
        'aiTemplate' => 'AiTemplate',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiMode) {
            $res['AiMode'] = $this->aiMode;
        }

        if (null !== $this->aiTemplate) {
            $res['AiTemplate'] = $this->aiTemplate;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['AiMode'])) {
            $model->aiMode = $map['AiMode'];
        }

        if (isset($map['AiTemplate'])) {
            $model->aiTemplate = $map['AiTemplate'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
