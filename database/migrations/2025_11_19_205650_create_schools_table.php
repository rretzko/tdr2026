<?php

use App\Models\County;
use App\Models\Geostate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('postal_code', 15);
            $table->string('abbr', 8);
            $table->string('city');
            $table->foreignIdFor(County::class)->default(22)->constrained(); //default = Unknown
            $table->foreignIdFor(Geostate::class)->default(37)->constrained(); //default = New Jersey
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
