<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_product_can_be_created()
{
    $response = $this->post('/api/products', [
        'name' => 'Laptop',
        'price' => 1000
    ]);

    $response->assertStatus(201);
}

}
