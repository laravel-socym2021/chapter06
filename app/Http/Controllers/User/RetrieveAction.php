<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use stdClass;

final class RetrieveAction extends Controller
{
    private $authManager;
    private $gate;

    public function __construct(
        AuthManager $authManager,
        Gate $gate
    ) {
        $this->authManager = $authManager;
        $this->gate = $gate;
    }

    public function __invoke(Request $request)
    {
        /** @var User $user */
        $user = $this->authManager->guard('jwt')->user();
        // 許可されているかを調べます
        $can = $this->gate->allows('user-access', $user->getAuthIdentifier());

        /*
         * パスによる値を利用する場合
        if ($this->gate->allows('user-access', $id)) {
            // 実行が許可される場合に実行
        }
        */

        // リスト6.5.2.13：ポリシークラスの利用例
        /*
        $class = new stdClass();
        $class->id = 1;
        // ①
        $this->gate->forUser(
            $this->authManager->guard()->user()
        )->allows('edit', $class);
        */
    }
}
