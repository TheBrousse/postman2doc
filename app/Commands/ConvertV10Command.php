<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class ConvertV10Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert10
                                    {file : The postman collection version 1.0.0 filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert postman collection to markdown.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $this->warn('I am working for v1.0.0, please stay tuned for updates.');
    }
}
