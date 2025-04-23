<?php 
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\I18n\FrozenTime;

class DashboardController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
{
    $getUsers = TableRegistry::getTableLocator()->get('Users');
    $getDepartments = TableRegistry::getTableLocator()->get('Departments');
    $getEmployees = TableRegistry::getTableLocator()->get('Employees');
    $getWorkExperience = TableRegistry::getTableLocator()->get('WorkExperience');

    $users = $getUsers->find('all')->count();
    $departmentsCount = $getDepartments->find('all')->count();
    $employees = $getEmployees->find('all')->count();

    $maleCount = $getEmployees->find()->where(['sex' => 'male'])->count();
    $femaleCount = $getEmployees->find()->where(['sex' => 'female'])->count();

    $currentYear = FrozenTime::now()->year;
    $employeeAddedData = [
        'labels' => [],
        'data' => []
    ];

    for ($month = 1; $month <= 12; $month++) {
        $startOfMonth = FrozenTime::create($currentYear, $month, 1, 0, 0, 0);
        $endOfMonth = $startOfMonth->endOfMonth();

        $count = $getEmployees->find()
            ->where([
                'created >=' => $startOfMonth,
                'created <=' => $endOfMonth
            ])
            ->count();

        $employeeAddedData['labels'][] = $startOfMonth->format('M');
        $employeeAddedData['data'][] = $count;
    }

    $departmentsData = $getDepartments->find('all')->toArray();
    $departments = [];
    $employeeCounts = [];

    foreach ($departmentsData as $department) {
        $employeeCount = $getWorkExperience->find()
            ->contain(['Employees'])
            ->where(['WorkExperience.department_id' => $department->id])
            ->count();

        $departments[] = $department->department; 
        $employeeCounts[] = $employeeCount;
    }

    $genderData = [
        'male' => $maleCount,
        'female' => $femaleCount
    ];

    $this->set(compact('users', 'departmentsCount', 'employees', 'genderData', 'employeeAddedData', 'departments', 'employeeCounts'));
}
}