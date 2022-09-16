<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('project_act_name_rus');
            $table->dropColumn('project_act_name_kaz');
            $table->dropColumn('documents_submitted_for_expertise_rus');
            $table->dropColumn('documents_submitted_for_expertise_kaz');
            $table->dropColumn('subject_and_goals_expertise_rus');
            $table->dropColumn('purpose_legal_act_rus');
            $table->dropColumn('subject_and_goals_expertise_kaz');
            $table->dropColumn('full_name_rus');
            $table->dropColumn('full_name_kaz');
            $table->dropColumn('job_title_rus');
            $table->dropColumn('job_title_kz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
