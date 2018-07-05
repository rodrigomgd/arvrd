<section class="container-fluid pt-5 pb-5 section-bg-1">
      <div class="container text-center">
        <div class="row d-block">
          <div class="col-md pt-5">
            <img src="img/ramo.png"  class="img-fluid" alt="">
            <h2>CONTATO</h2>   
            <hr class="hr-25"><span class="subtitle">ENTRE EM</span> <hr class="hr-25">
            <form class="form-bordered" id="contact-form" action="mail.php" method="post">
            <div class="row mt-5">
                    <div class="col-md">
                      <input name="name" class="form-control mb-4" type="text" placeholder="NOME" required>
                      <input name="sub" class="form-control mb-4" type="text" placeholder="ASSUNTO" required>
                      <input name="phone" id="phone" class="form-control mb-4" type="text"   placeholder="TELEFONE Ex: (55) 91234-5678" required>
                      <input name="email" class="form-control mb-4" type="email"  placeholder="E-MAIL" required>
                    </div>
                    <div class="col-md">
                      <textarea id="message" class="form-control" name="message" rows="8" placeholder="MENSAGEM" required></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-danger btn-lg mt-3 pr-3 pl-3">ENVIAR</button>
                  <p id="return-message" class="lead text-danger"></p>
                </form>
            </div>
        </div>
      </div>
    </section>