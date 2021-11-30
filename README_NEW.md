## 项目概述

* 产品名称：轻岚后台管理系统
* 项目代号：admin
* 官方地址：https://git.qinglan.vip/ad/admin

## 运行环境要求

- php7.4+

## 开发环境部署/安装

### 基础安装

#### 1. 克隆源代码

克隆源代码到本地：

    > git clone git@git.qinglan.vip:ad/admin.git

#### 2. 生成配置文件

```
cp .env.example .env
```

你可以根据情况修改 `.env` 文件里的内容，如数据库连接、缓存 等(本地开发默认即可)：

```
# db
DB_DRIVER=mysql
DB_HOST=mysql8
DB_PORT=3306
DB_DATABASE=admin
DB_USERNAME=root
DB_PASSWORD=root
DB_CHARSET=utf8mb4
DB_COLLATION=utf8mb4_general_ci
DB_PREFIX=
```

#### 3. 启动服务

```bash
php bin/hyperf.php start
```

### 链接入口

* 首页地址：<http://localhost:9501>

至此, 安装完成。

## 生成模型文件

```bash
php bin/hyperf.php gen:model --with-comments table_name

可选参数如下：

参数	类型	默认值	备注
--pool	string	default	连接池，脚本会根据当前连接池配置创建
--path	string	app/Model	模型路径
--force-casts	bool	false	是否强制重置 casts 参数
--prefix	string	空字符串	表前缀
--inheritance	string	Model	父类
--uses	string	Hyperf\DbConnection\Model\Model	配合 inheritance 使用
--refresh-fillable	bool	false	是否刷新 fillable 参数
--table-mapping	array	[]	为表名 -> 模型增加映射关系 比如 ['users:Account']
--ignore-tables	array	[]	不需要生成模型的表名 比如 ['users']
--with-comments	bool	false	是否增加字段注释
--property-case	int	0	字段类型 0 蛇形 1 驼峰

jieqiang@DESKTOP-0BFKOSK: ~/qldev/workspace/test/hyperf.jieqiangtec.com test ⚡ $ php bin/hyperf.php gen:model --help                                                                                                                        [11:01:33]
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\Config\Listener\RegisterPropertyHandlerListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\ExceptionHandler\Listener\ExceptionHandlerListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\DbConnection\Listener\RegisterConnectionResolverListener listener.
Usage:
  gen:model [options] [--] [<table>]

Arguments:
  table                                Which table you want to associated with the Model.

Options:
  -p, --pool[=POOL]                    Which connection pool you want the Model use. [default: "default"]
      --path[=PATH]                    The path that you want the Model file to be generated.
  -F, --force-casts                    Whether force generate the casts for model.
  -P, --prefix[=PREFIX]                What prefix that you want the Model set.
  -i, --inheritance[=INHERITANCE]      The inheritance that you want the Model extends.
  -U, --uses[=USES]                    The default class uses of the Model.
  -R, --refresh-fillable               Whether generate fillable argement for model.
  -M, --table-mapping[=TABLE-MAPPING]  Table mappings for model. (multiple values allowed)
      --ignore-tables[=IGNORE-TABLES]  Ignore tables for creating models. (multiple values allowed)
      --with-comments                  Whether generate the property comments for model.
      --with-ide                       Whether generate the ide file for model.
      --visitors[=VISITORS]            Custom visitors for ast traverser. (multiple values allowed)
      --property-case[=PROPERTY-CASE]  Which property case you want use, 0: snake case, 1: camel case.
      --enable-event-dispatcher        Whether enable event dispatcher.
  -h, --help                           Display help for the given command. When no command is given display help for the list command
  -q, --quiet                          Do not output any message
  -V, --version                        Display this application version
      --ansi|--no-ansi                 Force (or disable --no-ansi) ANSI output
  -n, --no-interaction                 Do not ask any interactive question
  -v|vv|vvv, --verbose                 Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug


[2021-11-17 11:07:57] sql.INFO: [1.27] select `column_key` as `column_key`, `column_name` as `column_name`, `data_type` as `data_type`, `column_comment` as `column_comment`, `extra` as `extra`, `column_type` as `column_type` from information_schema
.columns where `table_schema` = 'yugua' and `table_name` = 'withdraw_order' order by ORDINAL_POSITION [] []
[DEBUG] Event Hyperf\Database\Events\QueryExecuted handled by App\Listener\DbQueryExecutedListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booting handled by Hyperf\ModelListener\Listener\ModelHookEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booting handled by Hyperf\ModelListener\Listener\ModelEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booted handled by Hyperf\ModelListener\Listener\ModelHookEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booted handled by Hyperf\ModelListener\Listener\ModelEventListener listener.
Model App\Model\YuGua\WithdrawOrder was created.

```

