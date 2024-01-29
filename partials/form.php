<form action="../form.php" class="contact-form" method="post">
    <div class="row">
    <div class="col-md-6">
        <input type="text" name="name" id="name" placeholder="Nombre" required />
    </div>
    <div class="col-md-6">
        <input type="email" name="email" id="email" placeholder="Correo electrónico" required />
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <input type="text" name="phone" id="phone" placeholder="Teléfono" required />
    </div>
    <div class="col-md-6">
        <input type="text" name="subject" id="email" placeholder="Asunto" required />
    </div>
    </div>
    <div class="row">
    <div class="col-12">
        <textarea name="message" id="message" placeholder="Escriba su mensaje" rows="5"></textarea>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="button text-center rounded-buttons">
            <button type="submit" class="btn primary-btn rounded-full">
                Enviar
            </button>
        </div>
    </div>
    </div>
</form>