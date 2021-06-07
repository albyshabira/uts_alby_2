<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
}

public function up(){
    Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('image');
    $table->string('title');
    $table->text('content');
    $table->timestamps();
    });
   }

   /**
* fillable
*
* @var array
*/
protected $fillable = [
    'image', 'title', 'content'
   ]