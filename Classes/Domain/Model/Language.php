<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    protected $nameUk = '';

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
}
