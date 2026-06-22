<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('portfolio_items')
            ->where(function ($query) {
                $query->where('url', 'like', '%localhost%')
                    ->orWhere('url', 'like', '%127.0.0.1%');
            })
            ->update(['url' => null]);
    }

    public function down(): void
    {
        // URLs were invalid development artifacts; do not restore them.
    }
};