## 单元测试

```bash
composer test -- --filter=testExample
```


> > > 此文件是 [项目文档编写规范](https://learnku.com/courses/laravel-specification/524/project-documentation-specification) 的 readme 编写范例，点击 [我要改进](https://learnku.com/courses/articles/523/patches/create) 即可查看其 Markdown 内容。

## 修改 git 远程 url
```shell
root@SKY-20191125ANA:~/qldev/workspace/test/hyperf.jieqiangtec.com-bak# vim .git/config
[core]
    repositoryformatversion = 0
    filemode = true
    bare = false
    logallrefupdates = true
[remote "origin"]
    url = https://github.com/1569501393/hyperf.jieqiangtec.com.git
    fetch = +refs/heads/*:refs/remotes/origin/*
    pushurl = git@github.com:1569501393/hyperf.jieqiangtec.com.git
[branch "main"]
    remote = origin
    merge = refs/heads/main
[branch "test"]
    remote = origin
    merge = refs/heads/test
```

## 项目概述

* 产品名称：step-by-step-Hyperf实操
* 项目代号：step-by-step-001
* 官方地址：https://github.com/1569501393/hyperf.jieqiangtec.com

step-by-step-Hyperf实操 是一个hyperf脚手架从零到一实操。

## 功能如下

- 快速入门;
- 核心架构;
- 基础功能;
- 数据库模型;
- 微服务;
- 网络服务;
- 消息队列;
- 客户端;
- 其它组件;
- 应用部署;
- 组件开发指南;
- 其它组件;
- 版本升级指南;

## 运行环境要求

- Nginx 1.8+
- PHP 7.0+
- Mysql 5.7+
- Redis 3.0+

## 开发环境部署/安装

本项目代码使用 PHP 框架 [Hyperf 2.2](https://hyperf.wiki)
开发，本地开发环境使用 [Docker-composer](https://hub.docker.com/repository/docker/jieqiang2020/)。

### 基础安装

#### 1. 克隆源代码

克隆 `larabbs` 源代码到本地：

    > git clone https://github.com/1569501393/hyperf.jieqiangtec.com

#### 2. 配置本地的 Homestead 环境

1). 运行以下命令编辑 Homestead.yaml 文件：

```shell
homestead edit
```

2). 加入对应修改，如下所示：

```
folders:
    - map: ~/my-path/larabbs/ # 你本地的项目目录地址
      to: /home/vagrant/larabbs

sites:
    - map: larabbs.test
      to: /home/vagrant/larabbs/public

databases:
    - larabbs
```

3). 应用修改

修改完成后保存，然后执行以下命令应用配置信息修改：

```shell
homestead provision
```

随后请运行 `homestead reload` 进行重启。

#### 3. 安装扩展包依赖

	composer install

#### 4. 生成配置文件

```
cp .env.example .env
```

你可以根据情况修改 `.env` 文件里的内容，如数据库连接、缓存、邮件设置等：

```
APP_URL=http://larabbs.test
...
DB_HOST=localhost
DB_DATABASE=larabbs
DB_USERNAME=homestead
DB_PASSWORD=secret

DOMAIN=.larabbs.test
```

