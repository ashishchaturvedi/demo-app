<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;

class AddProjectDetailsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $data =  array(
            [
                'name' => 'Project 1',
                'company_id'=>1,
                'description'=>'Classified Project'
            ],
            [
                'name' => 'Project 2',
                'company_id'=>2,
                'description'=>'Salesforce Project'
            ],
            [
                'name' => 'Project 3',
                'company_id'=>3,
                'description'=>'Local Client Project'
            ],
            [
                'name' => 'Project 4',
                'company_id'=>1,
                'description'=>'Google + Youtube Intergration'
            ],
            [
                'name' => 'Project5',
                'company_id'=>1,
                'description'=>'ProjectDetails5'
            ],
            
        );
        foreach ($data as $datum){
            $project = new Project(); 
            $project->company_id =$datum['company_id'];
            $project->name =$datum['name'];
            $project->description =$datum['description'];
            $project->save();
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
