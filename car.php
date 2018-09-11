<?php
/**
 * Created by PhpStorm.
 * User: pascalkunz
 * Date: 11.09.18
 * Time: 15:02
 */

class car
{
    protected $_manufactor;
    protected $_doors;

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->_doors;
    }

    /**
     * @param mixed $_doors
     */
    public function setDoors($_doors)
    {
        $this->_doors = $_doors;
    }

    /**
     * @return mixed
     */
    public function getManufactor()
    {
        return $this->_manufactor;
    }

    /**
     * @param mixed $_manufactor
     */
    public function setManufactor($_manufactor)
    {
        $this->_manufactor = $_manufactor;
    }
}