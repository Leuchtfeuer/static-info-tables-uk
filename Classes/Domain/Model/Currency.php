<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (UK)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameUk = '';

    /**
     * @var string
     */
    protected $subdivisionNameUk = '';

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

    /**
     * @return string
     */
    public function getSubdivisionNameUk()
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
