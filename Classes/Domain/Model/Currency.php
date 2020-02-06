<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    protected $nameUk = '';

    protected $subdivisionNameUk = '';

    public function getNameUk(): string
    {
        return $this->nameUk;
    }

    /**
     * @param string $nameUk
     */
    public function setNameUk(string $nameUk)
    {
        $this->nameUk = $nameUk;
    }

    public function getSubdivisionNameUk(): string
    {
        return $this->subdivisionNameUk;
    }

    /**
     * @param string $subdivisionNameUk
     */
    public function setSubdivisionNameUk(string $subdivisionNameUk)
    {
        $this->subdivisionNameUk = $subdivisionNameUk;
    }
}
