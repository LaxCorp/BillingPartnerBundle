<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait BlankFieldTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("blankField")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getBlankFieldAccessor",setter="setBlankFieldAccessor")
     */
    private $blankField;

    /**
     * @inheritdoc
     */
    public function setBlankField($blankField)
    {
        $this->blankField = $blankField;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setBlankFieldAccessor($blankField)
    {
        $this->blankField = ConvertUtil::longDate($blankField);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBlankField()
    {
        return $this->blankField;
    }

    /**
     * @inheritdoc
     */
    public function getBlankFieldAccessor()
    {
        return ConvertUtil::dateLong($this->blankField);
    }

}
