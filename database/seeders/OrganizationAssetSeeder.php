<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrganizationAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();
        $data = [
            [
                'organization_id' => 1,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/aeces_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 2,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/cs_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 3,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/jma_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 4,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/jpia_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 5,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/jpmap_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 6,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/jpsme_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
                        [
                'organization_id' => 7,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/mentors_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'organization_id' => 8,
                'organization_asset_type_id' => 1,
                'file' => 'organization_assets/logo/pasoa_logo.png',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ];
        DB::table('organization_assets')->insert($data);
    }
}
