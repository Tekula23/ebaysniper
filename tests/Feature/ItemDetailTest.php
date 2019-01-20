<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\URL;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItemDetailTest extends TestCase
{

    /**
     * form to input a url from ebay
     * and get a json response with name, time remaining etc
     * This test is probably bound by time and it may break at somepoint due to
     * the listing no longer being available
     */
    function test_can_see_ebay_item_details()
    {
        $url = factory(URL::class)->create([
            'id' => 1,
            'url' => $url = "https://www.ebay.co.uk/itm/Mains-Charger-For-Blackberry-Curve-8520-8530-9300-Bold-9700-9780-9900-Torch-9800/173688420393?_trkparms=aid%3D111001%26algo%3DREC.SEED%26ao%3D1%26asc%3D20160908105057%26meid%3Deac34cffb62a454492cb10108ec841d1%26pid%3D100675%26rk%3D2%26rkt%3D15%26sd%3D361446583054%26itm%3D173688420393&_trksid=p2481888.c100675.m4236&_trkparms=pageci%3A166ec2d1-1cd5-11e9-b69e-74dbd180d322%7Cparentrq%3A6c3623b61680ab1da8525dd1fffcb891%7Ciid%3A1",
        ]);

        $response = $this->get('/items/search/1');

        $this->assertEquals('10m', $response->json('time_remaining'));
    }
}
