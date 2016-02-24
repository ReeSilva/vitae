@extends('main.home')

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Vitae - Seu currículo online</h1>
                <hr>
                <p>Você ainda passa pelo processo de fazer um currículo? Acha um template, coloca no Word. Vai preencher, quebra o template todo, aí tem que arrumar tudo. Chato, né? O Vitae tá chegando, e vai facilitar a sua vida :)</p>
                <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a> -->
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Ah é? E como o Vitae fará isso por mim?</h2>
                    <hr class="light">
                    <p class="text-faded">Venha até nós. Se cadastre, escolha um template, preencha as suas informações e escolha uma URL. Feito? SHAZAM!, seu currículo tá pronto. Online, pro mundo todo ver, fácil de ser achado no Google, pronto para ser impresso. Pronto para ser mostrado, pronto para garantir o seu próximo emprego. Não é demais? :D</p>
                    <a href="http://reesilva.com" class="btn btn-default btn-xl" target="_blank">Veja um exemplo!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tudo pra você</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Fácil de fazer</h3>
                        <p class="text-muted">Cadastre-se, escolha um template, preencha seus dados, e escolha uma URL. Pronto :)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Mostre ao mundo</h3>
                        <p class="text-muted">Feito isso, pronto, seu currículo está pronto para ser exibido ao mundo, com a URL personalizada que você escolheu.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-share-alt wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Divulgue</h3>
                        <p class="text-muted">É sério. É o seu currículo, com a sua URL. Divulgue, mostre-se ao mundo. Exiba em entrevistas, mande em propostas de emprego. É SEU!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Seja contratado</h3>
                        <p class="text-muted">Vamos lá, você agora tem um currículo incrível, e feito POR VOCÊ e PRA VOCÊ. Conquiste as empresas, os empregadores, seja contratado, FIQUE RICO!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Fiquem de olho, novidades em breve! :D</h2>
                <h4>Se tudo der certo nossa primeira versão será lançada em 15/04. Em breve você poderá se cadastrar para saber de novidades :)</h4>
                <!-- <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a> -->
            </div>
        </div>
    </aside>

    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section> -->
@endsection
