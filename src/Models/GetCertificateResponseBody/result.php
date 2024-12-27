<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateResponseBody\result\DCV;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $applyCode;

    /**
     * @example canceled
     *
     * @var string
     */
    public $applyMessage;

    /**
     * @description The certificate ID on Certificate Management Service.
     *
     * @example 30000478
     *
     * @var string
     */
    public $casId;

    /**
     * @description The Common Name of the certificate.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The time when the certificate was created.
     *
     * @example 2020-05-12 02:00:53
     *
     * @var string
     */
    public $createTime;

    /**
     * @var DCV[]
     */
    public $DCV;

    /**
     * @description The SHA-256 fingerprint of the certificate.
     *
     * @example 1dc5fc9af4eead2570c70d94b416130baeb6d4429b51fd3557379588456aca66
     *
     * @var string
     */
    public $fingerprintSha256;

    /**
     * @description The certificate ID on ESA.
     *
     * @example babaded901474b9693acf530e0fb1d95
     *
     * @var string
     */
    public $id;

    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example DigiCert
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The Common Name of the CA that issued the certificate.
     *
     * @example DigiCert Global Root CA
     *
     * @var string
     */
    public $issuerCN;

    /**
     * @description The certificate name.
     *
     * @example yourCertName
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the certificate expires.
     *
     * @example 2023-11-26T16:00:00Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @description The time when the certificate takes effect.
     *
     * @example 2023-11-26T16:00:00Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The public-key algorithm of the certificate.
     *
     * @example ECDSA
     *
     * @var string
     */
    public $pubAlg;

    /**
     * @description The region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The Subject Alternative Name (SAN) of the certificate.
     *
     * @example www.example.com,*.example.com
     *
     * @var string
     */
    public $SAN;

    /**
     * @description The serial number of the certificate.
     *
     * @example babaded901474b9693acf530e0fb1daa
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The signature algorithm of the certificate.
     *
     * @example ECDSA-SHA1
     *
     * @var string
     */
    public $sigAlg;

    /**
     * @description The certificate status.
     *
     * @example OK
     *
     * @var string
     */
    public $status;

    /**
     * @description The certificate type.
     *
     * @example free
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the certificate was updated.
     *
     * @example 2022-09-22 05:33:13
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'applyCode'         => 'ApplyCode',
        'applyMessage'      => 'ApplyMessage',
        'casId'             => 'CasId',
        'commonName'        => 'CommonName',
        'createTime'        => 'CreateTime',
        'DCV'               => 'DCV',
        'fingerprintSha256' => 'FingerprintSha256',
        'id'                => 'Id',
        'issuer'            => 'Issuer',
        'issuerCN'          => 'IssuerCN',
        'name'              => 'Name',
        'notAfter'          => 'NotAfter',
        'notBefore'         => 'NotBefore',
        'pubAlg'            => 'PubAlg',
        'region'            => 'Region',
        'SAN'               => 'SAN',
        'serialNumber'      => 'SerialNumber',
        'sigAlg'            => 'SigAlg',
        'status'            => 'Status',
        'type'              => 'Type',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyCode) {
            $res['ApplyCode'] = $this->applyCode;
        }
        if (null !== $this->applyMessage) {
            $res['ApplyMessage'] = $this->applyMessage;
        }
        if (null !== $this->casId) {
            $res['CasId'] = $this->casId;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DCV) {
            $res['DCV'] = [];
            if (null !== $this->DCV && \is_array($this->DCV)) {
                $n = 0;
                foreach ($this->DCV as $item) {
                    $res['DCV'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fingerprintSha256) {
            $res['FingerprintSha256'] = $this->fingerprintSha256;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->issuerCN) {
            $res['IssuerCN'] = $this->issuerCN;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->pubAlg) {
            $res['PubAlg'] = $this->pubAlg;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->SAN) {
            $res['SAN'] = $this->SAN;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->sigAlg) {
            $res['SigAlg'] = $this->sigAlg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyCode'])) {
            $model->applyCode = $map['ApplyCode'];
        }
        if (isset($map['ApplyMessage'])) {
            $model->applyMessage = $map['ApplyMessage'];
        }
        if (isset($map['CasId'])) {
            $model->casId = $map['CasId'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DCV'])) {
            if (!empty($map['DCV'])) {
                $model->DCV = [];
                $n          = 0;
                foreach ($map['DCV'] as $item) {
                    $model->DCV[$n++] = null !== $item ? DCV::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FingerprintSha256'])) {
            $model->fingerprintSha256 = $map['FingerprintSha256'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['IssuerCN'])) {
            $model->issuerCN = $map['IssuerCN'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['PubAlg'])) {
            $model->pubAlg = $map['PubAlg'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SAN'])) {
            $model->SAN = $map['SAN'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['SigAlg'])) {
            $model->sigAlg = $map['SigAlg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}