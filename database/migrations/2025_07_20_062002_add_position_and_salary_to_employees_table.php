<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            if (!Schema::hasColumn('employees', 'position')) {
                $table->string('position')->nullable();
            }

            if (!Schema::hasColumn('employees', 'salary')) {
                $table->decimal('salary', 10, 2)->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            if (Schema::hasColumn('employees', 'position')) {
                $table->dropColumn('position');
            }

            if (Schema::hasColumn('employees', 'salary')) {
                $table->dropColumn('salary');
            }
        });
    }
};
