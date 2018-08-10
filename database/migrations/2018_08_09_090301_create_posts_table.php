<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Post;
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->text('content');
            $table->timestamps();
        });
		for($i=0;$i<20;$i++){
			Post::create([
			'name'=>'test-'.$i,
			'slug'=>'test-'.$i,
			'content'=>'lorem ipsum-'.$i,
			]);
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
