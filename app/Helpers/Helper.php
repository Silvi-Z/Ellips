<?php
namespace App\Helpers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\DailyTour;
use App\Models\DailyTourOrder;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\MetaSetting;
use App\Models\Order;
use App\Models\RoomType;
use App\Models\Tour;
use App\Models\TourLocation;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\ExchangeRate;


class Helper extends Controller
{
  public static function slugify($string){
      return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
  }

}
