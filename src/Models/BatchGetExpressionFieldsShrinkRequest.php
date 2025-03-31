<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class BatchGetExpressionFieldsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $expressionsShrink;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'expressionsShrink' => 'Expressions',
        'phase' => 'Phase',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressionsShrink) {
            $res['Expressions'] = $this->expressionsShrink;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
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
        if (isset($map['Expressions'])) {
            $model->expressionsShrink = $map['Expressions'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
