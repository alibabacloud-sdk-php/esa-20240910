<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteCustomLogShrinkRequest extends Model
{
    /**
     * @description The cookie fields.
     *
     * @var string
     */
    public $cookiesShrink;

    /**
     * @description The request header fields.
     *
     * @var string
     */
    public $requestHeadersShrink;

    /**
     * @description The response header fields.
     *
     * @var string
     */
    public $responseHeadersShrink;

    /**
     * @description site id
     *
     * @example 11223****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'cookiesShrink' => 'Cookies',
        'requestHeadersShrink' => 'RequestHeaders',
        'responseHeadersShrink' => 'ResponseHeaders',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookiesShrink) {
            $res['Cookies'] = $this->cookiesShrink;
        }
        if (null !== $this->requestHeadersShrink) {
            $res['RequestHeaders'] = $this->requestHeadersShrink;
        }
        if (null !== $this->responseHeadersShrink) {
            $res['ResponseHeaders'] = $this->responseHeadersShrink;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSiteCustomLogShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cookies'])) {
            $model->cookiesShrink = $map['Cookies'];
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeadersShrink = $map['RequestHeaders'];
        }
        if (isset($map['ResponseHeaders'])) {
            $model->responseHeadersShrink = $map['ResponseHeaders'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
