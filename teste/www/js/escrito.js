$(document).ready(function() {
				$("#entrar").click(function() {
					var nome = $("#nome").val();
					var senha = $("#senha").val();
					var dataString = "nome=" + nome + "&senha=" + senha + "&insert=";
					if ($.trim(nome).length > 0 & $.trim(senha).length > 0) {
						$.ajax({
							type: "POST",
							//url: "http://localhost/teste/www/php/insert.php",
							url: "https://flaviobcctestebd.000webhostapp.com/insert.php",
							data: dataString,
							crossDomain: true,
							cache: false,
							success: function(data) {
								if(data.substring(12,13) == "1"){
									alert(data);
									window.location.replace("paginas/inicioHospital.html");
								}
								if(data.substring(12,13) == "0"){
									window.location.replace("paginas/inicioHospital.html");
								}							
							}
						});
					}
					return false;
				});
				$(document).ready(function() {
					//var url = "http://localhost/teste/www/php/selectMed.php";
					var url = "https://flaviobcctestebd.000webhostapp.com/selectMed.php";
					$.getJSON(url, function(result) {
						console.log(result);
						var i=0;
						$.each(result, function(i, field) {
							i++;
							var id = field.id;
							var nome = field.nome;
							var especialidade = field.especialidade;
							var telefone = field.telefone;
							$("#ptabela").append("<tbody><tr><td id='id"+i+"'>"+id+"</td><td>"+nome+"</td><td>"+especialidade+"</td><td>"+telefone+"</td><td><a class='item' href='operacaoHospital.html?id="+id+"&nome="+nome+"&especialidade="+especialidade+"&telefone="+telefone+"'><button type='button' id='btn"+i+"' class='btn btn-dark'>Contratar</button></a></td></tr></tbody>");
						});
					});
				});
			});