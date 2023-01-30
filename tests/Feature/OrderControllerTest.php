<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testOrderIndexResponseCode()
    {
        $response = $this->get(route('order.index'));

        $response->assertStatus(200);
    }

    public function testOrderStoreSuccessResponce()
    {
        $data = [
            'name' => 'name',
            'phone' => '79999999909',
            'email' => 'email@email.com',
            'order' => 'order data',
        ];
        $response = $this->post(route('order.store'), $data);

        $response->assertRedirect(route('order.index'));
        $response->assertSessionHas('status');
    }
    public function testOrderStorePhoneInvalidResponce()
    {
        $data = [
            'name' => 'name',
            'phone' => '79999909',
            'email' => 'email@email.com',
            'order' => 'order data',
        ];
        $response = $this->post(route('order.store'), $data);

        $response->assertInvalid(['phone']);
    }
}
