<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateManagedTransformRequest extends Model
{
    /**
     * @var string
     */
    public $addClientGeolocationHeader;

    /**
     * @var string
     */
    public $addRealClientIpHeader;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'addClientGeolocationHeader' => 'AddClientGeolocationHeader',
        'addRealClientIpHeader' => 'AddRealClientIpHeader',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addClientGeolocationHeader) {
            $res['AddClientGeolocationHeader'] = $this->addClientGeolocationHeader;
        }

        if (null !== $this->addRealClientIpHeader) {
            $res['AddRealClientIpHeader'] = $this->addRealClientIpHeader;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
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
        if (isset($map['AddClientGeolocationHeader'])) {
            $model->addClientGeolocationHeader = $map['AddClientGeolocationHeader'];
        }

        if (isset($map['AddRealClientIpHeader'])) {
            $model->addRealClientIpHeader = $map['AddRealClientIpHeader'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
