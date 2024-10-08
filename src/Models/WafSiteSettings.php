<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\addBotProtectionHeaders;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\addSecurityHeaders;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\clientIpIdentifier;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\securityLevel;
use AlibabaCloud\Tea\Model;

class WafSiteSettings extends Model
{
    /**
     * @var addBotProtectionHeaders
     */
    public $addBotProtectionHeaders;

    /**
     * @var addSecurityHeaders
     */
    public $addSecurityHeaders;

    /**
     * @var clientIpIdentifier
     */
    public $clientIpIdentifier;

    /**
     * @var securityLevel
     */
    public $securityLevel;
    protected $_name = [
        'addBotProtectionHeaders' => 'AddBotProtectionHeaders',
        'addSecurityHeaders'      => 'AddSecurityHeaders',
        'clientIpIdentifier'      => 'ClientIpIdentifier',
        'securityLevel'           => 'SecurityLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addBotProtectionHeaders) {
            $res['AddBotProtectionHeaders'] = null !== $this->addBotProtectionHeaders ? $this->addBotProtectionHeaders->toMap() : null;
        }
        if (null !== $this->addSecurityHeaders) {
            $res['AddSecurityHeaders'] = null !== $this->addSecurityHeaders ? $this->addSecurityHeaders->toMap() : null;
        }
        if (null !== $this->clientIpIdentifier) {
            $res['ClientIpIdentifier'] = null !== $this->clientIpIdentifier ? $this->clientIpIdentifier->toMap() : null;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = null !== $this->securityLevel ? $this->securityLevel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WafSiteSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddBotProtectionHeaders'])) {
            $model->addBotProtectionHeaders = addBotProtectionHeaders::fromMap($map['AddBotProtectionHeaders']);
        }
        if (isset($map['AddSecurityHeaders'])) {
            $model->addSecurityHeaders = addSecurityHeaders::fromMap($map['AddSecurityHeaders']);
        }
        if (isset($map['ClientIpIdentifier'])) {
            $model->clientIpIdentifier = clientIpIdentifier::fromMap($map['ClientIpIdentifier']);
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = securityLevel::fromMap($map['SecurityLevel']);
        }

        return $model;
    }
}
