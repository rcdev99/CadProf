<?php include __DIR__ . '/header.php'; ?>
<div class="container no-margin">
    <div class="row">  
        <!-- Carrousel -->
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="/public/assets/img/technology_03.jpg" class="d-block w-100 carrousel-img" alt="Sobre nós">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Soluções inteligentes</h5>
                        <p>Para um mundo novo recheado de tecnologia.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="/public/assets/img/technology_06.jpg" class="d-block w-100 carrousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Certificado de inovação e confiança</h5>
                        <p>Qualidade comprovada pelo mercado.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
    <!--Conteúdo Sobre nós-->
    <section class="content-about-us">
        <div class="clearfix">
            <div class="container">
                <h3 class="about-us text-center">Ainda não nos conhece ?</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="/public/assets/img/missao.jpg" class=img-thumbnail alt="Nos conheça">
                    </div>
                    <div class="col-md-9">
                        <h5>Estamos aqui para ...</h5>
                        <p class="about-us-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>      
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <h5>Nós ainda iremos ...</h5>
                        <p class="about-us-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>      
                    </div>
                    <div class="col-md-3">
                        <img src="/public/assets/img/visao.jpg" class=img-thumbnail alt="Nos conheça">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="/public/assets/img/valores.png" class=img-thumbnail alt="Nos conheça">
                    </div>
                    <div class="col-md-9">
                        <h5>Pois somos</h5>
                        <p class="about-us-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>      
                    </div>
                </div>        
            </div>
        </div>
    </section>
    
</div>

<!-- Footer -->
<?php include __DIR__ . '/footer.php'; ?>