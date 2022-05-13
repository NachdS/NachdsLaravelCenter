 <!-- <div class="wrapper _bg4586 _new89 index-content"> -->
 @extends('public_interface.layout_public_interface')
 @section('content_public')
     <div class="_215cd2">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="back_link">
                         <a href="{{ url('/index') }}" class="hde151">Retour Vers Accueil</a>
                     </div>
                     <div class="course_tabs margin-top-tabs">
                         <nav>
                             <div class="nav nav-tabs tab_crse  justify-content-center">
                                 <a class="nav-item nav-link active" href="{{ url('/contact_us') }}">Contact Us</a>
                             </div>
                         </nav>
                     </div>
                     <div class="title129">
                         <h2>Restez en contact avec nous</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <div class="wrapper _bg4586 _new89 index-content">

         <div class="contact1256">
             <div class="container">
                 @include('global_common/bloc_menuicon')
                 <div class="row">

                     <div class="col-lg-8">
                         <div class="contact_map">
                             <div style="width: 700px;position: relative; margin-top: 20px;">
                                 <iframe width="700px" height="440"
                                     src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Incubateur%20de%20l%5C'ISSAT%20de%20Sousse%20cit%C3%A9%2C%20Taffala%204003%20+(Nachds)&amp;ie=UTF8&amp;t=k&amp;z=10&amp;iwloc=B&amp;output=embed"
                                     frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                 </iframe>
                                 <div
                                     style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                                     <small style="line-height: 1.8;font-size: 2px;background: #fff;">
                                         Powered by <a href="http://www.googlemapsgenerator.com/pt/">googlemapsgen (pt)</a>
                                         & <a
                                             href="https://australiarealmoneypokies.com/">https://australiarealmoneypokies.com/</a>
                                     </small>
                                 </div>
                                 <style>
                                     #gmap_canvas img {
                                         max-width: none !important;
                                         background: none !important
                                     }

                                 </style>
                             </div><br />
                         </div>
                     </div>

                     @if (@$allcontacts)
                         <div class="col-lg-4">
                             <div class="contact_info">
                                 <div class="checkout_title">
                                     <h4> Details contact</h4>
                                     <img src="../images/line.svg" alt="">
                                 </div>
                                 <ul class="contact_list_info">
                                     <li>
                                         <div class="txt_cntct"><span class="cntct_895">Adresse principale :</span>
                                             <p>
                                                 {{ @$allcontacts->adresse }}
                                             </p>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="txt_cntct"><span class="cntct_895"></i>Email
                                                 Adresse :</span>
                                             <p><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                                     class="__cf_email__"
                                                     data-cfemail="eaa3848c85aa8f8e9f9e9f9e999a869f99">{{ @$allcontacts->email }}
                                             </p>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="txt_cntct"><span class="cntct_895">Numéro de téléphone 1:</span>
                                             <p>{{ @$allcontacts->telephone1 }}</p>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="txt_cntct"><span class="cntct_895">Numéro de téléphone 2:</span>
                                             <p>{{ @$allcontacts->telephone2 }} </p>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="txt_cntct"><span class="cntct_895">Fax :</span>
                                             <p>{{ @$allcontacts->fax }} </p>
                                         </div>
                                     </li>
                                 </ul>
                                 <div class="edututs_links_social">
                                     <ul class="tutor_social_links">
                                         <li><a href={{ asset(@$allcontacts->facebook) }} class="fb"><i
                                                     class="fab fa-facebook-f"></i></a></li>
                                         <li><a href={{ asset(@$allcontacts->linkedin) }} class="ln"><i
                                                     class="fab fa-linkedin-in"></i></a></li>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                     @endif
                 </div>


                     <div class="col-lg-12 mt-50">
                         <h2 class="st_title"><i class="uil uil-comment-info-alt"></i> Soumettez votre avis </h2>
                         @if (@Session::has('success'))
                             <div class="alert alert-success alert-dismissible"><button type="button"
                                     class="close">&times;</button>{{ Session::get('success') }}</div>
                         @elseif(Session::has('failed'))
                             <div class="alert alert-danger alert-dismissible"><button type="button"
                                     class="close">&times;</button>{{ Session::get('failed') }}</div>
                         @endif
                        
                        @if(Session::has('message-sent'))
                        <div class="alert alert-success" >
                            {{ Session::get('message-sent') }}
                        </div>
                        @endif

                         <div class="row">
                             <div class="col-lg-12 col-md-8">
                                <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                                    @csrf
                                 <div class="ui search focus mt-30">
                                     <div class="ui left icon input swdh11 swdh19">
                                       
                                         <input type="text" name="name" id="name" class="form-control"
                                             placeholder="Nom & Prénom">
                                        </div>
                                     
                                 </div>
                                 <div class="ui search focus mt-30">
                                    <div class="ui left icon input swdh11 swdh19">
                                       
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                       </div>
                                    
                                </div>
                                <div class="ui search focus mt-30">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Numéro de téléphone">
                                       </div>
                                    
                                </div>
                                 <div class="ui search focus mt-30">
                                     <div class="ui form swdh30">
                                        <div class="form-group">
                                         <div class="field">
                                             <textarea name="msg" id="emailBody" class="form-control" placeholder="Message"></textarea>
                                         </div>
                                         </div>
                                     </div>
                                 </div>
                                 <button class="save_btn" style="background-color: #ed2a26;" type="submit">Envoyer</button>
                                </form>
                             </div>
                         </div>
                     </div>


             </div>
         </div>
     </div>
 @endsection
