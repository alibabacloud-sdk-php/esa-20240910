<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PublishRoutineCodeVersionRequest extends Model
{
    /**
     * @var string[]
     */
    public $canaryAreaList;

    /**
     * @var string
     */
    public $canaryCodeVersion;

    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var string
     */
    public $env;

    /**
     * @example PublishRoutineCodeVersion
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'canaryAreaList'    => 'CanaryAreaList',
        'canaryCodeVersion' => 'CanaryCodeVersion',
        'codeVersion'       => 'CodeVersion',
        'env'               => 'Env',
        'name'              => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canaryAreaList) {
            $res['CanaryAreaList'] = $this->canaryAreaList;
        }
        if (null !== $this->canaryCodeVersion) {
            $res['CanaryCodeVersion'] = $this->canaryCodeVersion;
        }
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishRoutineCodeVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanaryAreaList'])) {
            if (!empty($map['CanaryAreaList'])) {
                $model->canaryAreaList = $map['CanaryAreaList'];
            }
        }
        if (isset($map['CanaryCodeVersion'])) {
            $model->canaryCodeVersion = $map['CanaryCodeVersion'];
        }
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
