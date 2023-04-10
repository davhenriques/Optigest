<?php
include_once 'db.php';
class Employeer {
    public $id;
    public $name;
    public $age;
    public $job;
    public $salary;
    public $admission_date;
    
    public function __construct($id, $name, $age, $job, $salary, $admission_date) {
        $this->id               = $id;
        $this->name             = $name;
        $this->age              = $age;
        $this->job              = $job;
        $this->salary           = $salary;
        $this->admission_date   = $admission_date;
    }

    public function __construct_db($id) {
        $this->id               = $id;
        $emp                    = $db->query('SELECT * FROM employees WHERE id = ?', $this->id)->fetchArray();;
        if($emp>numRows() == 1){
            $this->name             = $emp['name'];
            $this->age              = $emp['age'];
            $this->job              = $emp['job'];
            $this->salary           = $emp['salary'];
            $this->admission_date   = $emp['admission_date'];
        }else{
            print("Error getting employee with id: " + $id);
        }
    }

    public function create(){
        
        $db                     = new db();
        
        $insert                 = $db->query('INSERT INTO employees (name,age,job,salary,admission_date) VALUES (?,?,?,?,?)', array($this->name, $this->age, $this->job, $this->salary, $this->admission_date));
        
        $db->close();
        if ($insert->affectedRows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // ID
    public function getId(){
        return $this->id;
    }

    // Name
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $db                     = new db();
        $insert                 = $db->query('UPDATE employees set name=?', $name);
        $db->close();

        if ($insert->affectedRows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // Age
    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $db                     = new db();
        $insert                 = $db->query('UPDATE employees set age=?', $age);
        $db->close();
        
        if ($insert->affectedRows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // Job
    public function getJob(){
        return $this->job;
    }

    public function setJob($job){
        $db                     = new db();
        $insert                 = $db->query('UPDATE employees set job=?', $job);
        $db->close();
        
        if ($insert->affectedRows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // Salary
    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        $db                     = new db();
        $insert                 = $db->query('UPDATE employees set salary=?', $salary);
        $db->close();
        
        if ($insert->affectedRows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // AdmissionDate
    public function getAdmissionDate(){
        return $this->admission_date;
    }

    public function setAdmissionDate($admission_date){
        $db                     = new db();
        $insert                 = $db->query('UPDATE employees set admission_date=?', $admission_date);
        $db->close();
        
        if ($insert->affectedRows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function getAvgAge(){
        $db                     = new db();
        $avg                 = $db->query('SELECT AVG(age) as avg_age FROM employees');
        $db->close();
        return $avg['avg_age'];
    }

    

    
}
?>