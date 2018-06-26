 <header>
            <section class="head2">
                <div class="texture-overlay"></div>
                <div class="container">
                    <div class="row nav-wrapper">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                            <a href="{{url('/')}}"><!--<img src="img/logo-white.png" alt="Boxify Logo">-->Bank</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
                            <p>MORE</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
                        </div>
                    </div>
                    @guest
                    @else
                    <div class="row hero-content">
                        <div class="col-md-12">
                        	
                           
                            <h1 class="animated fadeInDown"> Welcome! {{title_case(Auth::user()->name)}}</h1>
                         
                            <a href="{{url('/cuenta/create')}}" class="use-btn animated fadeInUp">New Account</a> <a href="#transactions" class="learn-btn animated fadeInUp">Transactions <i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                    @endguest
                </div>
            </section>
</header>