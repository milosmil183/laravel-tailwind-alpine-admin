<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * The controller class to manage payments related resources.
 *
 * @since 12/29/2021
 */
class PaymentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Application|Factory|View
   */
  public function index()
  {
    $payments = collect();
    $payments->push((object)[
      'order_no' => 1,
      'subscription' => 'IPTV Base',
      'quantity' => '2',
      'base_cost' => '$20',
      'total_cost' => '$80',
    ]);
    $payments->push((object)[
      'order_no' => 2,
      'subscription' => 'All-Access News',
      'quantity' => '2',
      'base_cost' => '$50',
      'total_cost' => '$100',
    ]);
    $payments->push((object)[
      'order_no' => 3,
      'subscription' => 'VPN Protection',
      'quantity' => '5',
      'base_cost' => '$100',
      'total_cost' => '$500',
    ]);
    $payments->push((object)[
      'order_no' => 4,
      'subscription' => 'All-Access Sports',
      'quantity' => '4',
      'base_cost' => '$1000',
      'total_cost' => '$400',
    ]);
    return view('payment', [
      'payments' => $payments
    ]);
  }
}
