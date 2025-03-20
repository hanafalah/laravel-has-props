<?php

namespace Zahzah\LaravelHasProps;

use Zahzah\LaravelSupport\Providers\BaseServiceProvider;

class LaravelHasPropsServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(LaravelHasProps::class)
            ->registers([
                'Model',
                'Database',
                'Migration'
            ]);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
