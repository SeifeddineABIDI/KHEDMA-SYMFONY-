<?php

namespace ContainerZKswXJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Symfony\\UX\\Autocomplete\\Form'], [0 => 'App\\Form\\AnnonceType', 1 => 'App\\Form\\CategorieType', 2 => 'App\\Form\\ChangePasswordFormType', 3 => 'App\\Form\\ClassificationType', 4 => 'App\\Form\\EvenementType', 5 => 'App\\Form\\MetierType', 6 => 'App\\Form\\ProjetType', 7 => 'App\\Form\\RaitingType', 8 => 'App\\Form\\RegistrationFormType', 9 => 'App\\Form\\ResetPasswordRequestFormType', 10 => 'App\\Form\\SousMetierType', 11 => 'App\\Form\\TacheType', 12 => 'App\\Form\\UserType', 13 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 14 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 15 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 16 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 17 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 18 => 'Symfony\\UX\\Autocomplete\\Form\\ParentEntityAutocompleteType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Symfony\\UX\\Autocomplete\\Form\\AutocompleteChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
