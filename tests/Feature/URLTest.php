<?php

namespace Tests\Feature;

use App\URL;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class URLTest extends TestCase
{
    // test if an url has a hash against which no duplication of urls is possible
    public function test_url_has_unique_hash()
    {
        $url = "http://google.com/";

        $saved = factory(URL::class)->create([
            'url' => $url,
        ]);

        $this->assertNotNull($saved->hash);
    }

    public function test_urls_are_unique()
    {
        $url = "http://google.com/";

        $saved1 = factory(URL::class)->create([
            'url' => $url,
        ]);
        $saved2 = factory(URL::class)->create([
            'url' => $url,
        ]);

        $count = URL::where('url', $url)->get()->count();
        $this->assertEquals(1, $count);
    }

    public function test_multiple_urls_can_be_saved()
    {
        factory(URL::class, 10)->create();

        $this->assertEquals(10, URL::all()->count());

    }
}
