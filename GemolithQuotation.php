<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class GemolithQuotation extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testQuotation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->type('#email','ausaf@pkteam.com')
            ->type('#password','hitman123')
            ->press('Login')
            ->pause('3000')
            ->assertSee('Precious Gems Collection')
            ->pause('3000')
            ->click('#navbarCollapse > div > ul > li:nth-child(1) > a')
            ->pause('3000')
            ->click('#quotation-row-148 > div.pr-2.pt-3.col-3 > span > a')
            ->pause('3000')
            ->type('#customer_name_input', 'SQA testing')
            ->click('#ptFirstSection > section > div > div.row.quo-client-info > div.col-md-6.col-12.mb-md-0.mb-3 > div > div.qou-number.pt-md-4.mb-3.text-md-right.row.justify-content-end.align-items-center > label')
            ->assertsee('Quotation updated successfully!')
            ->pause('3000')
            ->type('#customer_address_input', 'sarwar road rawalpindi')
            ->click('#ptFirstSection > section > div > div.row.quo-client-info > div.col-md-6.col-12.mb-md-0.mb-3 > div > div.qou-number.pt-md-4.mb-3.text-md-right.row.justify-content-end.align-items-center > label')
            ->assertsee('Quotation updated successfully!')
            ->pause('3000')
            ->type('#ref_no_input', 'test12345')
            ->assertsee('Warning!')
            ->pause('3000')
            ->type('#link_expiry_input', '12/05/2021')
            ->assertsee('Quotation updated successfully!')
            ->pause('3000')
            ->click('#ptFirstSection > section > div > div.row.pt-md-4 > div > div > div > div.not-available-stones.py-md-5.py-4.px-lg-5.px-sm-4.px-3.text-center.\31  > div > a')
            ->visit('/stones')
            ->pause('1000')
            ->click('#quotation-stone-8400')
            ->pause('1000')
            ->click('#header-add-quotation')
            ->pause('1000')
            ->click('body > div.swal2-container.swal2-center.swal2-backdrop-show > div > div.swal2-actions > button.swal2-confirm.swal2-styled')
            ->pause('1000');
        });
    }
}
