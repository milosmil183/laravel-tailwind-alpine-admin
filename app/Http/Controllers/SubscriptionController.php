<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * The controller class to manage the subscriptions
 *
 */
class SubscriptionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Application|Factory|View
   */
  public function index()
  {
    $subscriptions = collect();

    // Temporarily set up subscriptions with sample data.
    $subscriptions->push((object)[
      'id' => '00001',
      'name' => 'UNLIMITED TV',
      'address' => '089 Kutch Green Apt. 448',
      'date' => '04 Sep 2021',
      'type' => 'All Devices',
      'status' => 'completed',
    ], (object)[
      'id' => '00002',
      'name' => 'SPORTS BUNDLE',
      'address' => '979 Immanuel Ferry Suite 526',
      'date' => '28 May 2021',
      'type' => 'All Devices',
      'status' => 'processing',
    ], (object)[
      'id' => '00003',
      'name' => 'PRO NEWS+ Kids',
      'address' => '8587 Frida Ports',
      'date' => '23 Nov 2021',
      'type' => 'All Devices',
      'status' => 'rejected',
    ], (object)[
      'id' => '00002',
      'name' => 'SPORTS BUNDLE',
      'address' => '979 Immanuel Ferry Suite 526',
      'date' => '28 May 2021',
      'type' => 'All Devices',
      'status' => 'processing',
    ], (object)[
      'id' => '00003',
      'name' => 'PRO NEWS+ Kids',
      'address' => '8587 Frida Ports',
      'date' => '23 Nov 2021',
      'type' => 'All Devices',
      'status' => 'rejected',
    ]);
    $page = Paginator::resolveCurrentPage() ?: 1;
    $perPage = 3;
    $result = new LengthAwarePaginator(
      $subscriptions->forPage($page, $perPage),
      $subscriptions->count(),
      $perPage,
      $page,
      ['path' => route('subscriptions.index')],
    );
    return view('subscriptions', [
      'subscriptions' => $result
    ]);
  }
}
