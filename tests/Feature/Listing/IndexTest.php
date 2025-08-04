<?php

use App\Models\Listing;

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

test('listing index returns listing with category and broker', function(){
    $listing = Listing::factory()->create();
    $response = $this->get(route('listings.index'));
    $response->assertStatus(200);
});
