
<div id="nav-content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand " href="{{url('/')}}">SEA CLIFF HOTEL</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item {{ Request::url() == url('/hotel-view') ? 'active' : '' }}">
                    <a href="{{url('/hotel-view')}}" class="nav-link ">Home <span class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item {{ Request::url() == url('/hotel-view/meetings') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/hotel-view/meetings')}}">MEETINGS</a>

                </li>

                <li class="nav-item {{ Request::url() == url('/hotel-view/rooms') ? 'active' : '' }}">
                    <a href="{{url('hotel-view/rooms')}}" class="nav-link" >Rooms</a>

                </li>

                <li class="nav-item {{ Request::url() == url('/hotel-view/offers') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('hotel-view/offers')}}"  role="button" aria-haspopup="true" aria-expanded="false">
                        Offers
                    </a>
                </li>

                <li class="nav-item {{ Request::url() == url('/hotel-view/dining') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('hotel-view/dining')}}"  role="button" aria-haspopup="true" aria-expanded="false">
                        Dining
                    </a>

                </li>

                <li class="nav-item {{ Request::url() == url('/hotel-view/contacts') ? 'active' : '' }}">
                    <a href="{{url('hotel-view/contacts')}}"  class="nav-link" >Contacts</a>
                </li>

                <li class="nav-item {{ Request::url() == url('/hotel-view/photo-galleries') ? 'active' : '' }}">
                    <a href="{{url('hotel-view/photo-galleries')}}" class="nav-link" >Gallery</a>
                </li>

                <li class="nav-item">
                    <a target="_blank" href="{{url('hotel-administration/')}}" class="nav-link" >Login</a>
                </li>
            </ul>
        </div>
    </nav>

</div>


