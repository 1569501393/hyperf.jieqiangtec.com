> 此文件是 [项目文档编写规范](https://learnku.com/courses/laravel-specification/524/project-documentation-specification) 的 readme 编写范例，点击 [我要改进](https://learnku.com/courses/articles/523/patches/create) 即可查看其 Markdown 内容。

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