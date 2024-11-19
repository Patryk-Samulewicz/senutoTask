<?php
declare(strict_types=1);

use App\Security\FormBotProtection;
use App\Security\Services\HoneyPotService;

require_once 'vendor/autoload.php';

$validFormData = [
    'name' => 'Jan Kowalski',
    'email' => 'test@test.pl',
    'honeypot_hidden_field' => ''
];

$invalidFormData = [
    'name' => 'Jan Kowalski',
    'email' => 'test@test.pl',
    'honeypot_hidden_field' => 'test'
];

$formProtection = new FormBotProtection(new HoneyPotService());

var_dump($formProtection->isFormSubmittedByBot($validFormData)); // false
var_dump($formProtection->isFormSubmittedByBot($invalidFormData)); // true
