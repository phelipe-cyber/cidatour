<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cida Tour</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
 <!-- summernote -->
 <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery Mask Money -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>


</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="viagens" class="nav-link">Cadastro Viagens</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Cadastro</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cadastro Viagens</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">

              <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                      <!-- general form elements -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Dados da viagem</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="salvar_viagens.php" method="POST" enctype="multipart/form-data" >

                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Titulo:</label>
                              <input autofocus ="text" class="form-control" id="titulo" name="titulo"
                                placeholder="Titulo">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Descricao:</label>
                              <textarea id="descricao" name="descricao"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Valor:</label>
                              <input type="text" oninput="formatarInputComoMoeda()" class="form-control" id="valor" name="valor"
                                placeholder="Valor">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Custo:</label>
                              <input type="text" oninput="formatarInputComoMoedacusto()" class="form-control" id="custo" name="custo"
                                placeholder="Custo" >
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Foto:</label>
                              <textarea id="foto" name="foto"></textarea>
                            </div>
                           
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Confirmar cadastro</button>
                          </div>
                        </form>
                      </div>
                            <?php
                                include("conexao.php");
                                $select_viagens = "SELECT * FROM `viagens`";
                                $mysqli_query_viagens = mysqli_query($conn, $select_viagens);
                            ?>
                      <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tabela de Viagens Cadastradas</h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Titulo</th>
                                            <th>Descrição</th>
                                            <th>Foto</th>
                                            <th>Valor</th>
                                            <th>Custo</th>
                                            <th>Statua Viagem</th>
                                            <th>Data Criação</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $index = 1;
                                                while ($row = mysqli_fetch_assoc($mysqli_query_viagens)) {
                                                    
                                                ?>
                                                <tr>
                                                    <td><?php echo $index ?></td>
                                                    <td><?php echo $row['titulo'] ?></td>
                                                    <td><?php echo $row['descricao'] ?></td>
                                                    <td><?php echo $row['foto'] ?></td>
                                                    <td><?php echo $row['valor'] ?></td>
                                                    <td><?php echo $row['custo'] ?></td>
                                                    <td><?php echo $row['status_viagem'] ?></td>
                                                    <td><?php echo $row['data_criacao'] ?></td>
                                                </tr>
                                                
                                                <?php
                                                $index ++;
                                                }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->



          <!-- REQUIRED SCRIPTS -->

          <!-- jQuery -->
          <script src="plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap 4 -->
          <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- AdminLTE App -->
          <script src="dist/js/adminlte.min.js"></script>

          <!-- jQuery -->
          <script src="../../plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap 4 -->
          <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- Select2 -->
          <script src="../../plugins/select2/js/select2.full.min.js"></script>
          <!-- Bootstrap4 Duallistbox -->
          <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
          <!-- InputMask -->
          <script src="../../plugins/moment/moment.min.js"></script>
          <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
          <!-- date-range-picker -->
          <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
          <!-- bootstrap color picker -->
          <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
          <!-- Bootstrap Switch -->
          <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
          <!-- BS-Stepper -->
          <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
          <!-- dropzonejs -->
          <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
          <!-- AdminLTE App -->
          <script src="../../dist/js/adminlte.min.js"></script>

          <!-- Bootstrap 4 -->
          <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- jquery-validation -->
          <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
          <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
        <!-- Summernote -->
        <script src="../../plugins/summernote/summernote-bs4.min.js"></script>

        <script>
            $(function () {
                // Summernote
                $('#descricao').summernote()

            })

            $('#foto').summernote({
                toolbar: [
                    ['insert', ['picture']],
                ],
            });
        </script>

          <script>
             $(function () {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                    theme: 'bootstrap4'
                    })

                    $("#table").DataTable({
                    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    "buttons": ["csv", "excel","pdf"],
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": false,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                    }).buttons().container().appendTo('#tablerecebimento_wrapper .col-md-6:eq(0)');
                    
                });
          </script>

          <script>
            function formatarInputComoMoeda() {
                    const inputElement = document.getElementById('valor');
                    
                    const valorEntrada = inputElement.value.replace(/\D/g, ''); // Remove tudo que não for dígito (números)
                    const valorNumerico = parseFloat(valorEntrada) / 100; // Dividido por 100 para tratar centavos
                    const valorFormatado = valorNumerico.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                    
                    document.getElementById('valor').value = valorFormatado;

                }

          </script>
          <script>
            function formatarInputComoMoedacusto() {
                    const inputElement = document.getElementById('custo');
                    
                    const valorEntrada = inputElement.value.replace(/\D/g, ''); // Remove tudo que não for dígito (números)
                    const valorNumerico = parseFloat(valorEntrada) / 100; // Dividido por 100 para tratar centavos
                    const valorFormatado = valorNumerico.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                    
                    document.getElementById('custo').value = valorFormatado;

                }

          </script>
          
          <script>
            $(function () {
              
              //Datemask dd/mm/yyyy
              $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
              //Datemask2 mm/dd/yyyy
              $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
              //Money Euro
              $('[data-mask]').inputmask()
          
              //Date picker
              $('#reservationdate').datetimepicker({
                  format: 'L'
              });
          
              //Date and time picker
              $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
          
              //Date range picker
              $('#reservation').daterangepicker()
              //Date range picker with time picker
              $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                  format: 'MM/DD/YYYY hh:mm A'
                }
              })
              //Date range as a button
              $('#daterange-btn').daterangepicker(
                {
                  ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  startDate: moment().subtract(29, 'days'),
                  endDate  : moment()
                },
                function (start, end) {
                  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
              )
          
              //Timepicker
              $('#timepicker').datetimepicker({
                format: 'LT'
              })
          
              //Bootstrap Duallistbox
              $('.duallistbox').bootstrapDualListbox()
          
              //Colorpicker
              $('.my-colorpicker1').colorpicker()
              //color picker with addon
              $('.my-colorpicker2').colorpicker()
          
              $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
              })
          
              $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
              })
          
            })
           

          </script>

<script>
    $(function () {
              $.validator.setDefaults({
                submitHandler: function () {
                  alert( "Form successful submitted!" );
                }
              });
              $('#quickForm').validate({
                rules: {
                  titulo: {
                    required: true,
                    titulo: true,
                  },
                  descricao: {
                    required: true,
                    descricao: true,
                  },
                  valor: {
                    required: true,
                    valor: true,
                  },
                  custo: {
                    required: true,
                    custo: true,
                  },
                  foto: {
                    required: true,
                    foto: true,
                  },
                  data_criacao: {
                    required: true,
                    data_criacao: true,
                  },
                  
                  terms: {
                    required: true
                  },
                },

                messages: {
                  titulo: {
                    required: "O Titulo é obrigatorio",
                    titulo: "Por favor digitar o Titulo"
                  },
                  descricao: {
                    required: "A descricao é obrigatorio",
                    descricao: "Por favor digitar a Descrição"
                  },
                  valor: {
                    required: "O valor é obrigatorio",
                    valor: "Por favor digitar o seu Valor"
                  },
                  custo: {
                    required: "O custo é obrigatorio",
                    custo: "Por favor digitar o Custo"
                  },
                  foto: {
                    required: "A foto é obrigatorio",
                    foto: "Por favor inserir a foto"
                  },
                 
                  terms: "Por favor aceitar os termos"
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                  error.addClass('invalid-feedback');
                  element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                  $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                  $(element).removeClass('is-invalid');
                }
              });
            });
            
</script>

        </body>

</html>