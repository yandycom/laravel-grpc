# laravel-grpc
gRPC client for php Laravel

[微信官方文档](https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=4_1)

#### 安装(PHP>=7.0)
1.composer
> composer require yandy/laravel-grpc
2.发布
> 执行 php artisan vendor:publish 发布配置
3.配置
> 在config目录下找到grpc.php 配置grpc服务端
4.使用
> use Yandy\grpc\Facades\GrpcClient;


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
