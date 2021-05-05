<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchLocation\SearchlocationController;
use App\Http\Controllers\Hotels\HotelsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TrendingHotels\TrendingHotelsController;
use App\Http\Controllers\Destination\DestinationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HotelWeb\HotelWebController;
use App\Http\Controllers\Rooms\RoomController;
use App\Http\Controllers\HotelWeb\OffersController;
use App\Http\Controllers\HotelWeb\ContactsController;
use App\Http\Controllers\HotelWeb\DiningController;
use App\Http\Controllers\HotelWeb\GalleryController;
use App\Http\Controllers\HotelWeb\BookHotelController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Room\AdminRoomController;
use App\Http\Controllers\Admin\Booking\AdminBookingController;
use App\Http\Controllers\Admin\Management\RoomAmenityController;
use App\Http\Controllers\Admin\Management\BedController;
use App\Http\Controllers\Admin\Management\RoleController;
use App\Http\Controllers\Admin\Management\OfferController;
use App\Http\Controllers\Admin\HotelDetails\HotelDetailsController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Management\UserController;
use App\Http\Controllers\HotelWeb\MeetingController;
use App\Http\Controllers\MyProfile\BookingDetailsController;
use App\Http\Controllers\Myprofile\TouringDetailsController;
use App\Http\Controllers\MyProfile\BothDetailsController;
use App\Http\Controllers\Admin\Dining\HotelDiningController;
use App\Http\Controllers\ListProperty\ListPropertyController;
use App\Http\Controllers\ListProperty\RegistrationController;
use App\Http\Controllers\ListProperty\AuthPropertyController;
use App\Http\Controllers\ListProperty\CategoriesController;
use App\Http\Controllers\ListProperty\HelperController;
use App\Http\Controllers\ListProperty\PropertyRegistrationController;
use App\Http\Controllers\ListProperty\PropertyDetailsController;
use App\Http\Controllers\ListProperty\LayoutController;
use App\Http\Controllers\ListProperty\ServicesController;
use App\Http\Controllers\ListProperty\AmenityController;
use App\Http\Controllers\ListProperty\PaymentPropertyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
});
Route::post('/search', [SearchlocationController::class, 'index']);
Route::get('/multi-select', [SearchlocationController::class, 'multSelect']);

Route::group(['prefix'=>'auth'],function (){

    Route::get('/login', [LoginController::class, 'index']);
});

Route::get('/test1', [TestController::class, 'index']);

Route::group(['prefix'=>'destinations'], function (){

    Route::get('/', [DestinationController::class, 'index']);
});

Route::group(['prefix'=>'hotel-view'], function (){

    Route::get('/', [HotelWebController::class, 'index']);

    Route::group(['prefix'=>'rooms'], function (){
        Route::get('/', [RoomController::class, 'index']);
    });

    Route::group(['prefix'=>'meetings'], function (){
       Route::get('/', [MeetingController::class, 'index']);
    });

    Route::group(['prefix'=>'offers'], function (){
       Route::get('/', [OffersController::class, 'index']);
    });

    Route::group(['prefix'=>'contacts'], function (){
       Route::get('/', [ContactsController::class, 'index']);
    });

    Route::group(['prefix'=>'photo-galleries'], function () {
        Route::get('/', [GalleryController::class, 'index']);
    });

    Route::group(['prefix'=>'dining'], function (){
       Route::get('/', [DiningController::class,'index']);
    });

    Route::group(['prefix'=>'booking'], function (){
       Route::get('/', [BookHotelController::class, 'index']);
       Route::get('/room-results', [BookHotelController::class, 'searchedRoom']);
       Route::get('/payment-procedures', [BookHotelController::class, 'book']);

    });
});

Route::group(['prefix'=>'hotels'], function (){

    Route::get('/', [HotelsController::class, 'index']);
    Route::get('/book', [HotelsController::class, 'booking']);
    Route::get('/payment', [HotelsController::class, 'payment']);
    Route::get('/trending-hotels', [TrendingHotelsController::class, 'index']);

});

Route::group(['prefix'=>'my-profile'], function (){

    Route::get('/booking-information', [BookingDetailsController::class, 'index']);
    Route::get('/touring-information', [TouringDetailsController::class, 'index']);
    Route::get('/both-information', [BothDetailsController::class, 'index']);

});

