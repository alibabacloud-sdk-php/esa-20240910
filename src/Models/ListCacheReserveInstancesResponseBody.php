<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponseBody\instanceInfo;
use AlibabaCloud\Tea\Model;

class ListCacheReserveInstancesResponseBody extends Model
{
    /**
     * @var instanceInfo[]
     */
    public $instanceInfo;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'instanceInfo' => 'InstanceInfo',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
        'totalPage'    => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = [];
            if (null !== $this->instanceInfo && \is_array($this->instanceInfo)) {
                $n = 0;
                foreach ($this->instanceInfo as $item) {
                    $res['InstanceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCacheReserveInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceInfo'])) {
            if (!empty($map['InstanceInfo'])) {
                $model->instanceInfo = [];
                $n                   = 0;
                foreach ($map['InstanceInfo'] as $item) {
                    $model->instanceInfo[$n++] = null !== $item ? instanceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}