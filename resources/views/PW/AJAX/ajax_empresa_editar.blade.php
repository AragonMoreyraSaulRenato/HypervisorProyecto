<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EDITAR EMPRESA</title>
</head>
<body>
    {!!Form::open(array('url' => 'ajax/edita_empresa/'.$empresa->id, 'method' => 'PUT','autocomplete' => 'off'))!!}

    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('rfc',$empresa->rfc)!!}
    <br>

    {!! Form::Label('Razón Social ')!!}
    <br>
    {!! Form::text('razon_social',$empresa->razon_social)!!}
    <br>
    {!! Form::Label('Direccion Fiscal: ')!!}
    <br>
    {!! Form::text('direccion_fiscal',$empresa->direccion_fiscal)!!}
    <br>
    {!! Form::Label('Apoderado Legal: ')!!}
    <br>
    {!! Form::text('apoderado_legal',$empresa->apoderado_legal)!!}
    <br>

    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::text('telefono',$empresa->telefono)!!}
    <br>
    {!! Form::Label('Activo: ')!!}
    <br>
    {!! Form::text('activo',$empresa->activo)!!}
    <br>

    {!!Form::submit('Actualizar', ['content' => '<span>Actualizar</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>