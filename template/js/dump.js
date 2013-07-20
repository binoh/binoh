/* ---------------------------------------------------- */
/* jquery dump 变量输出调试插件 , 剥离自 zzguo28 的项目
/* 喜欢的话请随便使用，不保留版权 ^_^
/* ------------------------------------------

功能特色：
    1 提供浏览友好的变量和对象输出(数组方式也可以，不过不好玩)
    2 输出不影响页面布局和进程
    3 点击了一次输出的内容后，鼠标移离插件会自动关闭移除
      (不过如果是满屏的输出怎么办呢，测试版可还没有去处理这个呢)
    4 ....。

使用方法：
    1 可直接输出简单字符串：$.dump('我为什么要弄这个'); var str = 'hi';$.dump(str);
    2 可自动换行：$.dump('我说了一句话 | 第二句话要换行');
    3 可以输出对象 $.dump( {第一行:'这插件非常好玩',第二行:'为什么会这么好玩'} );
      一个很有趣的测试，试试就知道了
      $(document).ready(function(){
         $.dump( jQuery.fn );
      });

/* ---------------------------------------------------- */
jQuery(function($) {

    /* 判断id是否为null */
    $.idisnull = function(id)
    {
        return $$(id) === null;
    };

    /* 获取dom对象 */
    function $$(id)
    {
        return document.getElementById(id);
    }

    /* 超级强大的输出测试 */
    $.dump = function( msg,time )
    {
        time = time && time * 1000 || 2000;

        if (typeof msg === "string")
        {
            msg = msg.indexOf('|') != -1 && '<p>'+ msg.split('|').join('</p><p>') ||'<p>' + msg ;
        }

        if (typeof msg === 'object')
        {
            var msgs = new Array();
            for(var p in msg)
            {
                msgs.push(p + ':&nbsp;' + msg[p]);
            }
            msg = '<p>' + msgs.join('</p><p>');
        }


        if ( $.idisnull('debug_dump') )
        {
            $('body').prepend('<div id="debug_dump"></div>');
        }

        $('div#debug_dump')
            .css({
                position        : 'absolute',
                backgroundColor : '#000',
                opacity         :  '0.65',
                top             :  '0',
                left            :  '0',
                width           :  $('body').width(),
                lineHeight      :  '28px',
                zIndex          :  '99999',
                textIndent      :  '20px',
                color           :  '#fff'
            })
            .html('输出结果是： '+ msg +'</p>')
            .click(function(){
                $(this).mouseout(function(){
                    setTimeout(function(){
                        $('div#debug_dump').fadeOut('slow').empty().remove();
                    },time);
                });
            });
    };

});