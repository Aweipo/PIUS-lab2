<?php

namespace App\Console\Commands;

use App\Models\Adress;
use Illuminate\Console\Command;

class GetAmountOfCustomerAdressesById extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-adresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return amount of adresses wich customer create';

    
    public function handle(): void
    {
        $id = $this->argument('id');
        if (Adress::where('id',$id)->exists())
        {
            $adressesCount = Adress::where('customer_id', $id)->count();
            $this->info($adressesCount.' adresses');
        }
        else
        {
            $this->info('Not found');
        }
    }
}