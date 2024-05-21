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
            Schema::create('team_tournaments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('team_id')->constrained();
                $table->foreignId('tournament_id')->nullable()->constrained('tournaments')->onUpdate('cascade')->onDelete('cascade');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('team_tournaments');
        }
    };
