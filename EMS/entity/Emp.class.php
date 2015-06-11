<?php
class Emp
{
private $id;
private $name;
private $salary;
private $age;

public function __construct(){}
/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

/**
	 * @return the $salary
	 */
	public function getSalary() {
		return $this->salary;
	}

/**
	 * @return the $age
	 */
	public function getAge() {
		return $this->age;
	}

/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

/**
	 * @param field_type $salary
	 */
	public function setSalary($salary) {
		$this->salary = $salary;
	}

/**
	 * @param field_type $age
	 */
	public function setAge($age) {
		$this->age = $age;
	}




}