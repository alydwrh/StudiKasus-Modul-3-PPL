<?php

        namespace Tests\Browser;
        
        use Illuminate\Foundation\Testing\DatabaseMigrations;
        use Laravel\Dusk\Browser;
        use Tests\DuskTestCase;
        
        class EditNotesTest extends DuskTestCase
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
                            ->clickLink(link: 'Edit')//Edit
                            ->type(field: 'title', value: 'alyadwirhh')//Input Tittle
                            ->type(field: 'description', value: 'Alya anak solehah dan baik')//Input Description
                            ->press(button: 'UPDATE')//Update
                            ->assertPathIs(path: '/notes');//Route Notes
        
                });
            }
        }
        