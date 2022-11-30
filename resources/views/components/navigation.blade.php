<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="{{'/'}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt=""></a> <!-- logo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
        </button> <!-- navbar toggler -->

        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{'/'}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                    {{-- <ul class="sub-menu">
                        <li><a href="news.html">News</a></li>
                        <li><a href="news-details.html">News Details</a></li>
                    </ul> <!-- sub menu --> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div> <!-- navbar collapse -->
        <div class="navbar-social ">
            <a class="main-btn" href="#">GET IN TOUCH</a>
           
        </div>
        <div class="navbar-social mr-10 ml-20"> 
            
                 <select name="" id="" class="custom-select">
                    <option value="" disabled>Language</option>
                    <option value="">English</option>
                    <option value="">Swedish</option>
                 </select>
           
            {{-- <a class="" href="#"> <x-flag-1x1-se/> SE</a> 
            <a class="" href="#"> <x-flag-1x1-us/> EN</a> --}}
            {{-- <a class="" href="#">FR</a>
            <a class="" href="#">EN</a> --}}
        </div>
    </nav>
</div> <!-- navigation -->