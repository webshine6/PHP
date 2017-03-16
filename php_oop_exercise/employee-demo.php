<?php

use Employee\Employee;

spl_autoload_register(function ($class){
    $class = $class.'.php';
    require_once $class;
});


$linesNumber = trim(fgets(STDIN));

$salariesDepartments = array();

$employees = array();
$departments = array();


for ($i = 0; $i < $linesNumber; $i++) {
    $employeeInfo = trim(fgets(STDIN));

    // pesho 120.00 dev development pesho@abv.bg 28
    $employeeInfo = explode(' ', $employeeInfo);

    $name = $employeeInfo[0];
    $salary = floatval(round($employeeInfo[1], 2));
    $position = $employeeInfo[2];
    $department = $employeeInfo[3];

    // pesho 120.00 dev development   pesho@abv.bg 28
    //  [0]   [1]   [2]    [3]         [4]      [5]

        // pesho 120.00 dev development 32
    //  [0]   [1]   [2]    [3]         [4]

    if (count($employeeInfo) > 5) {
        $email = $employeeInfo[4];
        $age   = intval($employeeInfo[5]);
        $employee = new Employee($name, $salary, $position, $department, $email, $age);
    }elseif (count($employeeInfo) > 4) {
        if (is_numeric($employeeInfo[4])) {
            $age = intval($employeeInfo[4]);
            $employee = new Employee($name, $salary, $position, $department,'n/a', $age);
        }else {
            $email = $employeeInfo[4];
            $employee = new Employee($name, $salary, $position, $department, $email, -1);
        }
    }else {
        $employee = new Employee($name, $salary, $position, $department);
    }

    $employees[] = $employee;

    // calculate salary by department
    foreach ($employees as $employee) {
        if (array_key_exists($employee->getDepartment(), $departments)){
            $departments[$employee->getDepartment()] += $employee->getSalary();
        }else {
            $departments[$employee->getDepartment()] = $employee->getSalary();
        }
    }
}

// print highest department
$highestSalaryDepartment = array_search(max($departments), $departments);
echo "Highest Department Salary: ".$highestSalaryDepartment.PHP_EOL;

// sort employees by salary
usort($employees, function (Employee $emp1, Employee $emp2){
   return $emp2->getSalary() <=> $emp1->getSalary();
});


// print employees with max salary department::
foreach ($employees as $employee) {
    if($employee->getDepartment() == $highestSalaryDepartment) {
        echo $employee->getName().' '.
            number_format($employee->getSalary(),2).' '.
            $employee->getEmail().' '.$employee->getAge().PHP_EOL;
    }
}

//var_dump($employees);
//var_dump($departments);
