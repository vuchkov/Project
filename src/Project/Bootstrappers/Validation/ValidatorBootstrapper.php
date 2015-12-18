<?php
/**
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2015 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */
namespace Project\Bootstrappers\Validation;

use Opulence\Framework\Bootstrappers\Validation\ValidatorBootstrapper as BaseBootstrapper;
use Opulence\Validation\Rules\Errors\ErrorTemplateRegistry;

/**
 * Defines the validator bootstrapper
 */
class ValidatorBootstrapper extends BaseBootstrapper
{
    /**
     * Registers the error templates
     *
     * @param ErrorTemplateRegistry $errorTemplateRegistry The registry to register to
     */
    protected function registerErrorTemplates(ErrorTemplateRegistry $errorTemplateRegistry)
    {
        $errorTemplateRegistry->registerErrorTemplatesFromConfig(
            require "{$this->paths["resources.lang.en"]}/validation.php"
        );
    }
}