<?php

namespace Database\Seeders;

use App\Enums\BidStatus;
use App\Models\Bid;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listing = Listing::first();
        $User =User::where('role', 'broker')->first();

        if ($listing && $User) {
            $bids = [
                [
                    'pid' => (string)\Str::uuid(),
                    'listing_id' => $listing->id,
                    'user_id' => $User->id,
                    'amount' => 48000.00,
                    'status' => BidStatus::ACCEPTED,
                ],
                [
                    'pid' => (string)\Str::uuid(),
                    'listing_id' => $listing->id,
                    'user_id' => $User->id,
                    'amount' => 49000.00,
                    'status' => BidStatus::PENDING,
                ],
                [
                    'pid' => (string)\Str::uuid(),
                    'listing_id' => $listing->id,
                    'user_id' => $User->id,
                    'amount' => 47000.00,
                    'status' => BidStatus::REJECTED,
                ],
            ];

            foreach ($bids as $bid) {
                Bid::create($bid);
            }
        }
    }
}
