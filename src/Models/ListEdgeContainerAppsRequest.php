<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListEdgeContainerAppsRequest extends Model
{
    /**
     * @description The sorting field. This parameter is left empty by default. Valid values:
     *
     *   Name: the version name.
     *   CreateTime: the time when the version was created.
     *   UpdateTime: the time when the version was last modified.
     *
     * @example CreateTime
     *
     * @var string
     */
    public $orderKey;

    /**
     * @description The order in which you want to sort the query results. This parameter is left empty by default. Valid values:
     *
     *   ASC: in ascending order.
     *   DESC: in descending order.
     *
     * @example Asc
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The page number. Default value: **1**. Valid values: 1 to 65535.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **20**. Valid values: 1 to 500.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search keyword.
     *
     * @example ver-1005682639679266816
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The search criterion based on which you want to perform fuzzy search. Valid values:
     *
     *   Appid: the application ID.
     *   Name: the application name.
     *
     * @example Appid
     *
     * @var string
     */
    public $searchType;
    protected $_name = [
        'orderKey' => 'OrderKey',
        'orderType' => 'OrderType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'searchType' => 'SearchType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeContainerAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }

        return $model;
    }
}
