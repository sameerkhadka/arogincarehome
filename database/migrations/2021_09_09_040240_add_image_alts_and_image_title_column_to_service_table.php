<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageAltsAndImageTitleColumnToServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('care_services', function (Blueprint $table) {
            $table->mediumText('image_alts')->nullable();
            $table->mediumText('image_titles')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('care_services', function (Blueprint $table) {
            $table->dropColumn('image_alts');
            $table->dropColumn('image_titles');
        });
    }
}
