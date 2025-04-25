<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink(link: 'Log in')//Login
                    ->assertPathIs(path: '/login')//Route Login
                    ->type(field: 'email', value: 'alya@gmail.com')//Input Email
                    ->type(field: 'password', value: 'alya123')//Input Password
                    ->press(button: 'LOG IN')//Button Login
                    ->assertPathIs(path: '/dashboard')//Route Dashboard
                    ->clickLink(link: 'Notes')//Notes
                    ->assertPathIs(path: '/notes')//Route Notes
                    ->clickLink(link: 'Create Note')//Create
                    ->assertPathIs(path: '/create-note')//Route Create Note
                    ->type(field: 'title', value: 'alyadwrh')//Input alyadwrh
                    ->type(field: 'description', value: 'Alya Anak Baik')//Input Description
                    ->press(button: 'CREATE')//Create
                    ->assertPathIs(path: '/notes');//Route Notes
                });
            }
        }

        