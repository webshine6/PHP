<?php

/**
 * Малко приложение, което приема команти
 * от стандартния вход (конзолата) за:
 *  - регистрация на потребители във форум
 *  - логин на потребители (съществуващи)
 *  - създаване на въпроси във форума от
 *  определени автори (от текъщо логнатия
 *  потребител)
 *  - създаване на отговори на въпроси (пак от автори и т.н.)
 *  - коментари на отговори
 */

/**
 * Потребители
 *   - пореденНомер (тип инт)
 *   - име (тип стринг)
 *   - парола (тип стринг)
 *   - зададениВъпроси (тип Въпрос масив - Въпрос[])
 *   - създадениОтговори (тип Отговор масив - Отговор[])
 *   - коментариНаОтговори (тип Отговор масив - Отговор[])
 *
 * Въпроси
 *   - пореденНомер (тип инт)
 *   - заглавие (тип стринг)
 *   - съдържание (тип стринг)
 *   - автор (тип П  отребител)
 *   - Отговори  (тип Отговор масив - Отговор[])
 *
 * Отговори
 *    - пореденНомер (тип инт)
 *    - съдържание (тип стринг)
 *    - въпросНаКойтоЕОтговорено (тип Въпрос)
 *    - отговорНаКойтоЕКоментирано (тип Отговор)
 *    - коментари (тип Отговор масив - Отговор[])
 */

/**
 *  + register {username} {password}
 *  + login {username} {password}
 *  + ask {title} {body}
 *  + answer {questionId} {body}
 *  + comment {answerId} {body}
 */

//require_once "Author/User.php";
//require_once "Content/Question.php";
//require_once "Content/Answer.php";
//require_once "Forum.php";

spl_autoload_register(// auto loader
    function ($class) {
        $class = $class.'.php';
        require_once $class;
    }
);


$forum = new Forum();
$forum->start();
