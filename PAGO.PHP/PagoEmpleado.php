<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-eqiv=" X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Pago de empleado</title>
    </head>
    <body>
        <header>
            <h1 id="centrado">PAGO DE EMPLEADO</h1>
        </header>
        <section>

        <table align="center">
            <form action="pago.php" method="post">
                <tr>
                    <td width="200">Emplado</td>
                    <td><input type="text" name="textEmpleado" id="" size="40"></td>
                </tr>
                    <tr>
                    <td width="200">Horas Trabajadas</td>
                    <td><input type="text" name="textHoras" id="" ></td>
                </tr>
                    <tr>
                    <td width="200">Tarifa por Horas</td>
                    <td><input type="text" name="texTarifa" id="" ></td>
                </tr>
                <tr>
                    <td width="200"></td>
                    <td>
                        <input type="submit"  value="Procesar">
                        <input type="reset"  value="Limpiar">
                    </td>
                </tr>
                <!-- codigo PHP--->
                 <?php
                 error_reporting(0);
                 $empleado = $_POST['textEmpleado'];
                 $horas = $_POST['textHoras'];
                 $tarifa = $_POST['texTarifa'];

                 // Realizar los calculos
                 $salarioBruto = $horas * $tarifa
                 $descuentoSeguroSalud = $salarioBruto * 0.12;
                 $descuentoAfp = $salarioBruto * 0.10;
                 $salarioNeto = $salarioBruto -$descuentoSeguroSalud - $descuentoAfp;
                 
                 ?>

                 <tr>
                    <td> Empleado</td>
                    <td><?php echo $empleado; ?> </td>
                 </tr>
                 <tr> 
                    <td>Horas Trabajadas</td>
                       <td><?php echo $horas;?></td>
                 </tr>
                  <tr> 
                    <td> Tarifa Horas </td>
                       <td><?php echo "$ ".number_format($tarifa, 2); ?></td>
                 </tr>
                   <tr> 
                    <td> Sueldo Bruto </td>
                       <td><?php echo "$ ".number_format($salarioBruto, 2); ?></td>
                 </tr>
                   <tr> 
                    <td>  Descuento Salud </td>
                       <td><?php echo "$ ".number_format($descuentoSeguroSalud, 2); ?></td>
                 </tr>
                   <tr> 
                    <td>  Descuento AFP </td>
                       <td><?php echo "$ ".number_format($descuentoAfp, 2); ?></td>
                 </tr>
                    <tr> 
                    <td>  Sueldo neto</td>
                       <td><?php echo "$ ".number_format($salarioNeto, 2); ?></td>
                 </tr>
                

</from>
        </table>
        </section>
    </body>
</html>