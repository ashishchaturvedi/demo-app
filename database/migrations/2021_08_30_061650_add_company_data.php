<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Company;

class AddCompanyData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data =  array(
            [
                'name' => 'ABC',
                'description'=>'Jaipur'
            ],
            [
                'name' => 'DEF',
                'description'=>'Delhi'
            ],
            [
                'name' => 'XYZ',
                'description'=>'Pune'
            ],
        );
        foreach ($data as $datum){
            $company = new Company(); 
            $company->name =$datum['name'];
            $company->description =$datum['description'];
            $company->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
