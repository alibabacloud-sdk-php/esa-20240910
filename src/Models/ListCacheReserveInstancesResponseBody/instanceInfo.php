<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @description The capacity of the cache reserve instance. Unit: GB.
     *
     * @example 512000
     *
     * @var string
     */
    public $cacheReserveCapacity;

    /**
     * @description The region in which the cache reserve instance resides.
     *
     * @example HK
     *
     * @var string
     */
    public $cacheReserveRegion;

    /**
     * @description The time when the cache reserve instance was purchased.
     *
     * @example 2024-04-12T05:41:51Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The subscription period of the cache reserve instance. Unit: months.
     *
     * @example 3
     *
     * @var int
     */
    public $duration;

    /**
     * @description The time when the cache reserve instance expires.
     *
     * @example 2024-10-05T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the cache reserve instance.
     *
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the cache reserve instance. Valid values:
     *
     *   online: The instance is in service.
     *   offline: The instance has expired within an allowable period. In this state, the plan is unavailable.
     *   disable: The instance is released.
     *   overdue: The service was stopped due to overdue payments.
     *
     * @example online
     *
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
