<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers;
use AlibabaCloud\Tea\Model;

class version extends Model
{
    /**
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @var containers[]
     */
    public $containers;

    /**
     * @example 2022-07-01T09:32:33Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2023-07-25T04:58:05Z
     *
     * @var string
     */
    public $lastPublishTime;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 2022-11-14T02:04:03Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @example aaa
     *
     * @var string
     */
    public $remarks;

    /**
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-12-03T10:52:52Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example ver-87962637161651****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'           => 'AppId',
        'containers'      => 'Containers',
        'createTime'      => 'CreateTime',
        'lastPublishTime' => 'LastPublishTime',
        'name'            => 'Name',
        'publishTime'     => 'PublishTime',
        'remarks'         => 'Remarks',
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
        'versionId'       => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastPublishTime) {
            $res['LastPublishTime'] = $this->lastPublishTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return version
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastPublishTime'])) {
            $model->lastPublishTime = $map['LastPublishTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}