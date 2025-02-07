<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetSiteDeliveryTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var string
     */
    public $dataCenter;
    /**
     * @var string
     */
    public $deliveryType;
    /**
     * @var float
     */
    public $discardRate;
    /**
     * @var string
     */
    public $fieldList;
    /**
     * @var string
     */
    public $filterRules;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var mixed
     */
    public $sinkConfig;
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var string
     */
    public $siteName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter'   => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'discardRate'  => 'DiscardRate',
        'fieldList'    => 'FieldList',
        'filterRules'  => 'FilterRules',
        'requestId'    => 'RequestId',
        'sinkConfig'   => 'SinkConfig',
        'siteId'       => 'SiteId',
        'siteName'     => 'SiteName',
        'status'       => 'Status',
        'taskName'     => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }

        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
        }

        if (null !== $this->filterRules) {
            $res['FilterRules'] = $this->filterRules;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sinkConfig) {
            $res['SinkConfig'] = $this->sinkConfig;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }

        if (isset($map['FieldList'])) {
            $model->fieldList = $map['FieldList'];
        }

        if (isset($map['FilterRules'])) {
            $model->filterRules = $map['FilterRules'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SinkConfig'])) {
            $model->sinkConfig = $map['SinkConfig'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
