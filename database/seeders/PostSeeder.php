<?php

namespace Database\Seeders;

use App\Models\post;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        $this->truncate('posts');

        post::factory(3)->create();

        $this->enableForeignKeys();

    }
}
