<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    .parallax {
        direction: rtl;
        background-position-x: right center;
        background-repeat:no-repeat;
        background-size: 300px;
        padding-top: -10em;
    }
    #contact {
        text-align:right;
        margin-top: -254px;
        padding-left: 50px;
        background-color: transparent !important;
    }
    .concontainer{
        background: #efeff0;
        border-radius: 10px;
        box-shadow: 0px 15px 10px -15px #333;
        padding: 25px;
        margin: 10vh 10vw;
        background-color: transparent !important;
    }
    #contact-input {
        background: #efeff0;
        border: none;
        border-bottom: 1px solid black;

    }
    #contact-input:hover {
        cursor: pointer;
        background: #f3f4f6;
    }
    .bi {
        font-size: 2vw;
        margin-right: 1vw;
    }
    .bi-telephone, .bi-phone {
        font-size: 20px;
    }
    .section-subheading2 {
        font-style: italic;
        font-size: small;
    }
    .cont1 {
        font-style: normal;
        font-size: 20px;
    }
    .conspan {
        font-weight: bold;
    }
    .bi-geo-alt, .bi-headset{
        font-weight: bold;
    }
    .section-subheading2 {
        border-bottom: 1px solid #babbbd;
        padding-bottom:10px;
        margin-bottom:75px;
        display:inline-block;
    }
</style>
</head>
<body>

<section class="content-section-e parallax" data-stellar-background-ratio="0.5" id="contact">
    <div class="container concontainer">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-heading wow fadeInUp" style="visibility: visible; color:rgb(77,142,233);"> ابق على تواصل</h2>
                <span class="separator2npm i bootstrap-icons"></span>
                <p class="section-subheading2">لا تتردد بالاتصال بنا بحال كان لديك أي استفسار</p>
            </div>
            <div class="col-md-4 contact-info">
                <!--Contact Info-->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-12">
                        <h4><i class="bi bi-geo-alt cont1">   العنوان</i></h4>
                        <address>حمص - جامعة البعث</address>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-12">
                        <h4><i class="bi bi-headset cont1">  خدمة العملاء</i></h4>
                        <address><i class="bi bi-phone"></i>099999999</address>
                        <address><i class="bi bi-telephone"></i>031/1234</address>
                    </div>

                    <!--Social links-->
                    <div class="col-md-12 social-contact wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://t.me/" target="_blank"><i class="bi bi-telegram"></i></a>
                        <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="mailto:pharmasyria41@gmail.com"><i class="bi bi-envelope"></i></a>
                    </div><!--/.social-contact-->
                </div>
            </div>

            <div class="col-md-8">
                <!--Contact Form-->
{{--
                <div class="alert alert-success hidden" id="MessageSent">
                    We have received your message, we will contact you very soon.
                </div>
                <div class="alert alert-danger hidden" id="MessageNotSent">
                    Oops! Something went wrong please refresh the page and try again.
                </div>
--}}
                <form method="post" id="contact-form" class="contact-form" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only" for="name">الاسم</label>
                                <input type="text" name="name" id="contact-input" placeholder="الاسم" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only" for="email">الإيميل</label>
                                <input type="email" name="email" id="contact-input" placeholder="الإيميل" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="sr-only" for="message"> النص </label>
                                <textarea name="message" id="contact-input" rows="8" placeholder="النص" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-theme btn-block btn-contact" data-toggle="modal" data-target="#exampleModal">
                                إرسال
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                تم الإرسال بنجاح
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>


