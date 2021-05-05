<div style="background: #d2d2d2;" class="row">
    <div class="col-md-4 mb-2">
        <label>Destination</label>
        <div class="input-group">
                <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                </span>
            <input value="Sea Cliff Hotel, Zanzibar"  type="search" class="form-control"  placeholder="Where are you going?">
        </div>
    </div>
    <div class="col-md-4 mb-2">
        <label>Guests</label>
        <div class="row">

            <div class="col-md-4">

                <div class="input-group">
                    <select class="form-control">
                        <option selected value="1">1 Adult</option>
                        @for($t=2; $t<=20; $t++)
                            <option value="{{$t}}">{{$t}} Adults</option>
                        @endfor
                    </select>
                </div>

            </div>

            <div class="col-md-4">
                <div class="input-group">
                    <select class="form-control">
                        <option selected value="1">1 Room</option>
                        @for($t=2; $t<=20; $t++)
                            <option value="{{$t}}">{{$t}} Rooms</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group">

                    <select class="form-control">
                        <option selected value="0">0 Children</option>
                        <option selected value="1">1 Child</option>
                        @for($t=2; $t<=20; $t++)
                            <option value="{{$t}}">{{$t}} Children</option>
                        @endfor
                    </select>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-4 mb-2">
        <label>Check in</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-arrow-circle-right"></i></div>
            </div>
            <input type="date" class="form-control" id="checkIn" placeholder="Check in">
        </div>
    </div>
    <div class="col-md-4 mb-2">
        <label>Time in</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-clock"></i></div>
            </div>
            <select id="select-time" class="form-control">
                <option value="Midnight">Midnight</option>
                @for($x=1; $x<=11; $x++)
                    <option value="{{$x}}:00 AM">{{$x}}:00 AM</option>
                @endfor
                <option selected value="Noon">Noon</option>
                @for($y=1; $y<=11; $y++)
                    <option value="{{$y}}:00 PM">{{$y}}:00 PM</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-2">
        <label>Check out</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-arrow-circle-left"></i></div>
            </div>
            <input type="date" class="form-control" id="checkOut" placeholder="Check out">
        </div>
    </div>
    <div class="col-md-4 mb-2">
        <label>Time out</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-clock"></i></div>
            </div>
            <select id="select-2" class="form-control">
                <option value="Midnight">Midnight</option>
                @for($x=1; $x<=11; $x++)
                    <option value="{{$x}}:00 AM">{{$x}}:00 AM</option>
                @endfor
                <option selected value="Noon">Noon</option>
                @for($y=1; $y<=11; $y++)
                    <option value="{{$y}}:00 PM">{{$y}}:00 PM</option>
                @endfor

            </select>
        </div>
    </div>
</div>
