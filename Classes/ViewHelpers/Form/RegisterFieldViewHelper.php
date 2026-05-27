<?php

declare(strict_types=1);

namespace FriendsOfTYPO3\HeadlessPowermail\ViewHelpers\Form;

use TYPO3\CMS\Fluid\ViewHelpers\Form\AbstractFormFieldViewHelper;
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
/**
 * Registers field for generating hidden fields
 */
class RegisterFieldViewHelper extends AbstractFormFieldViewHelper
{
    #[\Override]
    public function render(): string
    {
        $nameAttribute = $this->getName();

        $this->registerFieldNameForFormTokenGeneration($nameAttribute);

        return '';
    }
}
