<?php

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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("nik");
            $table->string("nisn");
            $table->string("email");
            $table->string("phone");
            $table->string("place_of_birth");
            $table->date("date_of_birth");
            $table->enum("gender", ["laki - laki", "perempuan"]);
            $table->enum("religion", ["buddha", "hindu", "islam", "katolik", "khonghucu", "kristen"]);
            $table->text("address");
            $table->string("postal_code");
            $table->string("high_school");
            $table->string("pass_photo");
            $table->string("ktp");
            $table->string("diploma");
            $table->string("transcript");
            $table->enum("region", ["depok", "alam sutera", "karawaci", "kalimalang"]);
            $table->enum("study_program", ["sistem komputer s1", "sistem informasi s1", "teknik komputer d3", "manajemen informatika d3", "informatika s1", "teknik elektro s1", "teknik mesin s1", "teknik industri s1", "agroteknologi s1", "akuntansi s1", "manajemen s1", "ekonomi syariah s1", "akuntansi d3", "manajemen d3", "arsitektur s1", "desain interior s1", "teknik sipil s1"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
