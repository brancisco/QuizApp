<?php

class QuizItem extends AppModel {
    var $name = 'QuizItem';

    var $validate = array(
        'question' => array(
            'rule' => 'notEmpty'
        ),
        'option1' => array(
            'rule' => 'notEmpty'
        ),
        'option2' => array(
            'rule' => 'notEmpty'
        ),
        'option3' => array(
            'rule' => 'notEmpty'
        ),
        'option4' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>