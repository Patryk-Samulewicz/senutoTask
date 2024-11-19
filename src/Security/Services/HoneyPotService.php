<?php
declare(strict_types=1);

namespace App\Security\Services;

use App\Security\Interfaces\FormValidationInterface;

class HoneyPotService implements FormValidationInterface
{
    /**
     * Sprawdzamy, czy pole honeypot jest puste - jeśli nie, to znaczy, że formularz został wypełniony przez bota
     *
     * @param array $formData
     * @return bool
     */
    public function validate(array $formData): bool {
        return empty($formData['honeypot_hidden_field'] ?? '');
    }
}