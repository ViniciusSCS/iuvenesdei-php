
<section id="oracao" class="contact-parlex">
    <div class="parlex-back">
        <div class="container">
            <div class="row mrgn30">                        
                <form method="post" action="action/emailSMTP.php" name="validate" id="contactfrm" role="form">
                    <div class="col-md-9">
                        <h3 id="titulo" style="font-size: 30px;">Nos deixe seu pedido de ora&ccedil;&atilde;o!</h3><br>
                        <div class="form-group">
                            <label for="nome" id="titulo" style="font-size: 25px;">Nome</label>
                            <input type="text" class="form-control" name="nome" id="tituloEmail" placeholder="Nome" style="font-size: 15px;" title="Por favor insira seu nome" >
                            <p class="texto-email">*OBS: Nome n&atilde;o obrigat&oacute;rio</p>
                        </div>
                        <div class="form-group">
                            <label for="email" id="titulo" style="font-size:25px;">E-mail</label>
                            <input type="email" class="form-control" name="email" id="tituloEmail" placeholder="E-mail" style="font-size: 15px;" title="Por favor insira um endereço de e-mail válido">
                            <p class="texto-email">*OBS: E-mail n&atilde;o obrigat&oacute;rio</p>
                        </div>
                        <div class="form-group">
                            <label for="msg" id="titulo" style="font-size: 25px;">Pedido de ora&ccedil;&atilde;o</label>
                            <textarea name="msg" class="form-control" id="tituloEmail" cols="3" style="font-size: 15px;" placeholder="Deixe sua ora&ccedil;&atilde;o..." title="Por favor, digite a sua mensagem (pelo menos 10 caracteres )" required></textarea>
                            <button name="enviar" type="submit" class="btn btn-lg btn-primary" id="enviar" style="font-size: 15px;">Enviar</button>                                    
                        </div>
                        <div class="result"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>