<?

// ------------------------------------------------------------------------------------------------------------ //
// -- FORMULARIO ---------------------------------------------------------------------------------------------- //
// ------------------------------------------------------------------------------------------------------------ //
	
if($_GET['opt']=="formulario"){

	$site_conteudo.= '<a class="btn btn-default" href="./?menu='.$_GET['menu'].'" role="button" style="float:right; margin-top:20px;">Voltar</a>';

	$site_conteudo.= "<h2>Cadastro do Projetos</h2><br>";
	
	$site_conteudo.= '
		<div style="margin-right:-10px;">
			<form>
			
				<div class="panel panel-default">
					<div class="panel-heading">Categorias - Checkbox</div>
					<div class="panel-body">
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox1" value="option1"> Categoria de Exemplo 01
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox2" value="option2"> Categoria de Exemplo 02
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox3" value="option3"> Categoria de Exemplo 03
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox4" value="option4"> Categoria de Exemplo 04
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox1" value="option1"> Categoria de Exemplo 05
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox2" value="option2"> Categoria de Exemplo 06
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox3" value="option3"> Categoria de Exemplo 07
						</label>
						<label class="checkbox-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="checkbox" id="inlineCheckbox4" value="option4"> Categoria de Exemplo 08
						</label>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">Categorias - Radio</div>
					<div class="panel-body">
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox1" value="option1"> Categoria de Exemplo 01
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox2" value="option2"> Categoria de Exemplo 02
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox3" value="option3"> Categoria de Exemplo 03
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox4" value="option4"> Categoria de Exemplo 04
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox1" value="option1"> Categoria de Exemplo 05
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox2" value="option2"> Categoria de Exemplo 06
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox3" value="option3"> Categoria de Exemplo 07
						</label>
						<label class="radio-inline" style="width: calc(25% - 3px); margin:0px; padding-top:5px; padding-bottom:5px;">
							<input type="radio" id="inlineCheckbox4" value="option4"> Categoria de Exemplo 08
						</label>
					</div>
				</div>
			
			
				<div class="form-group" style="width:50%; float:left; padding-right:10px;">
					<label for="nome_completo">Nome Completo</label>
					<input type="text" class="form-control" id="nome_completo" placeholder="Email">
				</div>
				
				<div class="form-group" style="width:50%; float:left; padding-right:10px;">
					<label for="estado">Estado</label>
					<select class="form-control" id="estado">
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
					</select>
				</div>
				
				<div class="form-group" style="width:100%; float:left; padding-right:10px;">
					<label for="arquivo">Arquivo</label>
                    <input id="arquivo" class="file" type="file" data-show-preview="false">
                </div>
				
				<div class="form-group" style="width:100%; float:left; padding-right:10px;">
					<label for="resumo">Resumo</label>
					<textarea class="form-control" id="resumo" rows="10"></textarea>
				</div>
				
				<div class="form-group" style="width:100%; float:left; padding-right:10px;">
					<label for="descricao">Descrição</label>
					<textarea class="form-control" id="descricao" rows="10"></textarea>
				</div>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			
			<script>
			
				$(document).ready(function(){
			
					$("#arquivo").fileinput({
				        language: "pt-BR",
				        uploadUrl: "#",
				        allowedFileExtensions : ["jpg","png","gif"],
				    });
				
				    CKEDITOR.replace("descricao", {
						language: "pt-br",
						uiColor: "#DDDDDD",
						height: "400px",
						resize_enabled: false,
						toolbarGroups: [ { name: "basicstyles", groups: [ "basicstyles", "cleanup" ] }, { name: "colors", groups: [ "colors" ] }, { name: "paragraph", groups: [ "list", "indent", "blocks", "align", "bidi", "paragraph" ] }, { name: "tools", groups: [ "tools" ] }, { name: "clipboard", groups: [ "clipboard", "undo" ] }, { name: "document", groups: [ "mode", "document", "doctools" ] }, { name: "editing", groups: [ "find", "selection", "spellchecker", "editing" ] }, { name: "forms", groups: [ "forms" ] }, { name: "links", groups: [ "links" ] }, { name: "insert", groups: [ "insert" ] }, { name: "styles", groups: [ "styles" ] }, { name: "others", groups: [ "others" ] }, { name: "about", groups: [ "about" ] } ],
						removeButtons: "Save,NewPage,Preview,Print,Templates,Cut,Undo,Redo,Copy,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Superscript,Subscript,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,FontSize,ShowBlocks,About",
						removePlugins: "elementspath"
					});
				
				});
				
			</script>
			
		</div>
	';	
	
}

// ------------------------------------------------------------------------------------------------------------ //
// -- LISTA DE REGISTROS -------------------------------------------------------------------------------------- //
// ------------------------------------------------------------------------------------------------------------ //

if($_GET['opt']==""){
	
	$site_conteudo.= "<h2>Projetos</h2>";
	
	$site_conteudo.= '
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#">Ativos</a></li>
			<li role="presentation"><a href="#">Atrasados</a></li>
			<li role="presentation"><a href="#">Finalizados</a></li>
		</ul>
		
		<br>
		
		<form class="form-inline">
			<div class="form-group">
				<input type="text" style="width:300px;" class="form-control" id="exampleInputName2" placeholder="Buscar projeto">
			</div>
			<button type="submit" class="btn btn-default">Filtrar Registros</button>
			<a class="btn btn-success" href="./?menu='.$_GET['menu'].'&opt=formulario" role="button" style="float:right;">+ Cadastrar novo projeto</a>
		</form>
		
		<br>
		
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Projeto</th>
					<th>Data</th>
					<th width="80"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
				<tr>
					<td style="padding-top:12px;">21</td>
					<td style="padding-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td style="padding-top:12px;">21/21/2012</td>
					<td>
						<button type="button" class="btn btn-primary" style="padding:2px 7px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
						<button type="button" class="btn btn-danger" style="padding:2px 7px;"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin: 3px 0px -5px 0px;"></span></button>
					</td>
				</tr>
			</tbody>
		</table>
		
		<br>
	';
	
}