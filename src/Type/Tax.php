<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class Tax
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $excvat;

    /**
     * @var float
     */
    private $incvat;

    /**
     * @var bool
     */
    private $prop;

    /**
     * @var string
     */
    private $f;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tax
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return float
     */
    public function getExcvat()
    {
        return $this->excvat;
    }

    /**
     * @param float $excvat
     * @return Tax
     */
    public function withExcvat($excvat)
    {
        $new = clone $this;
        $new->excvat = $excvat;

        return $new;
    }

    /**
     * @return float
     */
    public function getIncvat()
    {
        return $this->incvat;
    }

    /**
     * @param float $incvat
     * @return Tax
     */
    public function withIncvat($incvat)
    {
        $new = clone $this;
        $new->incvat = $incvat;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param bool $prop
     * @return Tax
     */
    public function withProp($prop)
    {
        $new = clone $this;
        $new->prop = $prop;

        return $new;
    }

    /**
     * @return string
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * @param string $f
     * @return Tax
     */
    public function withF($f)
    {
        $new = clone $this;
        $new->f = $f;

        return $new;
    }


}

