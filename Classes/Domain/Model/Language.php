<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (UK)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

class Language extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameUk = '';

    /**
     * @return string
     */
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
