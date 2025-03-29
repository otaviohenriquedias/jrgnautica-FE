<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/listar_fabricantes.js"></script>
<script src="js/listar-captador.js"></script>
<script src="js/consulta_barcos_disponiveis.js"></script>
<script src="js/lista_propulsor.js"></script>
<script src="js/lista-marina.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Disponíveis</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Embarcações </b>Disponíveis</h1>
    </div>
</div>
<form method="post" id="form-consulta-embarcacao">
    <div class="panel panel-default">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Fabricante</label>
                        <select name="fabricantes-barcos" class="form-control">
                            <option value="-1">Todos</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" name="disponivel-tipo">
                            <option value="-1">Todos</option>
                            <option value="1">HT</option>
                            <option value="2">Fly</option>
                            <option value="3">Capota</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Combustível</label>
                        <select class="form-control" name="disponivel-combustivel">
                            <option value="-1">Todos</option>
                            <option value="0">Gasolina</option>
                            <option value="1">Diesel</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Ano</label>
                        <select class="form-control" name="disponivel-ano">
                            <option value="-1">Todos</option>
                            <option value="1990">1990</option>
                            <option value="1900">1991</option>
                            <option value="1991">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tamanho (Min)</label>
                                    <input class="form-control" name="tamanho-min-consulta" placeholder="Tamanho Mín.">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label>Tamanho(Máx)</label>
                                    <input class="form-control" name="tamanho-max-consulta" placeholder="Tamanho Máx.">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Potência</label>
                        <select class="form-control" name="disponivel-potencia">
                            <option value="-1">Todos</option>
                            <option value="100">Até 100 HP</option>
                            <option value="200">Até 200 HP</option>
                            <option value="300">Até 300 HP</option>
                            <option value="400">Até 400 HP</option>
                            <option value="500">Até 500 HP</option>
                            <option value="600">Até 600 HP</option>
                            <option value="700">Até 700 HP</option>
                            <option value="800">Até 800 HP</option>
                            <option value="900">Até 900 HP</option>
                            <option value="1000">Até 1000 HP</option>
                            <option value="1500">Até 1500 HP</option>
                            <option value=">1500">Acima 1500 HP</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Horas</label>
                        <select class="form-control" name="disponivel-horas">
                            <option value="-1">Todos</option>
                            <option value="0"> 0 Horas</option>
                            <option value="200">Até 200 horas</option>
                            <option value="400">Até 400 horas</option>
                            <option value="600">Até 600 horas</option>
                            <option value="800">Até 800 horas</option>
                            <option value="1000">Até 1000 horas</option>
                            <option value="1200">Até 1200 horas</option>
                            <option value="1400">Até 1400 horas</option>
                            <option value="1600">Até 1600 horas</option>
                            <option value=">1600">Acima 1600 horas</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Off Market?</label>
                        <select class="form-control" name="disponivel-market">
                            <option value="-1">Todos</option>
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Situação</label>
                        <select class="form-control" name="disponivel-situacao">
                            <option value="-1">Todos</option>
                            <option value="0">Disponível</option>
                            <option value="1">Vendida</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Captado por</label>
                        <select class="form-control" name="captador-barco">
                            <option value="-1">Todos</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                            <label>Tipo de propulsor</label>
                            <select class="form-control" required name="tipo-propulsor">
                                <option value="-1">Todos</option>
                            </select>
                        </div>
                    </div>
                <div class="col-sm-12">
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Marina</label>
                                <select class="form-control" required name="marina-bem">
                                    <option value="N/D">Todas</option>
                                    <option value=0>DEFINIR DEPOIS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Valor (Min)</label>
                                <input class="form-control" name="preco-min-consulta" placeholder="R$ Mín.">
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                                <label>Valor (Máx)</label>
                                <input class="form-control" name="preco-max-consulta" placeholder="R$ Máx.">
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Digite o modelo" name="disponivel-modelo" /><span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-md" id="btn-chat">Pesquisar</button>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        </form>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="panel-heading">
                    Resultado da pesquisa
                </div>
                <div class="panel-body articles-container" id="retorno-busca">

            </div>
            </div>
        </div>
    </div> 
 
    

    
            