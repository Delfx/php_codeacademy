<?php

class Driver extends Worker
{

    private $drivingExp;
    private $drivingLicense;



    /**
     * Get the value of drivingExp
     */
    public function getDrivingExp()
    {
        return $this->drivingExp;
    }

    /**
     * Set the value of drivingExp
     *
     */
    public function setDrivingExp(int $drivingExp)
    {
        $this->drivingExp = $drivingExp;
    }

    /**
     * Set the value of drivingLicense
     *
     */
    public function setDrivingLicense(Array $drivingLicense)
    {
        $this->drivingLicense = $drivingLicense;
    }

    /**
     * Get the value of drivingLicense
     */
    public function getDrivingLicense()
    {
        return $this->drivingLicense;
    }
}
