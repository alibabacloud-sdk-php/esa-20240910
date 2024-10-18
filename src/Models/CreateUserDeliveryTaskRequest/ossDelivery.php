<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;

use AlibabaCloud\Tea\Model;

class ossDelivery extends Model
{
    /**
     * @var string
     */
    public $aliuid;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @example logriver-test/log
     *
     * @var string
     */
    public $prefixPath;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'aliuid'     => 'Aliuid',
        'bucketName' => 'BucketName',
        'prefixPath' => 'PrefixPath',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->prefixPath) {
            $res['PrefixPath'] = $this->prefixPath;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossDelivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['PrefixPath'])) {
            $model->prefixPath = $map['PrefixPath'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}