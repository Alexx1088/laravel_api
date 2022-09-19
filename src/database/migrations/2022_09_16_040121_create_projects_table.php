<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('re-examination');
            $table->integer('incoming_letter_number');
            $table->integer('outgoing_letter_number');
            $table->dateTime('date_of_outgoing_letter');
            $table->dateTime('date_of_receipt_project_legal_act');
            $table->string('document_type');
            $table->string('project_act_name_ru');
            $table->string('project_act_name_kk');
            $table->string('branch of legislation');
            $table->string('purpose_legal_act_ru');
            $table->string('documents_submitted_for_expertise_ru');
            $table->string('documents_submitted_for_expertise_kk');
            $table->string('subject_and_goals_expertise_ru');
            $table->string('subject_and_goals_expertise_kk');
            $table->integer('number_of_pages');
            $table->string('dev_group');
            $table->string('email')->unique();
            $table->string('comment');
            $table->string('full_name_ru');
            $table->string('full_name_kk');
            $table->string('job_title_ru');
            $table->string('job_title_kk');
            $table->bigInteger('phone');

            $table->softDeletes();
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
        Schema::dropIfExists('add__projects');
    }
}
