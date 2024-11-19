<?php
declare(strict_types=1);

namespace App\Security;

use App\Security\Services\HoneyPotService;

class FormBotProtection
{
    private HoneyPotService $honeyPotService;

    /**
     * Korzystamy ze wstrzykiwania zależności Dependency Injection
     * W razie rozszerzenia funkcjonalności o kolejne walidatory,
     * wystarczy dodać nowy serwis implementujący interfejs FormValidationInterface, a następnie wstrzyknąć go w konstruktorze.
     *
     * @param HoneyPotService $honeyPotService
     */
    public function __construct(HoneyPotService $honeyPotService) {
        $this->honeyPotService = $honeyPotService;
    }

    /**
     * Metoda sprawdzająca, czy formularz został wypełniony przez bota
     *
     * @param array $formData
     * @return bool
     */
    public function isFormSubmittedByBot(array $formData): bool {
        return $this->honeyPotService->validate($formData);
    }

}