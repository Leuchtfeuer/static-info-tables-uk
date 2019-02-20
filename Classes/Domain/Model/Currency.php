<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    protected $nameUk = '';

    protected $subdivisionNameUk = '';

    public function getNameUk(): string
    {
        return $this->nameUk;
    }

    public function setNameUk(string $nameUk): void
    {
        $this->nameUk = $nameUk;
    }

    public function getSubdivisionNameUk(): string
    {
        return $this->subdivisionNameUk;
    }

    public function setSubdivisionNameUk(string $subdivisionNameUk): void
    {
        $this->subdivisionNameUk = $subdivisionNameUk;
    }
}
