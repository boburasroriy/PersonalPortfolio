<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostTest extends TestCase
{

    public function test_index_all_created_posts(): void
    {
        $response = $this->get('api/posts');
        $response->assertStatus(200);
    }



    public function test_create_new_post() :void
    {
        Storage::fake('public');
        $file = UploadedFile::fake()->image('avatar.png');
        $response = $this->post('api/posts', [
            'photo' => $file,
            'title' => 'test title',
            'text' => 'test text',
        ]);
        $response->assertStatus(201);
        $this->assertDatabaseHas('posts', [
            'title' => 'test title',
            'text' => 'test text',
            'photo' => 'PostPhotos/' . $file->getClientOriginalName(),
        ]);
        Storage::disk('public')->assertExists('PostPhotos/' . $file->getClientOriginalName());
    }



    public function test_show_existing_post():void{
        Storage::fake('public');
        $file = UploadedFile::fake()->image('avatar.png');
        $post =  Post::create([
            'id' => 1,
            'photo' => $file,
            'title' => 'ewr',
            'text' => 'sdaf',
        ]);
        $response = $this->get('/api/posts/' . $post->id);
        $response->assertStatus(200);
    }


    public function test_update_existing_post():void{
        Storage::fake('public');
        $file = UploadedFile::fake()->image('avatar.png');
        $post = Post::create([
            'id' => 1,
            'photo' => $file,
            'title' => 'Title before update',
            'text' => 'Text before update',
        ]);
  $updatedFile = UploadedFile::fake()->image('new_avatar.png');
  $response = $this->put('/api/posts/' . $post->id, [
      'photo' => $updatedFile,
      'title' => 'Updated title',
      'text' => 'Updated text',
  ]);
    $response->assertStatus(200);
    $this->assertDatabaseHas('posts', [
        'id' => $post->id,
        'title' => 'Updated title',
        'text' => 'Updated text',
        'photo' => 'PostPhotos/' . $updatedFile->getClientOriginalName(),
    ]);
        Storage::disk('public')->assertExists('PostPhotos/' . $updatedFile->getClientOriginalName());
    }




    public function test_delete_existing_post():void{
        $file = UploadedFile::fake()->image('fileshouldbedeleted.png');
        $post = Post::create([
            'id' => 1,
            'photo' => $file,
            'title' => 'title_deleted',
            'text' => 'text_deleted',
        ]);
        $response = $this->delete('/api/posts/' . $post->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('posts', ['id' => $post->id]);

    }

}
