<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_owners', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);
            $table->string('middle_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 100)->unique();
            $table->string('phone', 11);
            $table->string('address', 100);
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_owners');
    }
};
