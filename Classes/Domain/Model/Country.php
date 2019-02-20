<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    protected $shortNameUk = '';

    public function getShortNameUk(): string
    {
        return $this->shortNameUk;
    }

    public function setShortNameUk(string $shortNameUk): void
    {
        $this->shortNameUk = $shortNameUk;
    }
}
