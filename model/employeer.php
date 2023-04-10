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

    
}
?>