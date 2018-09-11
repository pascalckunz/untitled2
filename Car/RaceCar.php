<?php
/**
 * Created by PhpStorm.
 * User: pascalkunz
 * Date: 11.09.18
 * Time: 15:38
 */

class RaceCar
{
    protected $_hp;
    protected $_maxSpeed;

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->_maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->_maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->_hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->_hp = $hp;
    }
}