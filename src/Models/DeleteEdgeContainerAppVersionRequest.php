<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteEdgeContainerAppVersionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example app-96253477062511****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example ver-89884764010378****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'     => 'AppId',
        'versionId' => 'VersionId',
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
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEdgeContainerAppVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
