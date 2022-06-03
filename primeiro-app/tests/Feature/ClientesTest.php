<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Clientes;
use App\Controllers\ClientesController;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $cliente = Clientes::create([
            'nome' => 'Gustavo',
            'endereco' => 'Planeta Terra',
            'email' => 'gustavo@gmail.com',
            'telefone' => '9987451414'
        ]);
        $this->assertDatabaseHas('clientes', ['nome' => 'Gustavo']);

        /*Método não elegante mas funcional
        $cliente->destroy($cliente->id);

        $this->assertDatabaseMissing('clientes', ['nome' => 'Gustavo']);
        */
    }
}
