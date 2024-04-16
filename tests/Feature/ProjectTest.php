<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    public function test_index_all_created_projectPosts(): void
    {
        $response = $this->get('/projectPosts');
        $response->assertStatus(200);
    }
    function test_create_new_projectPosts()
    {
        Storage::fake('public');
        $Project_file = UploadedFile::fake()->image('projectOne.png');
        $response = $this->post('/projectPosts', [
            'portfolio_photo' => $Project_file,
            'portfolio_title' => 'this is title',
            'portfolio_text' => 'this is text',
        ]);
        $response->assertStatus(201);
        $this->assertDatabaseHas('projects', [
            'portfolio_title' => 'this is title',
            'portfolio_text' => 'this is text',
            'portfolio_photo' => 'PortfolioPhotos/' . $Project_file->getClientOriginalName(),
        ]);
        Storage::disk('public')->assertExists('PortfolioPhotos/' . $Project_file->getClientOriginalName());
    }
    function test_showing_existing_projectPost()
    {
        Storage::fake('public');
        $file = UploadedFile::fake()->image('somePostPortfolio.png');
        $ProjectPost =  Project::create([
            'id' => 1,
            'portfolio_photo' => $file,
            'portfolio_title' => 'lorem',
            'portfolio_text' => 'lorem',
        ]);
        $response = $this->get('/projectPosts/' . $ProjectPost->id);
        $response->assertStatus(200);
    }
    function test_update_existing_ProjectPost()
    {
        Storage::fake('public');
        $file = UploadedFile::fake()->image('Project2.png');
        $projectTwo = Project::create([
            'id' => 1,
            'portfolio_photo' => $file,
            'portfolio_title' => 'Title before update',
            'portfolio_text' => 'Text before update',
        ]);

        $updatedFile = UploadedFile::fake()->create( 'NewOne.png');


        $response = $this->put('/projectPosts/' . $projectTwo->id, [
            'portfolio_photo' => $updatedFile,
            'portfolio_title' => 'Updated title',
            'portfolio_text' => 'Updated text',
        ]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('projects', [
            "id" => $projectTwo->id,
            'portfolio_title' => 'Updated title',
            'portfolio_text' => 'Updated text',
            'portfolio_photo' => 'PortfolioPhotos/'. $updatedFile->getClientOriginalName(),

        ]);

        Storage::disk('public')->assertExists('PortfolioPhotos/' . $updatedFile->getClientOriginalName());
    }
    public function test_delete_existing_post():void{
        $file = UploadedFile::fake()->image('fileshouldbedeleted2.png');
        $post = Project::create([
            'id' => 1,
            'portfolio_photo' => $file,
            'portfolio_title' => 'title_deleted',
            'portfolio_text' => 'text_deleted',
        ]);
        $response = $this->delete('/projectPosts/' . $post->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('projects', ['id' => $post->id]);
    }


}
