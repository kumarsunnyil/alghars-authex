<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StudentEvaluation extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $table = 'student_evaluation';

    protected $fillable = [
        'user_id',
        'student_user_id',

      'target_material',
      'distinguish_alphabet',
      'distinguish_sight_words',
      'word_saturation',
      'distinguish_short_long_runs',
      'practice_connecting_words',
      'arabic_language_vocabulary',
      'practice_reading_by_time',
      'reading_and_distinction',
      'reinforcing_reading_comprehension',
      'extract_main_idea',
      'speaking_grammar_principles',
      'alphabet_distinguishing',
      'distinguishing_homonyms',
      'distinguishing_sight_words',
      'rid_of_word_saturation',
      'short_long_runs',
      'distinction_consonant_syllable',
      'short_log_vowels',
      'complete_sentence_meaning',
      'write_descriptively',
      'diacritics_unformed_words',
      'consolidate_transcription_skill',
      'practice_summarizing_text',
      'holding_pen_directing_notebook',
      'enhance_ability_to_draw',
      'ability_to_formulate',
      'improve_pronounciation',
      'retell_arabic_text',
      'enhance_ability_formulate_questions',
      'self_confidence_beneficiaries',
      'identify_ending_word',
      'common_arabic_words',
      'complete_sentence_with_meaning',
      'develop_listening_skill',
      'identify_color_shapes_week',
      'learning_process',
      'stage_select',
      'integrating_child_environment',
      'simulgan_process',
      'enhancing_knowledge_visually',
      'enhancing_recognition',
      'interactive_visual_recognition',
      'motivating_correct_manner',
      'interactive_arabic_vocabulary',
      'prescribed_interactive_methods',
      'motivate_to_hold_pen_correctly',
      'correct_child_orientation',
      'stimulate_writing_process',
      'visual_motivation_track_process',
      'repeation_of_phrace',
      'interactive_meaning_clarification',
      'review_alphabet_letters',
      'motivate_to_repeat',
      'letter_classification',
      'triple_word',
      'prescribed_chant',
      'new_two_five_words',
      'first_group_sight_words',
      'motivating_to_pronounce',
      'named_card_identification',
      'extract_required_letter',
      'motivate_to_copy_alphabet',
      'request_transcribe',
      'character_tracing',
      'three_similar_letters',
      'three_words_read_motivate_short',
      'three_words_read_motivate_long',
      'display_short_long',
      'words_with_intensity',
      'read_graded_stories',
      'read_graded_stories_red_orange',
      'writing_letters',
      'invisibly_dictating',
      'invisibly_dictating_short_duration',
      'invisibly_dictating_short_duration_long_vowels',
      'invisibly_dictating_group_words',
      'copy_sight_words',
      'name_on_lines',
      'day_on_line',

        'evaluated_date',
        'status',
    ];

    /**
     * A stub.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
