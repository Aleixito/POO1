
<?php
class Employee {
    private $nombre;
    private $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function InformacionEmpleado() {
        if ($this->salario > 6000) {
            echo "Nombre de empleado: " . $this->nombre . "\n";
            echo "Este empleado debe pagar impuestos.\n";
        } else {
            echo "Nombre de empleado: " . $this->nombre . "\n";
            echo "Este empleado no debe pagar impuestos.\n";
        }
    }
}
?>
$employee1 = new Employee("Aleix", 4000);
$employee1->InformacionEmpleado();
$employee2 = new Employee("Eric", 6500);
$employee2->InformacionEmpleado();

?>