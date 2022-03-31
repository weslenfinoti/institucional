<div class="content py-4">
    <div class="row">
        <div class="col-5">
<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputNome">Nome</label>
      <input type="nome" class="form-control" id="inputNome" placeholder="Nome">
    </div>
  </div> 
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputNome">E-mail</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputEndereco">Endereço</label>
    <input type="text" class="form-control" id="inputEndereco" placeholder="Rua dos Bobos, nº 0">
  </div>
    <div class="form-group col-md-12">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCidade">Cidade</label>
      <input type="text" class="form-control" id="inputCidade">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEstado">Estado</label>
<select id="inputEstado" class="form-control">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="EX">Estrangeiro</option>
</select>
    </div>

  </div>
    <div class="form-group col-md-12">
      <br />
  <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </div>
</form>
        </div>
        <div class="col-7">
            <?php
            echo $mapscf;
            ?>
        </div>
</div>
</div>