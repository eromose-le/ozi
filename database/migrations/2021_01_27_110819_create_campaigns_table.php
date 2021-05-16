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
            $table->string('campaignfile')->nullable();
            $table->string('campaignnumbers')->default('+2348159011732');
            $table->string('campaigncsv')->nullable();
            $table->string('campaigndate')->nullable();
            $table->string('campaigntime')->nullable();

            $table->string('status')->default('/images/avatars/progress.gif');
            $table->string('progress')->default('9');
            $table->string('progress2')->default('0');
            $table->string('actions')->default('Verifying Payment');
            $table->string('actionsclass')->default('badge-warning');

            $table->string('recieved')->default('0');
            $table->string('sent')->default('0');
            $table->string('total')->nullable();

            $table->string('age1')->nullable();
            $table->string('age2')->nullable();
            $table->string('age3')->nullable();
            $table->string('crypto')->nullable();
            $table->string('fasion')->nullable();
            $table->string('inspirational')->nullable();
            $table->string('beauty')->nullable();
            $table->string('technology')->nullable();

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
