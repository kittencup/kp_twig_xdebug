1.概述
--------
kp_twig_xdebug 是一个drupal8下的twig xdebug断点调试模块，已解决twig下不能打断点的问题

2.下载
--------
[github](https://github.com/kittencup/kp_twig_xdebug)

2.使用
--------
开启drupal8调试

```
#sites/default/services.yml
parameters:
  twig.config:
    debug: true
    auto_reload: auto
    cache: false
```

将kp_twig_xdebug模块放入modules文件下，在drupal8后台安装并开启模块

在twig模板内，如果需要断点，则使用xdebug_break函数

```
#xxx.html.twig
{{ xdebug_break() }}
```
