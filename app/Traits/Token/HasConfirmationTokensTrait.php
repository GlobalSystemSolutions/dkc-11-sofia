<?php

namespace App\Traits\Token;

use App\Models\Token\ConfirmationToken;

trait HasConfirmationTokensTrait
{
    public function generateConfirmationToken()
    {
        $this->confirmationToken()->create([
            'token' => $token = str_random(150),
            'expires_at' => $this->getConfirmationTokenExpiry()
        ]);

        return $token;
    }

    protected function getConfirmationTokenExpiry()
    {
        return $this->freshTimestamp()->addDays(15);
    }

    public function confirmationToken()
    {
        return $this->hasOne(ConfirmationToken::class);
    }
}