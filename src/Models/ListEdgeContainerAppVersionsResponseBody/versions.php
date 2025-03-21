<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponseBody\versions\containers;
use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @description The application ID.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The containers in the version.
     *
     * @var containers[]
     */
    public $containers;

    /**
     * @description The time when the version was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-11-10T02:53:16Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the version was last released. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-02-10T02:48:36Z
     *
     * @var string
     */
    public $lastPublishTime;

    /**
     * @description The version name.
     *
     * @example version01
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the version was released. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-02-10T02:48:36Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The remarks.
     *
     * @example test version
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The status of the current version. Valid values:
     *
     *   **created**
     *   **failed**
     *   **creating**
     *
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the version was last modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-04-16 10:51:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The version ID.
     *
     * @example ver-87962637161651****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId' => 'AppId',
        'containers' => 'Containers',
        'createTime' => 'CreateTime',
        'lastPublishTime' => 'LastPublishTime',
        'name' => 'Name',
        'publishTime' => 'PublishTime',
        'remarks' => 'Remarks',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'versionId' => 'VersionId',
    ];

    public function validate() {}

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
     * @return versions
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
                $n = 0;
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
