<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class GemolithLogin extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            // ->assertSee('GEMOLITH')
            // ->pause('3000')
            ->type('#email','ausaf@pkteam.com')
            ->type('#password','hitman123')
            ->press('Login')
            ->pause('1000')
            ->assertSee('Precious Gems Collection')
            //->visit('/logout')
            ->pause('4000')
            // ->click('body > header.header.desktop-header.bg-white.border-bottom.w-100.border-bottom > section > div.container.py-2.header-top-note > div > div > div.align-items-center.d-flex.header-icons.pl-3 > ul > li:nth-child(5) > a > img.img-fluid.header-hover-icon')
            //->logout()
            // ->pause('3000')
            // ->clickAtXPath('/html/body/header[1]/section/div[2]/div/div/div[2]/ul/li[5]/a/img[2]')
            ->visit('/stones')
            ->pause('3000')
            ->click('#stone_type_ids')
            ->pause('1000')
            ->click('#stone-type-37') 
            ->pause('1000')
            ->check('checkbox, cushion')
            //->check('#marginTop > div:nth-child(3) > div:nth-child(3) > div > div.shape-col.stoneShape.col.text-center.mt-2.checkbox-clear.internal-shape-1 > label > input')
            ->pause('1000');
         });
  }

}

