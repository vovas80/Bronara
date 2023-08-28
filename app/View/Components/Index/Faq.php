<?php

namespace App\View\Components\Index;

use Single;
use Illuminate\View\Component;

class Faq extends Component
{
    public $fields = [];
    public function __construct()
    {
        $s = new Single('FAQ', 9, 1);

        $title = $s->field('FAQ', 'Заголовок', 'text', true, 'Часто задаваемые вопросы');
        $tourist = $s->field('FAQ', 'Туристу', 'text', true, 'Туристу');
        $agent = $s->field('FAQ', 'Турагенту', 'text', true, 'Турагенту');


        $tourist_questions = $s->field('Вопросы туристу', 'Вопрос', 'repeat', true);
        $tourist_questions_items = [];
        foreach ($tourist_questions as $elm){
            $tourist_questions_items [] = [
                $elm->field('Вопрос', 'textarea', ''), 
                $elm->field('Ответ', 'ckeditor', ''), 
            ];
            $elm->end();
        }

        $agent_questions = $s->field('Вопросы турагенту', 'Вопрос', 'repeat', true);
        $agent_questions_items = [];
        foreach ($agent_questions as $elm){
            $agent_questions_items [] = [
                $elm->field('Вопрос', 'textarea', ''), 
                $elm->field('Ответ', 'ckeditor', ''), 
            ];
            $elm->end();
        }

        $this->fields = [
            'tourist_questions' => $tourist_questions_items,
            'agent_questions'   => $agent_questions_items,
            'title'             => $title,
            'tourist'           => $tourist, 
            'agent'             => $agent,
        ];
    }

    public function render()
    {
        return view('components.index.faq');
    }
}
