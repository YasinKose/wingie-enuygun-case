<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table
                ->foreignId("developer_id")
                ->after("id")
                ->constrained("developers");
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign("tasks_developer_id_foreign");
            $table->dropColumn("developer_id");
        });
    }
};
