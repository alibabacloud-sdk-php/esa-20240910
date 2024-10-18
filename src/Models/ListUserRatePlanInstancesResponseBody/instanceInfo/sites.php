<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody\instanceInfo;

use AlibabaCloud\Tea\Model;

class sites extends Model
{
    /**
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @example pending
     *
     * @var string
     */
    public $siteStatus;
    protected $_name = [
        'siteId'     => 'SiteId',
        'siteName'   => 'SiteName',
        'siteStatus' => 'SiteStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->siteStatus) {
            $res['SiteStatus'] = $this->siteStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['SiteStatus'])) {
            $model->siteStatus = $map['SiteStatus'];
        }

        return $model;
    }
}