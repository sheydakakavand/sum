<?php

namespace First\Sum\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Episode
 *
 * @package App
 *
 * @property integer id
 * @property string  number1
 * @property string  number2
 * @property string  total
 */
class Number extends Model
{
    protected $table='number';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNumber1(): string
    {
        return $this->number1;
    }

    /**
     * @param string $number1
     */
    public function setNumber1(string $number1): void
    {
        $this->number1 = $number1;
    }

    /**
     * @return string
     */
    public function getNumber2(): string
    {
        return $this->number2;
    }

    /**
     * @param string $number2
     */
    public function setNumber2(string $number2): void
    {
        $this->number2 = $number2;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @param string $total
     */
    public function setTotal(string $total): void
    {
        $this->total = $total;
    }

}
