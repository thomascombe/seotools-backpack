<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoFieldsTable extends Migration
{
    const TABLE_NAME = 'your_table_name';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->string(\Thomascombe\SeotoolsBackpack\Models\Interfaces\SeoFieldsInterface::COLUMN_SEO_TITLE)->nullable();
            $table->string(\Thomascombe\SeotoolsBackpack\Models\Interfaces\SeoFieldsInterface::COLUMN_SEO_DESCRIPTION)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(\Thomascombe\SeotoolsBackpack\Models\Interfaces\SeoFieldsInterface::COLUMN_SEO_TITLE);
            $table->dropColumn(\Thomascombe\SeotoolsBackpack\Models\Interfaces\SeoFieldsInterface::COLUMN_SEO_DESCRIPTION);
        });
    }
}
