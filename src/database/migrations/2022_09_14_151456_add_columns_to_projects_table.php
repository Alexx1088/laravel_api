<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('locale');
            $table->string('project_act_name_rus');
            $table->string('project_act_name_kaz');
            $table->string('purpose_legal_act_rus');
            $table->string('documents_submitted_for_expertise_rus');
            $table->string('documents_submitted_for_expertise_kaz');
            $table->string('subject_and_goals_expertise_rus');
            $table->string('subject_and_goals_expertise_kaz');
            $table->string('full_name_rus');
            $table->string('full_name_kaz');
            $table->string('job_title_rus');
            $table->string('job_title_kz');
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
            $table->dropColumn('locale');
        });
    }
}
