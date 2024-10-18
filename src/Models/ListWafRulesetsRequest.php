<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsRequest\queryArgs;
use AlibabaCloud\Tea\Model;

class ListWafRulesetsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example http_bot
     *
     * @var string
     */
    public $phase;

    /**
     * @example http_bot
     *
     * @var queryArgs
     */
    public $queryArgs;

    /**
     * @example 1
     *
     * @var int
     */
    public $siteId;

    /**
     * @example 1
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'phase'       => 'Phase',
        'queryArgs'   => 'QueryArgs',
        'siteId'      => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = null !== $this->queryArgs ? $this->queryArgs->toMap() : null;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWafRulesetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = queryArgs::fromMap($map['QueryArgs']);
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