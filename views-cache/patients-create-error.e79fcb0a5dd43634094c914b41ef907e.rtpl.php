<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Paciente</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/paciente/create" method="post">
          <div class="box-body">
              <p class="login-box-msg " style="color:red">Paciente já cadastrado.</p>
            <div class="form-group">
              <label for="desperson">Nome</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
            </div>
            <div class="form-group">
              <label for="deslogin">Hospital</label>
              <input type="text" class="form-control" id="hospital" name="hospital" placeholder="Digite o Hospital">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="enabled" value="1">Paciente Ativo
              </label>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success" style="background-color:#ff8a73!important;">Cadastrar</button>
            &emsp;
            <a href="/pacientes" class="btn btn-danger">Voltar</a>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->