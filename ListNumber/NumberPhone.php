<?php
namespace NumberPhone;
include_once "../vendor/autoload.php";
class NumberPhone
{
    private array $viettel;
    private array $vinaphone;
    private array $mobifone;

    public function __construct()
    {
        $this->viettel = [];
        $this->vinaphone = [];
        $this->mobifone = [];
    }

    public function addViettel($number)
    {
        array_push($this->viettel, $number);
    }

    public function addMobifone($number)
    {
        array_push($this->mobifone, $number);
    }

    public function addVinaphone($number)
    {
        array_push($this->vinaphone, $number);
    }

    /**
     * @return array
     */
    public function getMobifone(): array
    {
        return $this->mobifone;
    }

    /**
     * @return array
     */
    public function getViettel(): array
    {
        return $this->viettel;
    }

    /**
     * @return array
     */
    public function getVinaphone(): array
    {
        return $this->vinaphone;
    }
}

