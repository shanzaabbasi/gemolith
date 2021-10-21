<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->type('#email','ausaf@pkteam.com')
            ->type('#password','hitman123')
            ->press('Login')
            ->pause('3000')
            ->assertSee('Precious Gems Collection')
            ->pause('1000')
            ->visit('/stones')
            ////////  ////////////Search Product Sku
            ->type('#sku','2650-543761')
            ->keys('#sku','{enter}')
            ->pause('4000')

            /////////Selecting shapes 
            ->visit('/stones?&shape=Round,Oval,Cushion,Rectangle,Square,Pear,Heart,Marquise,Other%20(shapes)')
            ->pause('3000')

            ////selecting Gemstone stype
            ->click('#marginTop > div:nth-child(3) > div.col-lg-6.col-12.filter-col > div > button > div > div > div')
            ->click('#bs-select-1-0')
            ->pause('2000')
            ->click('#bs-select-1-1')
            ->pause('2000')
            ->click('#bs-select-1-2')
            ->pause('2000')
            ->click('#bs-select-1-3')
            ->pause('2000')
            ->click('#bs-select-1-4')
            ->pause('2000')
            ->click('#bs-select-1-5')
            ->pause('2000')
            ->click('#bs-select-1-6')
            ->pause('2000')
            ->click('#bs-select-1-7')
            ->pause('2000')
            ->click('#bs-select-1-8')
            ->pause('2000')

            /////////Selecting color 
            ->check('#marginTop > div:nth-child(3) > div.col-xl-6.col-12.filter-col.color-filter-col > div > div.color-col.col.text-center.mt-2.checkbox-clear.internal-color-3 > label > input')
            ->pause(2000)

            ///// Dimentions /////length 
            ->type('#marginTop > div:nth-child(3) > div:nth-child(4) > div > div:nth-child(1) > div > div:nth-child(1) > input','10')->pause('1000')
            ->pause(2000)

            ///// Dimentions /////width
            ->type('#marginTop > div:nth-child(3) > div:nth-child(4) > div > div.col-md-6.mt-md-0.mt-3.dimension-col > div > div:nth-child(1) > input','10')->pause('1000')
            ->pause(2000)

            ///////Weight 
            ->type('#marginTop > div:nth-child(3) > div.col-sm-6.col-12.filter-col.d-flex.flex-column > div > div > div > div:nth-child(1) > input','10')
            ->pause(2000)
            ->clear('#marginTop > div:nth-child(3) > div.col-sm-6.col-12.filter-col.d-flex.flex-column > div > div > div > div:nth-child(2) > input')
            ->pause(2000)
            ->type('#marginTop > div:nth-child(3) > div.col-sm-6.col-12.filter-col.d-flex.flex-column > div > div > div > div:nth-child(2) > input','100')
            ->pause(2000)
            ->type('#marginTop > div:nth-child(3) > div:nth-child(6) > div > div > div > div:nth-child(1) > input','10')
            ->pause(2000)
            ->clear('#marginTop > div:nth-child(3) > div:nth-child(6) > div > div > div > div.align-items-center.d-flex.js-range-price-to-field.position-relative > input')
            ->pause(2000)
            ->type('#marginTop > div:nth-child(3) > div:nth-child(6) > div > div > div > div.align-items-center.d-flex.js-range-price-to-field.position-relative > input','1000')
            ->pause(2000)

            ///////Treatment Section checking All 
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(1) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(2) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(3) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(4) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(5) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(6) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(7) > label')
            ->pause(2000)
            ->click('#marginTop > div:nth-child(3) > div:nth-child(7) > div > div:nth-child(8) > label')
          
            /////Sort Filter
            ->select('#sortBy', 'price-low-to-high')
            ->pause('2000')
            ->select('#sortBy', 'weight-low-to-high')
            ->pause(3000);
        });
    }
}
