<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateClientCertificateResponseBody extends Model
{
    /**
     * @description The ID of the CA certificate.
     *
     * @example babaded901474b9693acf530e0fb1dbb
     *
     * @var string
     */
    public $CACertificateId;

    /**
     * @description The certificate content.
     *
     * @example -----BEGIN CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The Common Name of the certificate.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $commonName;

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
     * @description The CA that issued the certificate.
     *
     * @example DCDN CA
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The time when the certificate expires.
     *
     * @example 2024-12-01T02:12:49Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @description The time when the certificate takes effect.
     *
     * @example 2023-12-01T02:12:49Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The private key of the certificate.
     *
     * @example -----BEGIN PRIVATE KEY-----
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The request ID.
     *
     * @example C370DAF1-C838-4288-A1A0-9A87633D248E
     *
     * @var string
     */
    public $requestId;

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
     * @example SHA256-RSA
     *
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @description The status of the certificate.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The validity period of the certificate. Unit: day.
     *
     * @example 365
     *
     * @var string
     */
    public $validityDays;
    protected $_name = [
        'CACertificateId' => 'CACertificateId',
        'certificate' => 'Certificate',
        'commonName' => 'CommonName',
        'fingerprintSha256' => 'FingerprintSha256',
        'id' => 'Id',
        'issuer' => 'Issuer',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'privateKey' => 'PrivateKey',
        'requestId' => 'RequestId',
        'serialNumber' => 'SerialNumber',
        'signatureAlgorithm' => 'SignatureAlgorithm',
        'status' => 'Status',
        'validityDays' => 'ValidityDays',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
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
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->signatureAlgorithm) {
            $res['SignatureAlgorithm'] = $this->signatureAlgorithm;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validityDays) {
            $res['ValidityDays'] = $this->validityDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
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
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['SignatureAlgorithm'])) {
            $model->signatureAlgorithm = $map['SignatureAlgorithm'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidityDays'])) {
            $model->validityDays = $map['ValidityDays'];
        }

        return $model;
    }
}
