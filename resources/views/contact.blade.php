@extends('layouts/indexLayout')
@section('title', 'Contact')
@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Contact US</h1>
                            <p>Stay close</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="map-section">
        <div class="container">
            <div id="gmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.1200695927364!2d-75.51553833516526!3d10.412037468660728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef6259afece5ee7%3A0xcd4520aa38b81aae!2sMar%C3%ADa%20Auxiliadora%2C%20Cartagena%20de%20Indias%2C%20Provincia%20de%20Cartagena%2C%20Bol%C3%ADvar!5e0!3m2!1ses!2sco!4v1647977815619!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-info">
                <h2>Contacts</h2>
                <address>
                E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                Phone: +1 (123) 456 7890 <br> 
                Fax: +1 (123) 456 7891 <br> 
                </address>

                <h2>Address</h2>
                <address>
                Unit C2, St.Vincent's Trading Est., <br> 
                Feeder Road, <br> 
                Bristol, BS2 0UY <br> 
                United Kingdom <br> 
                </address>
            </div>
        </div>
    </section> <!--/#map-section-->      
    
@stop