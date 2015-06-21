<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserControllerTest extends \TestCase
{
    /** ミドルウェアを無効にします */
    use WithoutMiddleware;

    use \Illuminate\Foundation\Testing\DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->app->bind(
            \App\Repositories\UserRepositoryInterface::class,
            \StubUser::class
        );
    }

    public function testIndex()
    {
        $this->visit('user')->see('No users', true);
    }

    /**
     * 未ログイン状態でフォームリクエストでForbiddenが表示されることをテスト
     */
    public function testNoLoginUserRequestForStore()
    {
        $params = [
            'name' => 'testing',
            'email' => 'testing@comnect.jp.net',
            'password' => 'testing',
            'password_confirmation' => 'testing'
        ];
        $this->post('user', $params)->see('Forbidden')->assertResponseStatus(403);
    }

    /**
     * ログイン状態でバリデーションを失敗することをテスト
     */
    public function testLoginUSerRequestForStore()
    {
        $this->be(factory('App\User')->make());
        $this->post('user', [])->assertRedirectedToRoute('user.index');
    }

    /**
     * リクエスト後、描画される画面をテスト
     */
    public function testStore()
    {
        $params = [
            'name' => 'testing',
            'email' => 'testing@comnect.jp.net',
            'password' => 'testing',
            'password_confirmation' => 'testing'
        ];
        $this->be(factory('App\User')->make());
        $this->makeRequest('POST', 'user', $params)->see('Complete')
            ->click('user list')->seePageIs('user');
    }

}

class StubUser implements \App\Repositories\UserRepositoryInterface
{

    /**
     * @return array
     */
    public function all()
    {
        return factory('App\User', 5)->make();
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function save(array $params)
    {
        return 1;
    }

}
