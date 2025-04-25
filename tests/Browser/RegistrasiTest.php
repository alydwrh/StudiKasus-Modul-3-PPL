<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/') //mengunjungi halaman Login dengan route “/login”
                    ->assertSee(text: 'Modul 3')//Melihat text Modul 3
                    ->clickLink(link: 'Register')//Menekan tautan Register
                    ->assertPathIs(path: '/register')//Memastikan url
                    ->type(field: 'name', value: 'admin')//Input nama
                    ->type(field: 'email', value: 'admin@gmail.com')//Input email
                    ->type(field: 'password', value: 'password')//Input Password
                    ->type(field: 'password_confirmation', value: 'password')//Mengkonfirmasi Password
                    ->press(button: 'REGISTER')//Menekan tombol register
                    ->assertPathIs(path: '/dashboard');//Memastikan url mengarah ke dashboard
                    
        });
    }
}