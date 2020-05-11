<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbColor0f
 *
 * @ORM\Table(name="tb_color0f")
 * @ORM\Entity
 */
class TbColor0f
{
    /**
     * @var string
     *
     * @ORM\Column(name="XCDCOL", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xcdcol;

    /**
     * @var string
     *
     * @ORM\Column(name="XDECOL", type="string", length=100, nullable=false)
     */
    private $xdecol;

    /**
     * @return string
     */
    public function getXcdcol()
    {
        return $this->xcdcol;
    }

    /**
     * @param string $xcdcol
     */
    public function setXcdcol($xcdcol)
    {
        $this->xcdcol = $xcdcol;
    }

    /**
     * @return string
     */
    public function getXdecol()
    {
        return $this->xdecol;
    }

    /**
     * @param string $xdecol
     */
    public function setXdecol($xdecol)
    {
        $this->xdecol = $xdecol;
    }


}
