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
}
