<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFeedbackIndexResponseCode()
    {
        $response = $this->get(route('feedback.index'));

        $response->assertStatus(200);
    }

    public function testFeedbackSuccessStoreRespose()
    {
        $response = $this->post(route('feedback.store'), [
            'name' => 'name',
            'feedback' => 'feeedback',
        ]);

        $response->assertRedirect(route('feedback.index'));
        $response->assertSessionHas('status');
    }
}
