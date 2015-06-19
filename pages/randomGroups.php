<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>&Source Projects - Grupos Aleatorios</title>
    <?php include ("snippets/headers.php"); ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php include ("snippets/navbar-header.php"); ?>
            
            <?php include ("snippets/navbar-top-links.php"); ?>

            <?php include ("snippets/navbar-sidebar.php"); ?>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Generar Grupos Aleatorios</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informacion de los Grupos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Integrantes Por Grupo</label>
                                            <input id="sliderParticipantes" name="sliderParticipantes" type="range" value="2" min="2" max="30" step="1" />
                                            <p class="text-right"><h3><span class="label label-success"> <span id="valueRange" name="valueRange">2</span> Integrantes</span></h3></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Listado de Integrantes</label>
                                            <textarea class="form-control" rows="10"></textarea>
                                            <p class="help-block">Ingrese todos los participantes separados por un salto de linea (Enter).</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Archivo Integrantes</label>
                                            <input type="file">
                                            <p class="help-block">Seleccione el archivo que contiene a los participantes separados por un salto de linea.</p>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Generar</button>
                                        <button type="reset" class="btn btn-default">Reiniciar</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#sliderParticipantes").change(function() {
              $("#valueRange").html($(this).val());
            });
        });
    </script>


</body>

</html>
