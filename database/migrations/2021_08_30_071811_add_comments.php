<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comments;

class AddComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->text('description');
            $table->timestamps();
        });
        $data =  array(
            [
                'project_id'=>1,
                'description'=>'Nice Work'
            ],
            [
                'project_id'=>2,
                'description'=>'Too much work left'
            ],
            [
                'project_id'=>3,
                'description'=>'Great'
            ],
            [
                'project_id'=>1,
                'description'=>'Extremly Happy!'
            ],
            [
                'project_id'=>1,
                'description'=>'Love it!'
            ],
            
        );
        foreach ($data as $datum){
            $comment = new Comments(); 
            $comment->project_id =$datum['project_id'];
            $comment->description =$datum['description'];
            $comment->save();
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
        Schema::dropIfExists('comments');
    }
}
