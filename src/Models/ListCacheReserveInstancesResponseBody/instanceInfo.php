<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $cacheReserveCapacity;

    /**
     * @var string
     */
    public $cacheReserveRegion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cacheReserveCapacity' => 'CacheReserveCapacity',
        'cacheReserveRegion'   => 'CacheReserveRegion',
        'createTime'           => 'CreateTime',
        'duration'             => 'Duration',
        'expireTime'           => 'ExpireTime',
        'instanceId'           => 'InstanceId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheReserveCapacity) {
            $res['CacheReserveCapacity'] = $this->cacheReserveCapacity;
        }
        if (null !== $this->cacheReserveRegion) {
            $res['CacheReserveRegion'] = $this->cacheReserveRegion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheReserveCapacity'])) {
            $model->cacheReserveCapacity = $map['CacheReserveCapacity'];
        }
        if (isset($map['CacheReserveRegion'])) {
            $model->cacheReserveRegion = $map['CacheReserveRegion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}