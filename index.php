<?php

/**
 * 
 *      Definire classe Persona:
 *          - ATTRIBUTI (private):
 *              - nome
 *              - cognome
 *              - dataNascita (stringa)
 *          - METODI:
 *              - costruttore che accetta nome e cognome
 *              - setter/getter per ogni variabile
 *              - printFullPerson: che stampa "nome cognome: dataNascita"
 *              - toString: che ritorna "nome cognome: dataNascita"
 * 
 * 
 *      Definire classe Employee che eredita da Persona:
 *          - ATTRIBUTI (private):
 *              - stipendio
 *              - dataAssunzione
 *          - METODI:
 *              - costruttore che accetta nome, cognome e stipendio
 *              - setter/getter per variabili 
 *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
 *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
 * 
 */

    // CLASSE PERSON
    class Person {

        private $name;
        private $surname;
        private $dateOfBirth;

        public function __construct($name, $surname) {

            $this->setName($name);
            $this->setSurname($surname);        
        }

        // Getter - setter Name
        public function getName() {

            return $this->name;
        }

        public function setName($name) {
            
            $this->name = $name;
        }

        // Getter - setter Surname
        public function getSurname() {

            return $this->surname;
        }

        public function setSurname($surname) {
            
            $this->surname = $surname;
        }

        // Getter - setter Date of birth
        public function getDateOfBirth() {

            return $this->dateOfBirth;
        }

        public function setDateOfBirth($dateOfBirth) {
            
            $this->dateOfBirth = $dateOfBirth;
        }

        // Metodo printFullPerson
        public function printFullPerson() {

            return $this->getName() . ' ' . $this->getSurname() . ': ' . $this->getDateOfBirth();
        }

        // Metodo toString
        public function __toString() {

            return $this->getName() . ' ' . $this->getSurname() . ': ' . $this->getDateOfBirth();
        }
    }

    // CLASSE EMPLOYEE con l'eredità di Person (extends Person)
    class Employee extends Person {

        private $salary;
        private $assumptionDate;

        public function __construct($name, $surname, $salary){
            parent::__construct($name, $surname);
            $this->salary = $salary;
        }

        // Getter - setter Salary
        public function getSalary() {

            return $this->salary;
        }

        public function setSalary($salary) {
            
            $this->salary = $salary;
        }

        // Getter - setter Assumption date
        public function getAssumptionDate() {

            return $this->assumptionDate;
        }

        public function setAssumptionDate($assumptionDate) {
            
            $this->assumptionDate = $assumptionDate;
        }

        // Metodo printFullEmployee
        public function printFullEmployee() {

            return $this->getName() . ' ' . $this->getSurname() . ': ' . $this->getSalary() . '&euro; (' . $this->getAssumptionDate() . ')'; 
        }

        // Metodo toString
        public function __toString() {
            return $this->getName() . ' ' . $this->getSurname() . ': ' . $this->getSalary() . '&euro; (' . $this->getAssumptionDate() . ')'; 
        }
    }

    // Istanza persona
    $p1 = new Person("Mario", "Lombardo");
    $p2 = new Person("Luca", "Rossi");
    $p3 = new Person("Filippo", "Bianchi");
    $p4 = new Person("Giulia", "Asta");
    $p5 = new Person("Salvatore", "Curseri");

    // Istanza Employee
    $e1 = new Employee($p1->getName(), $p1->getSurname(), "2000");
    $e2 = new Employee($p2->getName(), $p2->getSurname(), "1400");
    $e3 = new Employee($p3->getName(), $p3->getSurname(), "1850");
    $e4 = new Employee($p4->getName(), $p4->getSurname(), "1200");
    $e5 = new Employee($p5->getName(), $p5->getSurname(), "1650");

    // Data di nascita persona
    $p1->setDateOfBirth("24-08-1995");
    $p2->setDateOfBirth("02-04-1982");
    $p3->setDateOfBirth("12-12-1998");
    $p4->setDateOfBirth("10-09-2001");
    $p5->setDateOfBirth("08-01-2000");

    // Data assunzione Employee
    $e1->setAssumptionDate("15/10/2018");
    $e2->setAssumptionDate("01/05/2019");
    $e3->setAssumptionDate("20/03/2020");
    $e4->setAssumptionDate("12/04/2021");
    $e5->setAssumptionDate("04/06/2019");

    // Stampa Persona (sia la funzione printFullName che la funzione __toString)
    echo 'PERSON <br><br>';

    echo 'printFullName PERSON: ' . $p1->printFullPerson() . '<br>';
    echo '__toString Person PERSON: ' . $p1 . '<br><br>';
    echo $p2 . '<br>';
    echo $p3 . '<br>';
    echo $p4 . '<br>';
    echo $p5 . '<br>';

    echo '<br>-------------------------------------------------------------------<br><br>';

    // Stampa Employee (sia la funzione printFullEmployee che la funzione __toString)
    echo 'EMPLOYEE <br><br>';

    echo 'printFullEmployee EMPLOYEE: ' . $e1->printFullEmployee() . '<br>';
    echo '__toString Employee EMPLOYEE: ' . $e1 . '<br><br>';
    echo $e2 . '<br>';
    echo $e3 . '<br>';
    echo $e4 . '<br>';
    echo $e5 . '<br>';

?>