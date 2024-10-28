<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers\ACRImageInfo;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers\probeContent;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @var ACRImageInfo
     */
    public $ACRImageInfo;

    /**
     * @example -c /path/config.toml
     *
     * @var string
     */
    public $args;

    /**
     * @example sh abc.sh 1 2 3
     *
     * @var string
     */
    public $command;

    /**
     * @example ENV=prod
     *
     * @var string
     */
    public $envVariables;

    /**
     * @example nginx:1.14.0
     *
     * @var string
     */
    public $image;

    /**
     * @example false
     *
     * @var bool
     */
    public $isACRImage;

    /**
     * @example version01
     *
     * @var string
     */
    public $name;

    /**
     * @example {\\"exec\\":{\\"command\\":[\\"touch\\",\\"/home/admin/checkpoststartV1\\"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @example sh prestart.sh "echo hello world"
     *
     * @var string
     */
    public $preStart;

    /**
     * @example sh prestop.sh "echo hello world"
     *
     * @var string
     */
    public $preStop;

    /**
     * @var probeContent
     */
    public $probeContent;

    /**
     * @example httpGet
     *
     * @var string
     */
    public $probeType;

    /**
     * @example 1C2G
     *
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $storage;
    protected $_name = [
        'ACRImageInfo' => 'ACRImageInfo',
        'args'         => 'Args',
        'command'      => 'Command',
        'envVariables' => 'EnvVariables',
        'image'        => 'Image',
        'isACRImage'   => 'IsACRImage',
        'name'         => 'Name',
        'postStart'    => 'PostStart',
        'preStart'     => 'PreStart',
        'preStop'      => 'PreStop',
        'probeContent' => 'ProbeContent',
        'probeType'    => 'ProbeType',
        'spec'         => 'Spec',
        'storage'      => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACRImageInfo) {
            $res['ACRImageInfo'] = null !== $this->ACRImageInfo ? $this->ACRImageInfo->toMap() : null;
        }
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->envVariables) {
            $res['EnvVariables'] = $this->envVariables;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->isACRImage) {
            $res['IsACRImage'] = $this->isACRImage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStart) {
            $res['PreStart'] = $this->preStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->probeContent) {
            $res['ProbeContent'] = null !== $this->probeContent ? $this->probeContent->toMap() : null;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ACRImageInfo'])) {
            $model->ACRImageInfo = ACRImageInfo::fromMap($map['ACRImageInfo']);
        }
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['EnvVariables'])) {
            $model->envVariables = $map['EnvVariables'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['IsACRImage'])) {
            $model->isACRImage = $map['IsACRImage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStart'])) {
            $model->preStart = $map['PreStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['ProbeContent'])) {
            $model->probeContent = probeContent::fromMap($map['ProbeContent']);
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
