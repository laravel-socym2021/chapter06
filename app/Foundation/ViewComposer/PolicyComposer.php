<?php

declare(strict_types=1);

namespace App\Foundation\ViewComposer;

use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\View\View;

/**
 * リスト6.5.3.3：認可を伴うプレゼンテーションロジック実装例
 */
final class PolicyComposer
{
    private $gate;
    private $authManager;

    public function __construct(Gate $gate, AuthManager $authManager)
    {
        $this->gate = $gate;
        $this->authManager = $authManager;
    }

    public function compose(View $view)
    {
        $allow = $this->gate->forUser(
            $this->authManager->guard()->user()
        )->allows('edit');
        // ①
        if ($allow) {
            $view->getFactory()->inject('authorized', 'allowed');
        }
        $view->getFactory()->inject('authorized', 'denied');
    }
}