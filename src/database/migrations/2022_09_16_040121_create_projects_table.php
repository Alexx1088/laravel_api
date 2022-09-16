<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProjectsTable extends Migration
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
            $table->dateTime('date_of_receipt_project_legal act');
            $table->string('document_type');
            $table->string('project_act_name_rus');
            $table->string('project_act_name_kaz');
            $table->string('branch of legislation');
            $table->string('purpose_legal_act_rus');
            $table->string('documents_submitted_for_expertise_rus');
            $table->string('documents_submitted_for_expertise_kaz');
            $table->string('subject_and_goals_expertise_rus');
            $table->string('subject_and_goals_expertise_kaz');
            $table->integer('number_of_pages');
            $table->string('dev_group');
            $table->string('email')->unique();
            $table->string('comment');
            $table->string('full_name_rus');
            $table->string('full_name_kaz');
            $table->string('job_title_rus');
            $table->string('job_title_kz');
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
