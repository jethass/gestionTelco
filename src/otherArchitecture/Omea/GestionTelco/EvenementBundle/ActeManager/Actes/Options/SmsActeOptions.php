<?php

namespace Omea\GestionTelco\EvenementBundle\ActeManager\Actes\Options;
use Omea\GestionTelco\EvenementBundle\ActeManager\ActeOptionsInterface;

/**
 * Options disponibles pour SMSActe.
 */
class SmsActeOptions implements ActeOptionsInterface
{
    public $codeTemplate;
    public $idOption;
    public $idOptionGroup;
}
