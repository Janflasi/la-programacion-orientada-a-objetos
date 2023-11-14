<?php
class Persona {
    public static function imprimir() {
        echo "Hola";
    }

    public static function suma($num1, $num2) {
        return $num1 + $num2;
    }
}

// Llamar al método estático
Persona::imprimir();

// Llamar al método estático de suma
$resultado = Persona::suma(5, 3);
echo "La suma es: " . $resultado;
?>
