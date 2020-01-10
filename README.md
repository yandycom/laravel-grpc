# laravel-grpc
laravel-grpc客户端

#### 安装(PHP>=7.0)
1.composer
> composer require yandy/laravel-grpc

2.发布
> 执行 php artisan vendor:publish 发布配置

3.配置
> 在config目录下找到grpc.php 配置grpc服务端

4.使用
> use Yandy\grpc\Facades\GrpcClient;

#### 客户端示例代码 UserClient
<?php
namespace App\RpcClient;

use App\Grpc\HiReply;
use App\Grpc\HiUser;

class UserClient extends \Grpc\BaseStub{

    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    //测试grpc客户端
    public function sayHello(HiUser $argument,$metadata=[],$options=[]){
        return $this->_simpleRequest('/grpc.hi/sayHello',
            $argument,
            ['\App\Grpc\HiReply', 'decode'],
            $metadata, $options);
    }

}
?>

#### 示例
    <?php
	      use Yandy\grpc\Facades\GrpcClient;
	      $client = GrpcClient::make('userfff');
        $request = new HiUser();
        $request->setName('wangyan');
        $request->setSex(30);
        list($reply, $status) = $client->sayHello($request)->wait();

        $message = $reply->getMessage();
        $user = $reply->getUser();
        $client->close();
    ?>
