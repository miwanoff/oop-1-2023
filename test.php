<?php

// Підключаємо оголошення класу
require_once "Employee.php";
require_once "Company.php";
// Оголошуємо об'єкт класу Employee
$emp = new Employee();
// Привласнюємо значення членам класу
$emp->surname = "Борисенко";
$emp->name = "Ігор";
//  $emp->age = 23 ; // Помилка
// Виводимо властивості класу
echo $emp->surname . " " . $emp->name . " " . "\n ";

if (!$emp->set_age(23)) {
    exit("Помилка обчислення віку");
}

echo $emp->get_full_info(); // Борисов  Ігор  23

$emp1 = new Employee();
$emp1->set_name("Денис");
$emp1->set_surname("Денисенко");

if (!$emp1->set_age(25)) {
    exit("Помилка обчислення віку");
}

echo $emp1;

$emp2 = new Employee("Ніколь", "Кідман", 20);
echo $emp2->get_full_info();

$arr = [$emp, $emp1, $emp2];

// $company = new Company();

// $company->set_employees($arr);

// print_r($company->get_employees()) ;

// $emp3 = new Employee("Ніколь1", "Кідман1", 30);

// $company->add_employee($emp3);

$company = new Company("Кит", $arr);

print_r($company->get_employees());

if ($company->checkUser("Ніколь", "Кідман")) {
    echo "!!!";
} else {
    echo "???";
}
;
echo "\n";
echo $company;