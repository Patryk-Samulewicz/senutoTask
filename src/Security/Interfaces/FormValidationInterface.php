<?php
declare(strict_types=1);

namespace App\Security\Interfaces;

/**
 * Interfejs dla walidatorów-każdy walidator musi dostarczyć metodę validate, którą będzie można wywołać
 */
interface FormValidationInterface
{
    public function validate(array $formData): bool;
}