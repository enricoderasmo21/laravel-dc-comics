<div id="header">

    <div id="inner-top-wrapper">
        <div id="inner-top" class="container-centered">
            <div>DC POWER VISA &#174;</div>
            <div>ADDITIONAL DC SITES &#9660;</div>
        </div>
    </div>

    <div class="container-centered">
    
        <nav>
    
            <div id="logo">
                <img src=" {{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo">
            </div>
    
            <div>
                <ul id="links-container">
                    @foreach($links as $link)
    
                    <li>
                        <a href="">{{ strtoupper($link) }}</a>
                    </li>
    
                    @endforeach
                </ul>
            </div>

            <div id="search">
                <span id="text">Search</span>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
    
        </nav>
    </div>

    <div id="jumbo">
        
    </div>

</div>

