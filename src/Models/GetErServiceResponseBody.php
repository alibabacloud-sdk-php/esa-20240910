<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetErServiceResponseBody extends Model
{
    /**
     * @description The billing mode. Valid values:
     *
     *   er_paymode: billed for customers on the China site.
     *   er_freemode: free for customers on the China site.
     *   er_paymodeintl: billed for customers on the International site.
     *   err_freemodeintl: free for customers on the International site
     *
     * @example er_paymode
     *
     * @var string
     */
    public $planName;

    /**
     * @description The request ID.
     *
     * @example CB1A380B-09F0-41BB-A198-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service status. Valid values:
     *
     *   Creating
     *   Running
     *   NotOpened
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'planName'  => 'PlanName',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetErServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
