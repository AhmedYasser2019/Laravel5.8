<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company {name} {phone=N/A}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new company';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('what is the company name ?');
        $phone = $this->ask('what is the company\'s phone number');

        if ($this->confirm('Are you ready to insert "' .$name. '"?'))
        {
            $company = Company::create([
                "name" => $name,
                "phone" => $phone
            ]);

            $this->info('Added: '.$company->name);
        }else{

            $this->warn('No new company is added.');
        }

    }
}
