<?php

namespace SoftUni {

    function getTopStudent() {
        return "Pesho";
    }

}

namespace NASA {
    use SoftUni;

    $topStudent = \SoftUni\getTopStudent();
    echo $topStudent;
}