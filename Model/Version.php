<?php

namespace LaxCorp\BillingPartnerBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
class Version
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("incrementalApiVersion")
     * @Serializer\Type("string")
     */
    private $incrementalApiVersion;

    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var string
     *
     * @Serializer\SerializedName("version")
     * @Serializer\Type("string")
     */
    private $version;

    /**
     * @var string
     *
     * @Serializer\SerializedName("revision")
     * @Serializer\Type("string")
     */
    private $revision;

    /**
     * @var string
     *
     * @Serializer\SerializedName("timestamp")
     * @Serializer\Type("string")
     */
    private $timestamp;

    /**
     * @return string
     */
    public function getIncrementalApiVersion(): string
    {
        return $this->incrementalApiVersion;
    }

    /**
     * @param string $incrementalApiVersion
     *
     * @return Version
     */
    public function setIncrementalApiVersion(string $incrementalApiVersion): Version
    {
        $this->incrementalApiVersion = $incrementalApiVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Version
     */
    public function setName(string $name): Version
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Version
     */
    public function setVersion(string $version): Version
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getRevision(): string
    {
        return $this->revision;
    }

    /**
     * @param string $revision
     *
     * @return Version
     */
    public function setRevision(string $revision): Version
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     *
     * @return Version
     */
    public function setTimestamp(string $timestamp): Version
    {
        $this->timestamp = $timestamp;

        return $this;
    }

}
