<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait FormatTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("format")
     * @Serializer\Type("string")
     */
    private $format;

    /**
     * @inheritdoc
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getFormat()
    {
        return $this->format;
    }

}
