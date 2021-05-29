# 第二部 Chapter 6 / 認証・認可

## 対応表

- [キャッシュ併用認証ドライバ実装例](app/Foundation/Auth/CacheUserProvider.php)
- [独自認証ドライバ登録方法](app/Providers/AuthServiceProvider.php)
- [独自認証ドライバ指定例](config/auth.php)
- [パスワードリセットの拡張例](app/Auth/Passwords/PasswordManager.php)
- [独自パスワードリセットクラスの登録方法](app/Providers/PasswordServiceProvider.php)

- [user_tokensテーブル作成](database/migrations/2021_04_07_103058_create_user_tokens_table.php)
- [UserSeederクラス記述例](database/seeders/UserSeeder.php)
- [tokenからユーザー情報を検索する処理例](app/DataProvider/UserToken.php)
- [Authenticatableインターフェース実装クラス](app/Entity/User.php)
- [UserProviderインターフェースの実装](app/Foundation/Auth/UserTokenProvider.php)
- [実装した認証プロバイダの登録](app/Providers/AuthServiceProvider.php)
- [config/auth.phpへの追記](config/auth.php)
- [コントローラにおけるトークン認証によるユーザー情報取得例](app/Http/Controllers/UserAction.php)
- [routes/api.phpへルート追加](routes/api.php)

- [Tymon\JWTAuth\Contracts\JWTSubjectインターフェース実装例](app/Models/User.php)
- [jwtドライバの追加](config/auth.php)
- [TokenResponderクラス実装例](app/Http/Responder/TokenResponder.php)
- [ログインコントローラクラスの実装例](app/Http/Controllers/User/LoginAction.php)
- [jwtドライバを介したユーザー情報アクセス例](app/Http/Controllers/User/RetrieveAction.php)

- [Amazon OAuth 認証ドライバ実装例](app/Foundation/Socialite/AmazonProvider.php)
- [Socialiteを拡張してドライバを追加](app/Providers/SocialiteServiceProvider.php)
- [amazonドライバの利用例](app/Http/Controllers/Register/RegisterAction.php)
- [通信内容をログとして出力する例 + amazonドライバ](app/Http/Controllers/Register/CallbackAction.php)

- [1つの認可処理を1つのクラスとして表現する例](app/Gate/UserAccess.php)
- [beforeメソッドを利用した認可処理ロギング](app/Providers/AuthServiceProvider.php)
- [PHP のビルトインクラスを使ったポリシークラス実装例](app/Policies/ContentPolicy.php)
- [ポリシークラスの利用例](app/Http/Controllers/User/RetrieveAction.php)

- [認可を伴うプレゼンテーションロジック実装例](app/Foundation/ViewComposer/PolicyComposer.php)
- [View Composerの登録例](app/Providers/AppServiceProvider.php)

## Docker

```bash
$ docker-compose build
$ docker-compose up -d
$ docker-compose exec -w /var/www/html php composer install
```
