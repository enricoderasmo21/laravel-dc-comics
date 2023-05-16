<div id="footer">

    <section class="sec-one">
        <div class="container-centered">
            <div class="inner-sec-one">

                <div class="link-container">
                    @foreach($footerLinks as $link)
                    <div >
                        <h3 class="title"> {{ strtoupper($link['title']) }} </h3>
                    
                        <ul class="link-list">
                            @foreach($link['links'] as $item)
                            <li  class="link">
                                {{ $item }}  
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>

                <div class="img-container">
                    <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sec-two">
        <div class="container-centered">
            <div class="sec-two-inner">

                <button id="sign-btn">SIGN-UP NOW!</button>
                
                <div class="inner-right">
                    <div class="follow-us">
                        FOLLOW US
                    </div>
                    <div class="icons-container">
                        @foreach($socialIconsList as $icon)
                        <div class="img-container">
                            <img src="{{Vite::asset($icon)}}" alt="">
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>