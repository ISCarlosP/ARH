<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Site_visits;
use App\Models\User;
use App\Models\Users;
use App\Services\Utilities;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\SessionServices;
use App\Services\Cookies;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class DashboardController extends Controller
{
    public function show(Request $request)
    {
        $sessionService = new SessionServices();
        $productsController = new ProductsController();

        if (!$sessionService->existSession($request)) {
            return redirect()->route('home');
        }

        $cookie = $sessionService->updateSessionTime();
        $user = $sessionService->getLoggedUser();

        $cardsData = $this->getCardsValues();
        $chartsData = $this->getChartsData();
        $messages = $this->getMessages();
        $urls = $this->getUrlsToSend();
        $users = $this->getActiveUsers();
        $banner = $this->getBannerInfo();
        $productsInfo = $productsController->getProducts();

        $userData = json_encode($user);
        $cardsData = json_encode($cardsData);
        $chartsData = json_encode($chartsData);
        $messages = json_encode($messages);
        $urls = json_encode($urls);
        $users = json_encode($users);
        $productsInfo = json_encode($productsInfo);
        $banner = json_encode($banner);

        return view('users.dashboard',
            compact('userData',
                'cardsData',
                'chartsData',
                'messages',
                'urls',
                'users',
                'productsInfo',
                'banner'))
            ->withCookie($cookie);
    }

    public function getCardsValues()
    {
        $todayVisits = Site_visits::query()
            ->whereBetween('created_at', [Carbon::now('America/Mexico_City')->startOfDay(), Carbon::now('America/Mexico_City')->endOfDay()])
            ->count();

        $weekVisits = Site_visits::query()
            ->whereBetween('created_at', [Carbon::now('America/Mexico_City')->subDays(8), Carbon::now('America/Mexico_City')->endOfDay()])
            ->count();

        $monthVisits = Site_visits::query()
            ->whereBetween('created_at', [Carbon::now('America/Mexico_City')->startOfMonth(), Carbon::now('America/Mexico_City')->endOfMonth()])
            ->count();

        $activeUsers = Users::query()
            ->where('status', 1)
            ->count();

        return [
            'today_visits' => [
                'name' => 'VISITAS HOY',
                'icon_class' => 'fa-regular fa-eye text-secondary',
                'hex' => '#ff5d5d',
                'value' => $todayVisits
            ],
            'week_visits' => [
                'name' => 'ESTA SEMANA',
                'icon_class' => 'fa-solid fa-calendar-days text-secondary',
                'hex' => '#c27ba0',
                'value' => $weekVisits
            ],
            'month_visits' => [
                'name' => '30 DÍAS',
                'icon_class' => 'fa-regular fa-hourglass-half text-secondary',
                'hex' => '#9acd32',
                'value' => $monthVisits
            ],
            'active_users' => [
                'name' => 'USUARIOS ACTIVOS',
                'icon_class' => 'fa-solid fa-user text-secondary',
                'hex' => '#6fa8dc',
                'value' => $activeUsers
            ],
        ];

    }

    public function getChartsData()
    {
        $count = 0;
        $weekVisitsDetail = [
            'days' => [],
            'data' => []
        ];

        $monthVisitsDetail = [
            'days' => [],
            'data' => []
        ];

        while ($count < 7) {
            $start = Carbon::now('America/Mexico_City')->startOfDay()->subDays($count);
            $end = Carbon::now('America/Mexico_City')->endOfDay()->subDays($count);

            $visitsCount = Site_visits::query()
                ->whereBetween('created_at', [$start, $end])
                ->count();

            $weekVisitsDetail['days'][] = strtoupper(Carbon::now('America/Mexico_City')->subDays($count)->locale('es')->isoFormat('ddd'));
            $weekVisitsDetail['data'][] = $visitsCount;
            $count++;
        }

        $count = 0;

        while ($count < 30) {
            $start = Carbon::now('America/Mexico_City')->startOfDay()->subDays($count);
            $end = Carbon::now('America/Mexico_City')->endOfDay()->subDays($count);

            $visitsCount = Site_visits::query()
                ->whereBetween('created_at', [$start, $end])
                ->count();

            $monthVisitsDetail['days'][] = strtoupper(Carbon::now('America/Mexico_City')->subDays($count)->locale('es')->isoFormat('D/M/Y'));
            $monthVisitsDetail['data'][] = $visitsCount;
            $count++;
        }

        return ['monthVisitsDetail' => array_reverse($monthVisitsDetail), 'weekVisitsDetail' => array_reverse($weekVisitsDetail)];
    }

    public function getMessages()
    {

        $messages = Messages::query()
            ->where('message_status_id', 1)
            ->get()
            ->toArray();
        $count = 0;

        while ($count < count($messages)) {
            $messages[$count]['created_at'] = Carbon::parse($messages[$count]['created_at'])->format('Y-m-d h:i A');
            $count++;
        }

        return ($messages);
    }

    public function checkMessage(Request $request)
    {
        $utilities = new Utilities();
        $response = $utilities->createResponse();

        $message = Messages::query()
            ->where('message_id', $request->messageId)
            ->first();

        $message->message_status_id = 2;
        $message->save();

        $response['values'] = $this->getMessages();
        $response['message'] = 'El mensaje se revisó correctamente';

        return $response;
    }

    public function getUrlsToSend()
    {
        $urls = [
            'checkMessage' => route('check.message'),
            'loggout' => route('session.loggout'),
            'createUser' => route('users.create'),
            'deleteUser' => route('users.destroy'),
            'updateUser' => route('users.update'),
            'bannerUpdate' => route('banner.update'),
            'updateProduct' => route('product.update'),
            'galleryDelete' => route('gallery.delete'),
            'galleryCreate' => route('gallery.create')
        ];

        return $urls;
    }

    public function getActiveUsers()
    {
        $allUsers = User::query()
            ->select('id', 'first_name', 'last_name', 'user_birth_date', 'email', 'created_at')
            ->where('status', 1)
            ->get()
            ->toArray();
        $users = [];

        foreach ($allUsers as $user) {
            $users[] = [
                'id' => $user['id'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'birth_date' => Carbon::parse($user['user_birth_date'])->format('Y-m-d'),
                'created_at' => Carbon::parse($user['created_at'])->format('Y-m-d'),
                'email' => $user['email'],
            ];
        }

        return $users;
    }

    private function getBannerInfo()
    {
        return [
            'name' => 'banner_principal',
            'url' => '/img/gallery/banner_principal/banner_principal.png'
        ];
    }

    public function updateBannerImage(Request $request)
    {
        $utiliesProvider = new Utilities();
        $response = $utiliesProvider->createResponse();
        $response['message'] = 'Se actualizó tu imagen correctamente';
        $isDeleted = $this->deleteBannerImage();

        if (!$isDeleted) {
            $response['response'] = false;
            $response['message'] = 'Hubo un problema al actualizar el banner, reintenta';

            return $response;
        }

        $request->file('banner')->move(public_path('img\gallery\banner_principal'), 'banner_principal.png');

        return $response;
    }

    private function deleteBannerImage()
    {
        $response = true;
        try {
            $url = public_path('img') . '\gallery\banner_principal\banner_principal.png';
            if (file_exists($url)) {
                unlink($url);
            }

        } catch (Exception $exception) {
            $response = false;
        }
        return $response;
    }
}
