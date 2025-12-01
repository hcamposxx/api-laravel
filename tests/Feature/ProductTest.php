<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_can_be_created()
    {
        $response = $this->postJson('/api/products', [
            'name' => 'Laptop',
            'price' => 1000,
            'description' => 'test product'
        ]);

        $response->assertStatus(201);
    }
}

