<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameUk = '';

    public function getShortNameUk(): string
    {
        return $this->shortNameUk;
    }

    /**
     * @param string $shortNameUk
     */
    public function setShortNameUk(string $shortNameUk)
    {
        $this->shortNameUk = $shortNameUk;
    }
}
