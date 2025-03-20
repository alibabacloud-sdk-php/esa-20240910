<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PurchaseCacheReserveResponseBody extends Model
{
    /**
     * @description Instance ID.
     *
     * @example xcdn-ad*****s11w
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Order ID.
     *
     * @example 31223****11
     *
     * @var string
     */
    public $orderId;

    /**
     * @description Request ID.
     *
     * @example 30423A7F-A83D-1E24-B80E-86DD25790758
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseCacheReserveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
