<?php

declare(strict_types=1);

/**
 * This file is part of Laravel Code Analyse.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\LaravelCodeAnalyse;

use Illuminate\Support\ServiceProvider;
use NunoMaduro\LaravelCodeAnalyse\Console\CodeAnalyseCommand;

final class LaravelCodeAnalyseServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        if ($this->app->runningInConsole() && ! $this->app->runningUnitTests()) {
            $this->commands(CodeAnalyseCommand::class);
        }
    }
}
