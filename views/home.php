<div class="content-wrapper">
    <div class="content-header">        
    </div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">    
                <div class="card card-primary">
                            <div class="card-header">
                            <h3 class="card-title">Dados Pessoais</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="salvar_dados.php" method="POST" enctype="multipart/form-data" >
                            <div class="card-body">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input autofocus ="text" class="form-control" id="nome" name="nome"
                                    placeholder="Nome">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Sobrenome:</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                                    placeholder="Sobrenome">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">RG:</label>
                                <input type="text" class="form-control" id="rg" name="rg"
                                    placeholder="RG">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">CPF:</label>
                                <input type="text" class="form-control" id="CPF" name="cpf"
                                    placeholder="CPF" data-inputmask="'mask': ['999.999.999-99']" data-mask>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                    placeholder="Telefone" data-inputmask="'mask': ['(99) 9999-9999', '(99) 99999-9999']" data-mask>
                                </div>
                                <div class="form-group">
                                <label>Data de Nascimento:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" name="datanascimento" id="datanascimento" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/aaaa">
                                </div>
                                <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" name="email" itemid="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email">
                                </div>
                            
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Confirmar cadastro</button>
                            </div>
                            </form>
                        </div>
                </div>
            </div>
    </div>
</div>