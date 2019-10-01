<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Serializer;

/**
 * @inheritdoc
 */
class MappingHelper
{

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * MappingHelper constructor.
     *
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param string $json
     * @param string $type
     * @param string $format
     *
     * @return ArrayCollection|array|object
     */
    public function deserialize(string $json, string $type, string $format = 'json')
    {
        return $this->serializer->deserialize($json, $type, $format);
    }

    /**
     * @param $obj
     *
     * @return mixed|string
     */
    public function serialize($obj)
    {
        return $this->serializer->serialize($obj, 'json');
    }

}