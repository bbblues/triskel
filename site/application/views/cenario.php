<style media="screen">
<?php include 'css_sistema.php' ?>
</style>
<div class="row">
    <div class="col-md-4" id="superindice">
      <h3>CAPÍTULOS</h3>
      <ul class="capitulos">
        <li><a href="<?=site_url('cenario/introducao')?>">Introdução</a></li>
        <li><a href="<?=site_url('cenario/tireireann')?>">Tír Éireann</a></li>
      </ul>
      <hr>
      <h3 id="este_capitulo" class="este_capitulo">ESTE CAPÍTULO</h3>
      <div id="indice" class="indice"></div>
    </div>

    <div id="conteudo" class="col-md-8"><?php include $capitulo.'.php'?></div>


    <script type="text/javascript">
      window.onload = function () {

        function convertToSlug(Text){
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-')
                ;
        }

        var conteudoDiv = document.getElementById("conteudo");
        // var headers = conteudoDiv.querySelectorAll("h2, h3, h4");
        var headers = conteudoDiv.querySelectorAll("h2");
        var h1Element = conteudoDiv.querySelector('h1');
        var itens = "<ul>";
        var nivel = 2;
        var nivelul = 0;
        var diff = 0;
        for (var i = 0; i < headers.length; i++) {

          headers[i].id = convertToSlug(headers[i].innerHTML);
          headers[i].nivel = parseInt(headers[i].tagName.substring(1, 2));

          if (headers[i].nivel < nivel) {
            nivel = headers[i].nivel;
            diff ++;
            itens += "</ul></li><li><a href=#"+headers[i].id+">"+headers[i].innerHTML+"</a></li>";
          }
          else if (headers[i].nivel > nivel) {
            nivel = headers[i].nivel;
            diff --;
            itens += "<li><ul><li><a href=#"+headers[i].id+">"+headers[i].innerHTML+"</a></li>";
          }
          else {
            itens += "<li><a href=#"+headers[i].id+">"+headers[i].innerHTML+"</a></li>";
          }

          nivelul += diff;
          diff = 0;

        }
        for (var i = 0; i < nivelul.length; i++) {
          itens += "</ul>";
        }

        document.getElementById("indice").innerHTML = itens;
        document.getElementById("este_capitulo").innerHTML = h1Element.textContent;

      };

    </script>