#### 5. 生成数据表及生成测试数据

在 Homestead 的网站根目录下运行以下命令

```shell
$ php artisan migrate --seed
```

初始的用户角色权限已使用数据迁移生成。

#### 6. 生成秘钥

```shell
php artisan key:generate
```

#### 7. 配置 hosts 文件

    echo "192.168.10.10   larabbs.test" | sudo tee -a /etc/hosts

### 前端框架安装

1). 安装 node.js

直接去官网 [https://nodejs.org/en/](https://nodejs.org/en/) 下载安装最新版本。

2). 安装 Yarn

请安装最新版本的 Yarn —— http://yarnpkg.cn/zh-Hans/docs/install

3). 安装 Laravel Mix

```shell
yarn install
```

4). 编译前端内容

```shell
// 运行所有 Mix 任务...
npm run dev

// 运行所有 Mix 任务并缩小输出..
npm run production
```

5). 监控修改并自动编译

```shell
npm run watch

// 在某些环境中，当文件更改时，Webpack 不会更新。如果系统出现这种情况，请考虑使用 watch-poll 命令：

npm run watch-poll
```

### 链接入口

* 首页地址：http://larabbs.test/
* 管理后台：http://larabbs.test/admin

管理员账号密码如下:

```
username: summer@learnku.com
password: password
```

至此, 安装完成 ^_^。

## 服务器架构说明

这里可以放一张大大的服务器架构图，下面是个例子：

![file](https://cdn.learnku.com/uploads/images/201705/20/1/1G6aQPAZym.png)

> 上图使用工具 [ProcessOn](https://www.processon.com) 绘制。

## 扩展包使用情况

| 扩展包 | 一句话描述 | 本项目应用场景 | | --- | --- | --- | --- | --- | --- | --- | --- |
| [Intervention/image](https://github.com/Intervention/image) | 图片处理功能库 | 用于图片裁切 |
| [guzzlehttp/guzzle](https://github.com/guzzle/guzzle) | HTTP 请求套件 | 请求百度翻译 API |
| [predis/predis](https://github.com/nrk/predis.git) | Redis 官方首推的 PHP 客户端开发包 | 缓存驱动 Redis 基础扩展包 |
| [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) | 页面调试工具栏 (对 phpdebugbar 的封装) | 开发环境中的 DEBUG
| | [spatie/laravel-permission](https://github.com/spatie/laravel-permission) | 角色权限管理 | 角色和权限控制 |
| [mewebstudio/Purifier](https://github.com/mewebstudio/Purifier) | 用户提交的 Html 白名单过滤 | 帖子内容的 Html 安全过滤，防止 XSS 攻击 |
| [hieu-le/active](https://github.com/letrunghieu/active) | 选中状态 | 顶部导航栏选中状态 |
| [summerblue/administrator](https://github.com/summerblue/administrator) | 管理后台 | 模型管理后台、配置信息管理后台 |
| [viacreative/sudo-su](https://github.com/viacreative/sudo-su) | 用户切换 | 开发环境中快速切换登录账号 |
| [laravel/horizon](https://github.com/laravel/horizon) | 队列监控 | 队列监控命令与页面控制台 /horizon |

## 自定义 Artisan 命令

| 命令行名字 | 说明 | Cron | 代码调用 |
| --- | --- | --- | --- |
| `larabbs:calculate-active-user` |  生成活跃用户 | 一小时运行一次 | 无 |
| `larabbs:sync-user-actived-at` | 从 Redis 中同步最后登录时间到数据库中 | 每天早上 0 点准时 | 无 |

## 队列清单

| 名称 | 说明 | 调用时机 |
| --- | --- | --- |
| TranslateSlug.php | 将话题标题翻译为 Slug | TopicObserver 事件 saved() |
| TopicReplied.php | 通知作者话题有新回复 | 话题被评论以后 |