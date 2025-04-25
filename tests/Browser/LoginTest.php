<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')//Mengunjungi url halaman utama
                    ->clickLink(link: 'Log in')//Menekan tautan login
                    ->assertPathIs(path: '/login')//Memastikan url setelah menekan tautan sebelumnya
                    ->type(field: 'email', value: 'alya@gmail.com')//Input Email
                    ->type(field: 'password', value: 'alya123')//Input Password
                    ->press(button: 'LOG IN')//Menekan login
                    ->assertPathIs(path: '/dashboard');//Route Dashboard
                    
        });
    }
}