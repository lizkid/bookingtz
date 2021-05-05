<div id="sidebar-wrapper">

    <div id="side-cover">
        <div class="sidebar-overlay animated fadeIn"></div>

        <ul>
            <li class=" common_class">
                <a href="{{url('/')}}"><i id="icon" class="fas fa-sign-out-alt"></i>Go to site</a>
            </li>

            <li class="active common_class">
                <a href="{{url('hotel-administration/dashboard')}}"><i id="icon" class="fas fa-home"></i>Home</a>
            </li>
            <li class="common_class">
                <a id="drop1"  ><i id="icon" class="fas fa-money-check-alt"></i>Booking<i class="fas fa-angle-down first"></i></a>
                <ul id="dropmenu">
                    <li><a href="{{url('hotel-administration/bookings/')}}"><i id="icon" class="fas fa-check-circle"></i>Requested Bookings</a></li>
                    <li><a href="{{url('hotel-administration/bookings/cancelled')}}"><i id="icon" class="fas fa-times-circle"></i>Cancelled Bookings</a></li>
                </ul>
            </li>

            <li class="common_class">
                <a id="drop2"  ><i id="icon" class="fas fa-users"></i>Hotel<i class="fas fa-angle-down second"></i></a>
                <ul id="dropmenu2">
                    <li><a href="{{url('hotel-administration/hotel-details/')}}"><i id="icon" class="fas fa-user-check"></i>Details</a></li>
                    {{--                <li><a href="{{url('hotel-administration/hotel-galleries/create')}}"><i id="icon" class="fas fa-user-times"></i>Galleries</a></li>--}}
                </ul>
            </li>

            {{--        <li class="common_class">--}}
            {{--            <a id="drop6" ><i id="icon"  class="fas fa-wallet"></i>Attractive Areas<i class="fas fa-angle-down sixth"></i></a>--}}
            {{--            <ul  id="dropmenu6">--}}
            {{--                <li><a href="../admin/contribution/income.php"><i id="icon" class="fas fa-dollar-sign"></i>Attractive Areas list</a></li>--}}
            {{--                <li><a href="contribution/socialEventsContribution.php"><i id="icon" class="fas fa-people-arrows"></i>Deleted Attractive Areas</a></li>--}}
            {{--            </ul>--}}
            {{--        </li>--}}

            <li class="common_class">
                <a id="drop3" ><i id="icon"  class="fas fa-wallet"></i>Rooms<i class="fas fa-angle-down third"></i></a>
                <ul  id="dropmenu3">
                    <li><a href="{{url('hotel-administration/rooms')}}"><i id="icon" class="fas fa-dollar-sign"></i>Rooms list</a></li>
                    <li><a href="#"><i id="icon" class="fas fa-people-arrows"></i>Unused Rooms</a></li>
                </ul>
            </li>

            <li class="common_class">
                <a id="drop5" ><i id="icon"  class="fas fa-wallet"></i>Dining<i class="fas fa-angle-down fifth"></i></a>
                <ul  id="dropmenu5">
                    <li><a href="{{url('hotel-administration/dining')}}"><i id="icon" class="fas fa-file-invoice-dollar"></i>Dining List</a></li>
                </ul>
            </li>

            <li class="common_class">
                <a id="drop5"><i id="icon" class="fas fa-tools"></i>Pages<i class="fas fa-angle-down fifth"></i></a>
                <ul  id="dropmenu5">
                    <li  class="common"><a href="#"><i id="icon" class="fas fa-dollar-sign"></i>Contact Us</a></li>
                    <li  class="common"><a href="#"><i id="icon" class="fas fa-dollar-sign"></i>About Us</a></li>
                </ul>
            </li>

            <li class="common_class">
                <a id="drop4"><i id="icon" class="fas fa-tools"></i>Management<i class="fas fa-angle-down fourth"></i></a>
                <ul  id="dropmenu4">
                    <li  class="common"><a href="{{url('hotel-administration/management/users')}}"><i id="icon" class="fas fa-dollar-sign"></i>Users</a></li>
                    <li  class="common"><a href="{{url('hotel-administration/management/roles')}}"><i id="icon" class="fas fa-people-arrows"></i>Roles</a></li>
                    <li  class="common"><a href="{{url('hotel-administration/management/amenities')}}"><i id="icon" class="fas fa-people-arrows"></i>Room Amenities</a></li>
                    <li  class="common"><a href="{{url('hotel-administration/management/beds')}}"><i id="icon" class="fas fa-people-arrows"></i>Beds</a></li>
                    <li  class="common"><a href="{{url('hotel-administration/management/offers')}}"><i id="icon" class="fas fa-file-invoice-dollar"></i>Offers</a></li>
                    <li  class="common"><a href="{{url('hotel-administration/management/offers')}}"><i id="icon" class="fas fa-file-invoice-dollar"></i>Room Types</a></li>
                </ul>
            </li>

            {{--        <li class="common_class">--}}
            {{--            <a href="../admin/reports/report.php"><i id="icon" class="fas fa-file-invoice-dollar"></i>Reports</a>--}}
            {{--        </li>--}}


        </ul>
    </div>


</div>
