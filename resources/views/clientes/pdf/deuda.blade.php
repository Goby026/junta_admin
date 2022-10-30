<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deuda</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

        #header{
            display: flex;
            margin-top: -20px;
        }

        #tabla{
            border-bottom: 1px solid;
        }

        #content{
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Estado de cuenta: </h1>{{ $cliente->nombres }} {{ $cliente->apellidos }}
    </div>
    <div id="content">

        <table>
            <thead id="tabla">
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Periodo</th>
                    <th>Total</th>
                    <th>Saldo</th>
                    <th>Vencimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $deudas as  $deuda)
                <tr>
                  <th scope="row">{{ $deuda->codigo }}</th>
                  <td>{{ $deuda->descripcion }}</td>
                  <td>{{ $deuda->periodo }}</td>
                  <td>{{ $deuda->total }}</td>
                  <td>{{ $deuda->saldo }}</td>
                  <td>{{ $deuda->vencimiento }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td><h3>Total: S/ {{ $deuda_total }} </h3></td>
                </tr>
            </tbody>
          </table>
    </div>

</body>
</html>
