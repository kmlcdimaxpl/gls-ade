<?php
/**
 * MaxParcelWeight.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Nov 24, 2014, 13:22
 */

namespace Webit\GlsAde\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MaxParcelWeight
 * @package Webit\GlsAde\Model
 */
class MaxParcelWeight
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("weight_max_national")
     *
     * @var string
     */
    private $national;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("weight_max_international")
     *
     * @var string
     */
    private $international;

    /**
     * @return string
     */
    public function getNational()
    {
        return $this->national;
    }

    /**
     * @return string
     */
    public function getInternational()
    {
        return $this->international;
    }
}
