<?php

namespace App\Helpers;

use Single;

class CaseText {

    public static function days($count) {
        
        $s = new Single('Переводы', 1, 2);

        if ($count >= 11 and $count <= 19) {
            return $s->field('Дни', 'дней', 'text', true, 'дней');
        } 

        $count = $count % 10;
        
        if ($count == 1) {
            return $s->field('Дни', 'день', 'text', true, 'день');
        }
        
        if ($count >= 2 && $count <= 4) {
            return $s->field('Дни', 'дня', 'text', true, 'дня');
        }

        return $s->field('Дни', 'дней', 'text', true, 'дней');

    }

    public static function stars($star) {
        
        $s = new Single('Переводы', 1, 2);

        return $star . ' ' . $s->field('Звезды', 'Звездночный отель', 'text', true, '- звездночный отель');

    }

}