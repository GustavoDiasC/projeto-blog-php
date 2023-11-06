<?php
include_once('templates/header.php');
?>
<h1 id="title-container">Contato</h1>
<p id="title-container">Deixe aqui sua mensagem ou sugestão de assuntos <br> para serem abordados  em nosso blog!</p>
<div class="form-container">
    <form  action="" method="post">
        <fieldset class="space-bottom">
            <label class="space-label" for="nome">Nome: </label>
            <input type="text" name="nome">
        </fieldset>
        <fieldset class="space-bottom">
            <label class="space-label" for="email">Email: </label>
            <input type="email" name="email">
        </fieldset>
        <fieldset class="space-bottom">
            <div class="label-text">
                <label  for="mensagem">Mensagem:</label>
            </div>
            <textarea class="box-text" id="mensagem" name="mensagem" rows="5" cols="30" placeholder="Deixe aqui sua mensagem..."></textarea>
        </fieldset>
        <div class="btn-form">
          <button class="btn-style"  type="submit" value="Enviar" name="enviar">Enviar</button>  
        </div>
    </form>
</div>
<?php
include_once('templates/footer.php')
?>