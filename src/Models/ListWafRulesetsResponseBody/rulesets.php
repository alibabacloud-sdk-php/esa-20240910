<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsResponseBody;

use AlibabaCloud\Tea\Model;

class rulesets extends Model
{
    /**
     * @description The matched objects.
     *
     * @var string[]
     */
    public $fields;

    /**
     * @description The ID of the WAF ruleset.[](~~2850233~~)
     *
     * @example 10000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The ruleset name.
     *
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The WAF rule category.
     *
     * @example http_bot
     *
     * @var string
     */
    public $phase;

    /**
     * @description The ruleset status.
     *
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the protection target in the http_bot rule category.
     *
     * @example web
     *
     * @var string
     */
    public $target;

    /**
     * @description The types of rules.
     *
     * @var string[]
     */
    public $types;

    /**
     * @description The time when the ruleset was last modified.
     *
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'fields'     => 'Fields',
        'id'         => 'Id',
        'name'       => 'Name',
        'phase'      => 'Phase',
        'status'     => 'Status',
        'target'     => 'Target',
        'types'      => 'Types',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rulesets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = $map['Fields'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