Route::group(['prefix'=>'hotel-administration'], function (){

    Route::get('/', [AuthController::class, 'index']);

    Route::group(['prefix'=>'dashboard'], function (){
        Route::get('/', [DashboardController::class, 'index']);
    });

    Route::group(['prefix'=>'rooms'], function (){
       Route::get('/', [AdminRoomController::class, 'index']);
       Route::get('/show', [AdminRoomController::class, 'create']);

    });

    Route::group(['prefix'=>'bookings'], function (){
       Route::get('/', [AdminBookingController::class, 'index']);
       Route::get('/cancelled', [AdminBookingController::class, 'cancelledBookings']);
       Route::get('/view', [AdminBookingController::class, 'viewBookings']);

    });

    Route::group(['prefix'=>'hotel-details'], function (){
       Route::get('/', [HotelDetailsController::class, 'index']);
       Route::get('/create', [HotelDetailsController::class, 'create']);
    });

    Route::group(['prefix'=>'dining'], function (){

        Route::get('/', [HotelDiningController::class, 'index']);
        Route::get('/create', [HotelDiningController::class, 'create']);
    });

    Route::group(['prefix'=>'management'], function (){

        Route::group(['prefix'=>'users'], function (){
           Route::get('/', [UserController::class, 'index']);
           Route::get('/create', [UserController::class, 'create']);
        });

        Route::group(['prefix'=>'amenities'], function (){
            Route::get('/', [RoomAmenityController::class, 'index']);
        });

        Route::group(['prefix'=>'beds'], function (){
           Route::get('/', [BedController::class, 'index']);
        });

        Route::group(['prefix'=>'roles'], function (){
           Route::get('/', [RoleController::class, 'index']);
        });

        Route::group(['prefix'=>'offers'], function (){
           Route::get('/', [OfferController::class, 'index']);
           Route::get('/create', [OfferController::class, 'create']);

        });
    });
});
Route::group(['prefix'=>'list-your-property'], function (){
   Route::get('/', [ListPropertyController::class, 'index']);

    Route::get('/login-form', [AuthPropertyController::class, 'index']);
    Route::post('/login', [AuthPropertyController::class, 'login']);

    Route::group(['prefix'=>'user-registration'], function (){
        Route::get('/', [RegistrationController::class, 'index']);
        Route::post('/store', [RegistrationController::class, 'store']);
    });

   Route::group(['middleware'=>'auth-api'], function (){

       Route::get('/logout', [AuthPropertyController::class, 'logout']);

       Route::group(['prefix'=>'propertyCategories'], function (){
           Route::get('/', [CategoriesController::class, 'category']);
           Route::get('/star-type/{categoryId}', [CategoriesController::class, 'star']);
       });

       Route::group(['prefix'=>'property-registration'], function (){
          Route::get('/{categoryId}/{starTypeId}', [PropertyRegistrationController::class, 'index']);
          Route::post('/store', [PropertyRegistrationController::class, 'save']);
       });

       Route::group(['prefix'=>'property-details'], function (){
          Route::get('/{categoryId}/{starTypeId}', [PropertyDetailsController::class, 'index']);
          Route::post('/store', [PropertyDetailsController::class, 'save']);
       });

       Route::group(['prefix'=>'property-layout'], function (){
           Route::get('/{categoryId}/{starTypeId}', [LayoutController::class, 'index']);
           Route::post('/store', [LayoutController::class, 'save']);
       });

       Route::group(['prefix'=>'property-services'], function (){
           Route::get('/{categoryId}/{starTypeId}', [ServicesController::class, 'index']);
           Route::post('/store', [ServicesController::class, 'save']);
       });

       Route::group(['prefix'=>'property-amenities'], function (){
           Route::get('/{categoryId}/{starTypeId}', [AmenityController::class, 'index']);
           Route::post('/store', [AmenityController::class, 'save']);
       });

       Route::group(['prefix'=>'property-payment'], function (){
           Route::get('/{categoryId}/{starTypeId}', [PaymentPropertyController::class, 'index']);
           Route::post('/store', [PaymentPropertyController::class, 'save']);
       });

       Route::group(['prefix'=>'helper'], function (){
          Route::get('/get-sub/{CountryID}', [HelperController::class, 'getSub']);
          Route::get('/get-reg/{CountryID}/{SubCountryID}', [HelperController::class, 'getReg']);
       });
   });

});
