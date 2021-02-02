<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('campaignname');
            $table->text('campaignbody');
            $table->string('campaignnumbers')->default('+2348159011732');
            $table->string('campaigncsv');
            // ->nullable()
            $table->string('campaigndate');
            $table->string('campaigntime');

            $table->string('status')->default('/images/avatars/progress.gif');
            $table->string('progress')->default('9');
            $table->string('progress2')->default('0');
            $table->string('actions')->default('Verifying Payment');
            $table->string('actionsclass')->default('badge-warning');

            $table->string('recieved')->default('0');
            $table->string('sent')->default('0');
            $table->string('total');

            $table->string('age1')->default('off');
            $table->string('age2')->default('off');
            $table->string('age3')->default('off');
            $table->string('crypto')->default('off');
            $table->string('fasion')->default('off');
            $table->string('inspirational')->default('off');
            $table->string('beauty')->default('off');
            $table->string('technology')->default('off');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
