<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_evaluation', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('student_user_id');
            $table->string('comment', 320)->nullable();
            $table->string('additional_comment', 500)->nullable();
            $table->string('evaluated_date', 30)->nullable();
            $table->enum('status', ['expired', 'active', 'inactive'])->default('inactive');
            // The checkboxes and the radio buttons
            $table->string('target_material')->nullable();
            $table->boolean('distinguish_alphabet')->default(0);
            $table->boolean('distinguish_sight_words')->default(0);
            $table->boolean('word_saturation')->default(0);
            $table->boolean('distinguish_short_long_runs')->default(0);
            $table->boolean('practice_connecting_words')->default(0);
            $table->boolean('arabic_language_vocabulary')->default(0);
            $table->boolean('practice_reading_by_time')->default(0);
            $table->boolean('reading_and_distinction')->default(0);
            $table->boolean('reinforcing_reading_comprehension')->default(0);
            $table->boolean('extract_main_idea')->default(0);
            $table->boolean('speaking_grammar_principles')->default(0);
            $table->boolean('alphabet_distinguishing')->default(0);
            $table->boolean('distinguishing_homonyms')->default(0);
            $table->boolean('distinguishing_sight_words')->default(0);
            $table->boolean('rid_of_word_saturation')->default(0);
            $table->boolean('short_long_runs')->default(0);
            $table->boolean('distinction_consonant_syllable')->default(0);
            $table->boolean('short_log_vowels')->default(0);
            $table->boolean('complete_sentence_meaning')->default(0);
            $table->boolean('write_descriptively')->default(0);
            $table->boolean('diacritics_unformed_words')->default(0);
            $table->boolean('consolidate_transcription_skill')->default(0);
            $table->boolean('practice_summarizing_text')->default(0);
            $table->boolean('holding_pen_directing_notebook')->default(0);
            $table->boolean('enhance_ability_to_draw')->default(0);
            $table->boolean('ability_to_formulate')->default(0);
            $table->boolean('improve_pronounciation')->default(0);
            $table->boolean('retell_arabic_text')->default(0);
            $table->boolean('enhance_ability_formulate_questions')->default(0);
            $table->boolean('self_confidence_beneficiaries')->default(0);
            $table->boolean('identify_ending_word')->default(0);
            $table->boolean('common_arabic_words')->default(0);
            $table->boolean('complete_sentence_with_meaning')->default(0);
            $table->boolean('develop_listening_skill')->default(0);
            $table->boolean('identify_color_shapes_week')->default(0);
            $table->boolean('learning_process')->default(0);
            $table->boolean('stage_select')->default(0);
            $table->boolean('integrating_child_environment')->default(0);
            $table->boolean('simulgan_process')->default(0);
            $table->boolean('enhancing_knowledge_visually')->default(0);
            $table->boolean('enhancing_recognition')->default(0);
            $table->boolean('interactive_visual_recognition')->default(0);
            $table->boolean('motivating_correct_manner')->default(0);
            $table->boolean('interactive_arabic_vocabulary')->default(0);
            $table->boolean('prescribed_interactive_methods')->default(0);
            $table->boolean('motivate_to_hold_pen_correctly')->default(0);
            $table->boolean('correct_child_orientation')->default(0);
            $table->boolean('stimulate_writing_process')->default(0);
            $table->boolean('visual_motivation_track_process')->default(0);
            $table->boolean('repeation_of_phrace')->default(0);
            $table->boolean('interactive_meaning_clarification')->default(0);
            $table->boolean('review_alphabet_letters')->default(0);
            $table->boolean('motivate_to_repeat')->default(0);
            $table->boolean('letter_classification')->default(0);
            $table->boolean('triple_word')->default(0);
            $table->boolean('prescribed_chant')->default(0);
            $table->boolean('new_two_five_words')->default(0);
            $table->boolean('first_group_sight_words')->default(0);
            $table->boolean('motivating_to_pronounce')->default(0);
            $table->boolean('named_card_identification')->default(0);
            $table->boolean('extract_required_letter')->default(0);
            $table->boolean('motivate_to_copy_alphabet')->default(0);
            $table->boolean('request_transcribe')->default(0);
            $table->boolean('character_tracing')->default(0);
            $table->boolean('three_similar_letters')->default(0);
            $table->boolean('three_words_read_motivate_short')->default(0);
            $table->boolean('three_words_read_motivate_long')->default(0);
            $table->boolean('display_short_long')->default(0);
            $table->boolean('words_with_intensity')->default(0);
            $table->boolean('read_graded_stories')->default(0);
            $table->boolean('read_graded_stories_red_orange')->default(0);
            $table->boolean('writing_letters')->default(0);
            $table->boolean('invisibly_dictating')->default(0);
            $table->boolean('invisibly_dictating_short_duration')->default(0);
            $table->boolean('invisibly_dictating_short_duration_long_vowels')->default(0);
            $table->boolean('invisibly_dictating_group_words')->default(0);
            $table->boolean('copy_sight_words')->default(0);
            $table->boolean('name_on_lines')->default(0);
            $table->boolean('day_on_line')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('student_user_id')->references('id')->on('student_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('student_evaluation');
    }
};
