<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('paypal.mode', 'sandbox');
    }

    public function down(): void
    {
        $this->migrator->delete('paypal.mode');
    }
};
