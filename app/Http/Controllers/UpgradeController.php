<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * The controller class to manage the upgrades.
 *
 * @since 12/28/2021
 */
class UpgradeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Application|Factory|View
   */
  public function index()
  {
    $upgrades = collect();
    $upgrades->push((object)[
      'id' => 1,
      'title' => 'Basic',
      'type' => 'Monthly Charge',
      'price' => '$14.99',
      'features' => [
        (object)[
          'title' => 'Free Setup',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Bandwidth Limit 10 GB',
          'enabled' => true,
        ],
        (object)[
          'title' => '20 User Connection',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Analytics Report',
          'enabled' => false,
        ],
        (object)[
          'title' => 'Public API Access',
          'enabled' => false,
        ],
        (object)[
          'title' => 'Plugins Integration',
          'enabled' => false,
        ],
        (object)[
          'title' => 'Custom Content Management',
          'enabled' => false,
        ],
      ]
    ]);
    $upgrades->push((object)[
      'id' => 2,
      'title' => 'Standard',
      'type' => 'Monthly Charge',
      'price' => '$49.99',
      'features' => [
        (object)[
          'title' => 'Free Setup',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Bandwidth Limit 10 GB',
          'enabled' => true,
        ],
        (object)[
          'title' => '20 User Connection',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Analytics Report',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Public API Access',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Plugins Integration',
          'enabled' => false,
        ],
        (object)[
          'title' => 'Custom Content Management',
          'enabled' => false,
        ],
      ]
    ]);
    $upgrades->push((object)[
      'id' => 3,
      'title' => 'Premium',
      'type' => 'Monthly Charge',
      'price' => '$89.99',
      'features' => [
        (object)[
          'title' => 'Free Setup',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Bandwidth Limit 10 GB',
          'enabled' => true,
        ],
        (object)[
          'title' => '20 User Connection',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Analytics Report',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Public API Access',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Plugins Integration',
          'enabled' => true,
        ],
        (object)[
          'title' => 'Custom Content Management',
          'enabled' => true,
        ],
      ]
    ]);
    return view('upgrade', [
      'upgrades' => $upgrades
    ]);
  }
}
