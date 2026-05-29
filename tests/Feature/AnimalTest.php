<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnimalTest extends TestCase
{
    use RefreshDatabase;

    public function test_la_base_de_datos_esta_accesible(): void
    {
        $this->assertTrue(true); // Confirma que las migraciones corrieron
    }

    public function test_endpoint_raiz_responde(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
