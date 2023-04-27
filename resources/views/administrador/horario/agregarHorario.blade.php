<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet"  type="text/css" href="{{ asset('/css/horario.css') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiador Springs</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Theme style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini" style="background-color:#D9D9D9 ">
        <div class="wrapper">
            <?php include('../../../layout/admin/menu.php');?>

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background-color:#D9D9D9; padding: 20px;">
                <div class="container-xl">
                <div class="table-title">
                    <div class="row">
                            <div class="col-sm-8"><h2><b>TITULO HORARIO</b></h2></div>
                    </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                            <!--ACA PEGAR FORMULARIO O LO QUE SEA DE HORARIO-->
                            <div class="tituloc">
                                <h1>Registrar Horario</h1>
                            </div>
                                    <section class="borde-formulario">
                                    <div class=" titulob">
                                        <h2> Ingrese el horario </h2>
                                    </div>
                                    <!-- Form -->
                                    <div class="formulario">
                                        <form action="/parqueocreado" method="POST" role="form">    
                                        {{csrf_field()}}
                                        <div class="fechai">
                                            <label class = "lfechai" for="">Fecha de inicio</label>
                                            <input type="date" class="cfechai" name="fecha_inicio" placeholder="Ingrese la fecha de inicio"></input>
                                        </div>
                                        <div class= "fechac">
                                            <label for="">Fecha de cierre</label>
                                            <input type="date" class="cfechac" name="fecha_fin" placeholder="Ingrese la fecha de cierre"></input>
                                        </div> 
                                        <div class="horaa">
                                            <label for="">Horario de Apertura</label>
                                            <input type="time" class="choraa" name="hora_inicio" placeholder="Ingrese la hora de apertura de apertura"></input>
                                        </div>
                                        <div class="horac">
                                            <label for="">Horario de Cierre</label>
                                            <input type="time" class="chorac" name="hora_fin" placeholder="Ingrese la hora de cierre"></input>
                                        </div>
                                        <button type="submit"  class="botong">Guardar</button>
                                        <button type="button" class="botonc">Cancelar</button>
                                        </form>
                                    </div>
                                    <img class= "parqueo" src="{{ asset('/img/parqueo.png') }}" >
                            </section>
                            <div class="auton">
                                <img class = "auton" src="{{ asset('/img/auton.png') }}" alt="">
                            </div>
                            <!--termina aqui-->
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.content-wrapper -->
        </div>
        <?php include('../../../../resources/layout/admin/footerlinks.php');?>
    </body>
</html>

<script>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap%27');
*{
    margin: 0%;
    padding: 0%;
}
body{
    background-color: #d9d9d9;
    font-family:"Poppins", sans-serif ;
}
.auton{
    position: absolute;
    width: 60%;
    height: 55%;
    margin: auto;
    top: 45%;
    left: 40%;
}
.parqueo{
    position: absolute;
    width: 25%;
    margin: auto;
    top: 20%;
    left: 60%;
    
}
.borde-formulario{
    margin: auto;
    margin-top: 8%;
    margin-left: 30%;
    position:absolute;
    width: 60%;
    height: 50%;
    background-color: #324855;
    border-radius: 10px;
}
.formulario{
    margin: auto;
    margin-top: 3%;
    width: 98%;
    height: 90%;
    left: 41%;
    background: #fafafa;
    border-radius: 10px;
}

.tituloc{
position: absolute;
width: 50%;
height: 50%;
left: 25%;
top: 10%;
font-family: 'Poppins';
font-style: normal;
font-size: 15px;
line-height: 45px;
color: #324855;
}

.botong{
cursor: pointer;
box-sizing: border-box;
position: absolute;
width: 12%;
height: 6%;
left: 2%;
top: 87%;
background: #324855;
border: 1px solid #000000;
border-radius: 8px;
color: #FDF7F7;
}
.botonc{
cursor: pointer;
box-sizing: border-box;
position: absolute;
width: 12%;
height: 6%;
left: 15%;
top: 87%;
background: #324855;
border: 1px solid #000000;
border-radius: 8px;
color: #FDF7F7;
}
.fechai{
    margin: auto;
    margin-left: 2%;

}
.fechac{
    margin: auto;
    margin-left: 2%;
    margin-top: 2%;
}
.horaa{
    margin: auto;
    margin-left: 2%;
    margin-top: 2%;
}
.horac{
    margin: auto;
    margin-left: 2%;
    margin-top: 2%;
}
.cfechai{
    margin: auto;
    margin-left: 10%;
}
.cfechac{
    margin: auto;
    margin-left: 9.8%;
}
.choraa{
    margin: auto;
    margin-left: 5%;
}
.chorac{
    margin: auto;
    margin-left: 8%;
}
.titulob{
    position: absolute;
    width: 500px;
    height: 30px;
    left: 2%;
    bottom: 94%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 38px;
    color: #FFFFFF;
}
.icono{
    float: right;
    font-size: 16px;
}
.nav{
box-sizing: border-box;
position: absolute;
width: 20%;
height: 100%;
left: -5px;
top: 0px;
background: #2A4858;

}
.opciones ul{
    width: 75%;
    background: #F9FA85;
    list-style: none;
    margin: 50% 35px;
    border-radius: 15px;
}
.opciones ul li{
   border-bottom: 5px solid #2A4858; 
   border-radius: 5px;
}
.opciones ul li a{
    color: #020202;
    text-decoration: none;
    padding: 10px;
    font-size: 15px;
    display: block;
    border-radius: 10px;
    text-align: left;
    margin-left: 10%;
}
.opciones ul li a:hover{
    background: #9AD287;
    border-radius: 10px;
}
.opciones ul .subhorario{
    margin: 0%;
    background:#395261;
    width: 100%;
    display: none;
}

.opciones ul .subhorario li a{
    font-size: 13px;
    padding-left: 10%;
 
}
/js/
.opciones ul .activo{
    display: block;
}


header{
    width: 1100px;
    color: #1231;
    margin: 300px;
}
@media  (min-width: 720px) and (max-width: 1080px){
    
}
</script>