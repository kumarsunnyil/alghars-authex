@extends('layouts.app-master')

@section('content')
    {{-- <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css') !!}"> --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Submit Evaluation</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h1 class="card-title" style="color: #0499f2; font-weight: 900;">Student assessment form for
                            language skills / استمارة تقييم مهارات الطالب اللغوية </h1>
                    </div>
                    <section class="content">
                        <div class="row">
                            <!--Grid column-->
                            <div class="card card-default col-md-2 m-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <p> @auth
                                            Evaluation By <b>{{ auth()->user()->name }}</b>
                                        @endauth
                                    </p>
                                    </li>
                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p><span>Student Phone</span> <span
                                                class="px-5"><b>{{ $student->phone }}</b></span> </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9 mb-md-0 mb-5 p-3">
                                <form id="contact-form" name="contact-form"
                                    action="{{ url('/') }}/admin/{{ auth()->user()->id }}/evaluation/submit/{{ $student->id }}"
                                    method="POST">
                                    @csrf
                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="" disabled>اسم الطالب</label>
                                                <input type="text" value="{{ $student->name }}" class="form-control"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Your email</label>
                                                <input type="text" value="{{ $student->email }}" class="form-control"
                                                    disabled>
                                                <input type="hidden" id="email" name="email"
                                                    value="{{ $student->email }}" class="form-control">
                                                <input type="hidden" id="student_id" name="student_id"
                                                    value="{{ $student->id }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="" disabled>العمر</label>
                                                <input type="text" value="{{ $student->name }}" class="form-control"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Your email</label>
                                                <input type="text" value="{{ $student->email }}" class="form-control"
                                                    disabled>
                                                <input type="hidden" id="email" name="email"
                                                    value="{{ $student->email }}" class="form-control">
                                                <input type="hidden" id="student_id" name="student_id"
                                                    value="{{ $student->id }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="" disabled> Age / العمر</label>
                                                <input type="text" value="{{ $student->name }}" class="form-control"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Grade / الصف الدراسي</label>
                                                <input type="text" value="{{ $student->email }}" class="form-control"
                                                    disabled>
                                                <input type="hidden" id="email" name="email"
                                                    value="{{ $student->email }}" class="form-control">
                                                <input type="hidden" id="student_id" name="student_id"
                                                    value="{{ $student->id }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Class --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="program_name" class="">class / الصف الدراسي</label>
                                                <input type="text" id="program_name" name="program_name"
                                                    value="{{ $student->program_name }}" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                {{-- Parents / Gaurdian name --}}
                                                <label for="parent_name" class="">Gaurdian name / اسم ولي الأمر
                                                </label>
                                                <input type="text" id="p_name" name="p_name"
                                                    value="{{ $student->p_name }}" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="program_name" class="">Phone / رقم ولي الأمر</label>
                                                <input type="text" id="phone" name="phone"
                                                    value="{{ $student->phone }}" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="name" class="" disabled> Residence Name / اسم
                                                    المقيم</label>
                                                <input type="text" value="" placeholder="Residence Name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="name" class="" disabled> Residence Title / عنوان
                                                    السكن: </label>
                                                <input type="text" value="" placeholder="Residence Title"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Target Material Option/ المواد
                                                    المستهدفة</label>
                                                <input type="text" value="{{ $student->email }}" class="form-control"
                                                    disabled>
                                                <textarea type="text" id="comment" name="target_material" rows="2" class="form-control md-textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span>ملاحظات التقييم</span>
                                            <p>يرجى اختيار نقاط الضعف وفق المهارات الأساسية ( قراءة - كتابة - تحدث - استماع)
                                                للإنتقال لمرحلة التوصيات</p>
                                        </div>
                                    </div>
                                    <hr />








                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinguish_alphabet">يحتاج الطالب لتمييز حروف الهجاء</label>
                                                <input type="checkbox" name="distinguish_alphabet">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinguish_alphabet">يحتاج الطالب لتعزيز التمييز بين متشابهات
                                                    الحروف</label>
                                                <input type="checkbox" name="distinguish_alphabet">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinguish_sight_words">يحتاج الطالب لتمييز الكلمات البصرية
                                                    المخصصة للمجموعة</label>
                                                <input type="checkbox" name="distinguish_sight_words">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="word_saturation"> يحتاج الطالب للتخلص من مشكلة إشباع الكلمة
                                                </label>
                                                <input type="checkbox" name="word_saturation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinguish_short_long_runs"> يحتاج الطالب التمييز بين المدود
                                                    القصيرة والمدود الطويلة </label>
                                                <input type="checkbox" name="distinguish_short_long_runs">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="practice_connecting_words"> يحتاج الطالب إلى التدرب على وصل
                                                    الكلمات أثناء القراءة </label>
                                                <input type="checkbox" name="practice_connecting_words">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="reading_correct_formation"> يحتاج الطالب التدرب على القراءة
                                                    بالتشكيل الصحيح – المدود و استخدام علامات الترقيم أثناء القراءة </label>
                                                <input type="checkbox" name="reading_correct_formation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="arabic_language_vocabulary"> يحتاج الطالب لزيادة الحصيلة
                                                    اللغوية العربية </label>
                                                <input type="checkbox" name="arabic_language_vocabulary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="practice_reading_by_time"> يحتاج الطالب للتدرب على القراءة وفق
                                                    وقت زمني </label>
                                                <input type="checkbox" name="practice_reading_by_time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="reading_and_distinction"> يحتاج الطالب للتعرف على قراءة المقطع
                                                    الساكن وتمييزه </label>
                                                <input type="checkbox" name="reading_and_distinction">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="reinforcing_reading_comprehension"> يحتاج الطالب لتعزيز القراءة
                                                    الاستيعابية </label>
                                                <input type="checkbox" name="reinforcing_reading_comprehension">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="extract_main_idea"> يحتاج الطالب للتمكن من استخراج الفكرة
                                                    الرئيسية للنص المقروء </label>
                                                <input type="checkbox" name="extract_main_idea">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="speaking_grammar_principles"> يحتاج الطالب لتعزيز التعرف على
                                                    مبادئ النحو من التذكير والتأنيث الجمع والمفرد لاستخدامها في التحدث
                                                </label>
                                                <input type="checkbox" name="speaking_grammar_principles">
                                            </div>
                                        </div>
                                    </div>


                                    {{-- Skill Notes --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> ملاحظات مهارة الكتابة </span>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="alphabet_distinguishing"> يحتاج الطالب لتمييز حروف الهجاء  </label>
                                                <input type="checkbox" name="alphabet_distinguishing">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinguishing_homonyms"> يحتاج الطالب لتعزيز التمييز بين متشابهات الحروف </label>
                                                <input type="checkbox" name="distinguishing_homonyms">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinguishing_sight_words"> يحتاج الطالب لتمييز الكلمات البصرية المخصصة للمجموعة </label>
                                                <input type="checkbox" name="distinguishing_sight_words">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="rid_of_word_saturation"> يحتاج الطالب للتخلص من مشكلة إشباع الكلمة </label>
                                                <input type="checkbox" name="rid_of_word_saturation">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="short_long_runs"> يحتاج الطالب التمييز بين المدود القصيرة والمدود الطويلة </label>
                                                <input type="checkbox" name="short_long_runs">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="distinction_consonant_syllable"> يحتاج الطالب للتعرف على قراءة المقطع الساكن وتمييزه </label>
                                                <input type="checkbox" name="distinction_consonant_syllable">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="short_log_vowels"> يحتاج الطالب لتعزيز مهارة التمكن من الإملاء الغير منظور ( الهمزات- التاء المفتوحة و المربوطة-استخدام التشكيل و التمييز بين المدود القصيرة و الطويلة ) </label>
                                                <input type="checkbox" name="short_log_vowels">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="complete_sentence_meaning"> يحتاج الطالب القدرة على تكوين جملة تامة المعنى </label>
                                                <input type="checkbox" name="complete_sentence_meaning">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="write_descriptively"> يحتاج الطالب لتعزيز القدرة على الكتابة الوصفية ( مشاعر- وصف مكان- وصف الحال) </label>
                                                <input type="checkbox" name="write_descriptively">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="diacritics_unformed_words"> يحتاج الطالب لتعزيز استخدام التشكيل من خلال وضع التشكيل بنفسه على الكلمات الغير مشكلة </label>
                                                <input type="checkbox" name="diacritics_unformed_words">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="consolidate_transcription_skill"> يحتاج الطالب لتعزيز مهارة النسخ </label>
                                                <input type="checkbox" name="consolidate_transcription_skill">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="practice_summarizing_text"> يحتاج الطالب للتدرب على تلخيص نص( يناسب المستوى الخاص به) </label>
                                                <input type="checkbox" name="practice_summarizing_text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="holding_pen_directing_notebook"> يحتاج الطالب للتدرب على مسك القلم وتوجيه الكراس بالطريقة الصحيحة </label>
                                                <input type="checkbox" name="holding_pen_directing_notebook">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="enhance_ability_to_draw"> يحتاج الطالب لتعزيز القدرة على رسم الخطوط المائلة المنحنية والمستقيمة وتعزيز الكتابة على السطر </label>
                                                <input type="checkbox" name="enhance_ability_to_draw">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="ability_to_formulate"> يحتاج الطالب لتعزيز القدرة على صياغة اسئلة ( بما يخص المرحلة الخاصة به) </label>
                                                <input type="checkbox" name="ability_to_formulate">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Speaking Skill Notes --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> ملاحظات مهارة التحدث </span>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="improve_pronounciation"> يحتاج الطالب لتحسين مخارج نطق الحروف </label>
                                                <input type="checkbox" name="improve_pronounciation">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="retell_arabic_text"> يحتاج الطالب للقدرة على اعادة سرد النص المقروء بلغة عربية سليمة </label>
                                                <input type="checkbox" name="retell_arabic_text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="practice_summarizing_text"> يحتاج الطالب للتدرب على تلخيص نص( يناسب المستوى الخاص به) </label>
                                                <input type="checkbox" name="practice_summarizing_text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="enhance_ability_formulate_questions"> يحتاج الطالب لتعزيز القدرة على صياغة اسئلة ( بما يخص المرحلة الخاصة به) </label>
                                                <input type="checkbox" name="enhance_ability_formulate_questions">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="self_confidence_beneficiaries"> يحتاج الطالب لتعزيز ثقته بنفسه في ذكر المستفاد من النص المسموع او المقروء </label>
                                                <input type="checkbox" name="self_confidence_beneficiaries">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="identify_ending_word"> يحتاج الطالب لتطبيق مهارة استخدام السكون للتعرف على نهاية الكلمات </label>
                                                <input type="checkbox" name="identify_ending_word">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="grammar_principles"> يحتاج الطالب لتعزيز التعرف على مبادئ النحو من التذكير والتأنيث الجمع والمفرد لاستخدامها في التحدث </label>
                                                <input type="checkbox" name="grammar_principles">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="common_arabic_words"> يحتاج الطالب لتعزيز التعريف بالكلمات بالعربية الشائعة </label>
                                                <input type="checkbox" name="common_arabic_words">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="complete_sentence_with_meaning"> يحتاج الطالب القدرة على تكوين جملة تامة المعنى</label>
                                                <input type="checkbox" name="complete_sentence_with_meaning">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Listening Skill Notes --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> ملاحظات مهارة الإستماع</span>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="develop_listening_skill"> يحتاج الطالب لتطوير مهارة الإستماع والقدرة على تحديد الفكرة الرئيسية للنص المسموع </label>
                                                <input type="checkbox" name="develop_listening_skill">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="identify_color_shapes_week"> يحتاج الطالب للتعرف على ايام الأسبوع الالوان والأشكال والمشاعر </label>
                                                <input type="checkbox" name="identify_color_shapes_week">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="learning_process"> يحتاج الطالب للإندماج في العملية التعليمية والإستجابة </label>
                                                <input type="checkbox" name="learning_process">
                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    {{-- Please select the stage --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> يرجى تحديد المرحلة </span>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="level_one_preschool_stage"> المستوى الأول لسن ما قبل المدرسة ( 3 - 5 سنوات ) </label>
                                                <input type="radio" id = "level_one_preschool_stage" name="stage_select">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="level_two_preschool_stage"> المستوى الثاني لسن ما قبل المدرسة ( 4 - 5 سنوات ) </label>
                                                <input type="radio" id = "level_two_preschool_stage" name="stage_select">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="first_level_school_students"> المستوى الأول لطلاب المدرسة ( 6 - 7 سنوات ) </label>
                                                <input type="radio" id = "first_level_school_students" name="stage_select">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="second_level_school_students"> المستوى الثاني لطلاب المدرسة </label>
                                                <input type="radio" id = "second_level_school_students" name="stage_select">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="third_level_school_students"> المستوى الثالث لطلاب المدرسة </label>
                                                <input type="radio" id = "third_level_school_students" name="stage_select">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- Recomendations --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> المستوى الأول لسن ما قبل المدرسة ( 3 - 5 سنوات ) / التوصيات </span>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="integrating_child_environment"> يتطلب من المعلمة العمل على دمج الطفل في البيئة التعليمية باستخدام أساليب التعليم التفاعلية </label>
                                                <input type="checkbox" id = "integrating_child_environment" name="integrating_child_environment">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="simulgan_process"> يتطلب من المعلمة العمل على تحسين مخارج نطق الحروف باستخدام عملية ( سيمولجان) </label>
                                                <input type="checkbox" id = "simulgan_process" name="simulgan_process">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="enhancing_knowledge_visually"> يتطلب من المعلمة العمل على تعزيز معرفة الطفل بأيام الأسبوع بصريا – بالترتيب الصحيح عن طريق الوسائل التفاعلية </label>
                                                <input type="checkbox" id = "enhancing_knowledge_visually" name="enhancing_knowledge_visually">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="enhancing_recognition"> يتطلب من المعلمة العمل على تعزيز التعرف على الأرقام و الاشكال بالوسائل التفاعلية </label>
                                                <input type="checkbox" id = "enhancing_recognition" name="enhancing_recognition">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="interactive_visual_recognition"> يتطلب من المعلمة البدء في عملية التعليم ( الكل إلى الجزء) في تعريفه بأحرف الهجاء بصريا للتمييز و باستخدام الوسائل التفاعلية. </label>
                                                <input type="checkbox" id = "interactive_visual_recognition" name="interactive_visual_recognition">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="motivating_correct_manner"> يتطلب من المعلمة العمل على تحفيز نطق الحروف بالشكل الصحيح و الترتيب الصحيح باستخدام صوت الحرف </label>
                                                <input type="checkbox" id = "motivating_correct_manner" name="motivating_correct_manner">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="interactive_arabic_vocabulary"> يتطلب من المعلمة العمل على زيادة الحصيلة اللغوية العربية من خلال ربط الحرف باسم من الكلمات الشائعة و تكراره باستخدام الوسائل التفاعلية. </label>
                                                <input type="checkbox" id = "interactive_arabic_vocabulary" name="interactive_arabic_vocabulary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="prescribed_interactive_methods"> يتطلب من المعلمة تكرار الأنشودة المقررة بالطرق التفاعلية مع الحرص على تحقيق الأهداف من كل أنشودة </label>
                                                <input type="checkbox" id = "prescribed_interactive_methods" name="prescribed_interactive_methods">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="motivate_to_hold_pen_correctly"> يتطلب من المعلمة  تحفيز الطفل على امساك القلم بالطريقة الصحيحة – مع مراعاة جاهزيته – او استبدال القلم بالقلم العريض </label>
                                                <input type="checkbox" id = "motivate_to_hold_pen_correctly" name="motivate_to_hold_pen_correctly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="correct_child_orientation"> يتطلب من المعلمة توجيه الطفل على توجيه الكراس بالشكل الصحيح الملائم للكتابة </label>
                                                <input type="checkbox" id = "correct_child_orientation" name="correct_child_orientation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="stimulate_writing_process"> يتطلب من المعلمة تحفيز الطفل على تتبع النقاط لتحفيز عملية الكتابة على السطر </label>
                                                <input type="checkbox" id = "stimulate_writing_process" name="stimulate_writing_process">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="visual_motivation_track_process"> يتطلب من المعلمة تعريف الطفل باليوم -بصريا- و عن طريق تتبع النقاط مع تحفيز نطق اليوم </label>
                                                <input type="checkbox" id = "visual_motivation_track_process" name="visual_motivation_track_process">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="repeation_of_phrace"> يتطلب من المعلمة تحفيز الطفل على تتبع اسمه مع تكرار عبارة أنا اسمي ......( الاسم الثنائي)على بطاقة مغلفة تحمل صورة الطفل </label>
                                                <input type="checkbox" id = "repeation_of_phrace" name="repeation_of_phrace">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="interactive_meaning_clarification">يتطلب من المعلمة توضيح معنى ( الكتابة على السطر) و توجيهه بشكل تفاعلي </label>
                                                <input type="checkbox" id = "interactive_meaning_clarification" name="interactive_meaning_clarification">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="discover_childs_ability"> يتطلب من المعلمة اكتشاف قدرة الطفل في الإمساك بالقلم و جاهزيته من خلال تتبع الحروف </label>
                                                <input type="checkbox" id = "interactive_meaning_clarification" name="interactive_meaning_clarification">
                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    {{-- The second level for preschool age (4-5 years) --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> المستوى الثاني لسن ما قبل المدرسة ( 4 - 5 سنوات ) </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="review_alphabet_letters"> يتطلب من المعلمة العمل على مراجعة أحرف الهجاء بشكل يومي عن طريق الوسائل التفاعلية </label>
                                                <input type="checkbox" id = "review_alphabet_letters" name="review_alphabet_letters">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="motivate_to_repeat"> يتطلب من المعلمة سؤال الطفل عن اسمه و تحفيزه على ترديد أنا اسمي ... الاسم الثنائي للطالب </label>
                                                <input type="checkbox" id = "motivate_to_repeat" name="motivate_to_repeat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="letter_classification"> يتطلب من المعلمة البدء في تصنيف حروف الهجاء على النحو الذي تم التدرب عليه </label>
                                                <input type="checkbox" id = "letter_classification" name="letter_classification">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="triple_word"> يتطلب من المعلمة تحفيز الطفل على تجميع الحروف عند سماع كلمة ثلاثية ( بحركة الفتحة) </label>
                                                <input type="checkbox" id = "triple_word" name="triple_word">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="prescribed_chant"> يتطلب من المعلمة تكرار الانشودة المقررة  مع التأكد من توصيل الهدف المحدد من خلال الطرق التفاعلية </label>
                                                <input type="checkbox" id = "prescribed_chant" name="prescribed_chant">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="new_two_five_words"> يتطلب من الطفل على التعرف على عدد 25 كلمة شائعة جديدة و نطقها بشكل سليم و استخدامها بجملة قصيرة بسيطة شفهيا </label>
                                                <input type="checkbox" id = "new_two_five_words" name="new_two_five_words">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="first_group_sight_words"> يتطلب من المعلمة البدء في المجموعة الأولى من الكلمات البصرية و تعليمها بالطرق التفاعلية. </label>
                                                <input type="checkbox" id = "first_group_sight_words" name="first_group_sight_words">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="motivating_to_pronounce"> يتطلب من المعلمة المتابعة البدء في تدريب الطالب على نسخ جميع حروف الهجاء ضمن عملية تعليم ( الكل إلى الجزء) مع تحفيزه على نطق الحرف أثناء النسخ </label>
                                                <input type="checkbox" id = "motivating_to_pronounce" name="motivating_to_pronounce">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="named_card_identification"> يتطلب من المعلمة طلب كتابة  الاسم على البطاقة التعريفية بمفرده عن طريق تتبع النقاط مع توجيهه عن بعد. </label>
                                                <input type="checkbox" id = "named_card_identification" name="named_card_identification">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="extract_required_letter"> يتطلب من المعلمة الطلب من الطفل على استخراج الحرف المطلوب من خلال كلمة ثلاثية بوضع دائرة حولها. </label>
                                                <input type="checkbox" id = "extract_required_letter" name="extract_required_letter">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="motivate_to_copy_alphabet"> يتطلب من المعلمة تحفيز الطفل على نسخ الحروف الهجائية بمواضعها الثلاث </label>
                                                <input type="checkbox" id = "motivate_to_copy_alphabet" name="motivate_to_copy_alphabet">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="request_transcribe"> يتطلب من المعلمة طلب نسخ رسم شكل (ضمة -فتحة – كسرة) مع البدء في تعليم استخدامها على الحروف و نطقها كمدود قصيرة. </label>
                                                <input type="checkbox" id = "request_transcribe" name="request_transcribe">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="character_tracing"> يتطلب من المعلمة طلب تتبع الحروف لنسخ اسم اليوم مع توجييهه عن بعد </label>
                                                <input type="checkbox" id = "character_tracing" name="character_tracing">
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    {{-- The first level for school students (6-7 years) --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> المستوى الأول لطلاب المدرسة ( 6 - 7 سنوات ) </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="three_similar_letters"> يتطلب من المعلمة عرض الكلمات الثلاثية بمتشابهات الاحرف مع طلب قراءتها و تحفيزه باستمرار على قراءتها بشكل افضل من المرة التي قبلها. </label>
                                                <input type="checkbox" id = "three_similar_letters" name="three_similar_letters">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="three_words_read_motivate_short"> يتطلب من المعلمة عرض الكلمات الثلاثية بالمدود القصيرة مع طلب قراءتها و تحفيزه باستمرار على قراءتها بشكل افضل من المرة التي قبلها </label>
                                                <input type="checkbox" id = "three_words_read_motivate_short" name="three_words_read_motivate_short">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="three_words_read_motivate_long"> يتطلب من المعلمة عرض الكلمات الثلاثية  بالمدود الطويلة مع طلب قراءتها و تحفيزه باستمرار على قراءتها بشكل افضل من المرة التي قبلها </label>
                                                <input type="checkbox" id = "three_words_read_motivate_long" name="three_words_read_motivate_long">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="display_short_long"> يتطلب من المعلمة عرض الكلمات المتنوعة ما بين المدود القصيرة و الطويلة لتعزيز التمييز في قراءتها و لفظها </label>
                                                <input type="checkbox" id = "display_short_long" name="display_short_long">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="words_with_intensity"> يتطلب من المعلمة عرض الكلمات بالشدة مع طلب قراءتها و تحفيزه باستمرار على قراءتها بشكل افضل من المرة التي قبلها </label>
                                                <input type="checkbox" id = "words_with_intensity" name="words_with_intensity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="read_graded_stories"> يتطلب من المعلمة البدء في تدريب الطفل على قراءة القصص المتدرجة (اللون الاحر – البرتقالي) </label>
                                                <input type="checkbox" id = "read_graded_stories" name="read_graded_stories">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="read_graded_stories_red_orange"> يتطلب من المعلمة البدء في تحفيز كتابة الحروف باستمرار بمواضعها الثلاث </label>
                                                <input type="checkbox" id = "read_graded_stories_red_orange" name="read_graded_stories_red_orange">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="writing_letters"> يتطلب من المعلمة البدء في تحفيز كتابة الحروف باستمرار بمواضعها الثلاث </label>
                                                <input type="checkbox" id = "writing_letters" name="writing_letters">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="invisibly_dictating"> يتطلب من المعلمة البدء في اجراء عملية الاملاء الغير منظور للكلمات الثلاثية بمتشابهات الحروف </label>
                                                <input type="checkbox" id = "invisibly_dictating" name="invisibly_dictating">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="invisibly_dictating_short_duration"> يتطلب من المعلمة البدء في اجراء الاملاء الغير منظور للكلمات الثلاثية بالمدود القصيرة مع مراعاة وضع الحركات </label>
                                                <input type="checkbox" id = "invisibly_dictating_short_duration" name="invisibly_dictating_short_duration">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="invisibly_dictating_short_duration_long_vowels"> يتطلب من المعلمة البدء في اجراء الاملاء الغير منظور للكلمات الثلاثية بالمدود الطويلة </label>
                                                <input type="checkbox" id = "invisibly_dictating_short_duration_long_vowels" name="invisibly_dictating_short_duration_long_vowels">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="invisibly_dictating_group_words"> يتطلب من المعلمة البدء في اجراء الاملاء الغير منظور لمجموعة الكلمات المتنوعة بين المد القصير و الطويل مع مراعاة وضع الحركات </label>
                                                <input type="checkbox" id = "invisibly_dictating_group_words" name="invisibly_dictating_group_words">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="copy_sight_words"> يتطلب من المعلمة تحفيز الطالب على نسخ الكلمات البصرية على السطر </label>
                                                <input type="checkbox" id = "copy_sight_words" name="copy_sight_words">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="name_on_lines"> يتطلب من المعلمة الطلب من الطالب على كتابة اسمه الثلاثي على السطر </label>
                                                <input type="checkbox" id = "name_on_lines" name="name_on_lines">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                 <label for="day_on_line"> يتطلب من المعلمة الطلب من الطالب بكتابة اليوم على السطر </label>
                                                <input type="checkbox" id = "day_on_line" name="day_on_line">
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="">Evaluation Comment</label>
                                                <textarea type="text" id="comment" name="comment" rows="2" class="form-control md-textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center p-2 text-md-left">
                                        <button type="submit" class="text-center text-md-left btn btn-primary">Submit
                                            Evaluation Report</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
        </section>
    @endsection
