<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $product = new Product();
        $product->name = 'test';
        $product->description = '';
        $product->brand = 'brand';
        $product->logo ='testlogo';
        $product->save();
        $this->assertDatabaseHas('products',['name' =>'test']);
    }
}
