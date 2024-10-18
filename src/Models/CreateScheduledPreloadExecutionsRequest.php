<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsRequest\executions;
use AlibabaCloud\Tea\Model;

class CreateScheduledPreloadExecutionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var executions[]
     */
    public $executions;

    /**
     * @example CreateScheduledPreloadExecutions
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'executions' => 'Executions',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executions) {
            $res['Executions'] = [];
            if (null !== $this->executions && \is_array($this->executions)) {
                $n = 0;
                foreach ($this->executions as $item) {
                    $res['Executions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledPreloadExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Executions'])) {
            if (!empty($map['Executions'])) {
                $model->executions = [];
                $n                 = 0;
                foreach ($map['Executions'] as $item) {
                    $model->executions[$n++] = null !== $item ? executions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}