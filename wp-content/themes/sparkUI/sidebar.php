<?php
/**
 * sidebar共同的样式
 */
?>
<!--sidebar.php-->
<?php
if(is_home() || is_front_page()) { //首页显示“首页侧栏”
    echo "首页边栏";
    if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_sidebar')){//dynamic_sidebar('注册时id或者name')
    }
}

if ( is_page('wiki') ) {//显示wiki侧栏”
    echo "wiki边栏";
    if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_wikisidebar')){
    }
}

if ( is_page(55) ) {//显示问答侧栏 参数为pageID 如何自动获取??
    if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_qasidebar')){
    }
    ?>
    <!--提问按钮-->
    <div class="sidebar_button" onclick="ask()">
        <p>我要提问</p>
    </div>
    <!--            热门标签-->
    <div class="sidebar_list">
        <div class="sidebar_list_header">
            <p style="font-size: large;display:inline-block;margin-top: 5%;font-weight: bold">热门标签</p>
            <a href="tag.php" style="color:gray;float: right;display: inline-block;margin-top: 5%">全部标签</a>
        </div>
        <!--                分割线-->
        <div class="sidebar_divline"></div>
        <!--                标签群   固定个数?  如何生成热门标签 将输入的东西换成--><?//php?><!--传入的数据-->
        <div style="word-wrap: break-word; word-break: keep-all;">
            <h4>
                <a class="label label-default">
                    舵机<span class="badge">(40)</span>
                </a>
                <a class="label label-default">
                    编译<span class="badge">(36)</span>
                </a>
                <a class="label label-default">
                    上传<span class="badge">(30)</span>
                </a>
                <a class="label label-default">
                    Mwatch<span class="badge">(20)</span>
                </a>
                <a class="label label-default">
                    OLED<span class="badge">(18)</span>
                </a>
                <a class="label label-default">
                    Wifi<span class="badge">(15)</span>
                </a>
                <a class="label label-default">
                    Wifi气象站<span class="badge">(10)</span>
                </a>
                <a class="label label-default">
                    蓝牙<span class="badge">(10)</span>
                </a>
                <a class="label label-default">
                    触摸<span class="badge">(8)</span>
                </a>
                <a class="label label-default">
                    声音<span class="badge">(5)</span>
                </a>
            </h4>
        </div>
    </div>

    <!--助教团-->
    <div class="sidebar_list">
        <div class="sidebar_list_header">
            <p style="font-size: large;display:inline-block;margin-top: 5%;font-weight: bold">助教团</p>
            <a href="join.php" style="color:gray;float: right;display: inline-block;margin-top: 5%">加入</a>
        </div>
        <!--分割线-->
        <div class="sidebar_divline"></div>
        <!--助教列表-->
        <ul class="list-group">
            <li class="list-group-item">
                <div style="display: inline-block;vertical-align: baseline">
                    <img src="<?php bloginfo("template_url")?>/img/avatar.png" style="margin-top: -15px">
                </div>
                <div style="display: inline-block; vertical-align: baseline">
                    <a href="personal.php">如影随风</a>
                    <p>北邮信通院大四学长</p>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: inline-block;vertical-align: baseline">
                    <img src="<?php bloginfo("template_url")?>/img/avatar.png" style="margin-top: -15px">
                </div>
                <div style="display: inline-block; vertical-align: baseline">
                    <a href="personal.php">如影随风</a>
                    <p>北邮信通院大四学长</p>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: inline-block;vertical-align: baseline">
                    <img src="<?php bloginfo("template_url")?>/img/avatar.png" style="margin-top: -15px">
                </div>
                <div style="display: inline-block; vertical-align: baseline">
                    <a href="personal.php">如影随风</a>
                    <p>北邮信通院大四学长</p>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: inline-block;vertical-align: baseline">
                    <img src="<?php bloginfo("template_url")?>/img/avatar.png" style="margin-top: -15px">
                </div>
                <div style="display: inline-block; vertical-align: baseline">
                    <a href="personal.php">如影随风</a>
                    <p>北邮信通院大四学长</p>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: inline-block;vertical-align: baseline">
                    <img src="<?php bloginfo("template_url")?>/img/avatar.png" style="margin-top: -15px">
                </div>
                <div style="display: inline-block; vertical-align: baseline">
                    <a href="personal.php">如影随风</a>
                    <p>北邮信通院大四学长</p>
                </div>
            </li>
        </ul>
    </div>

    <!--雷锋榜-->
    <div class="sidebar_list">
        <div class="sidebar_list_header">
            <p>雷锋榜</p>
            <!--列表头-->
            <ul id="helperTab" class="nav nav-pills" style="float: right">
                <li><a href="#helperday" data-toggle="tab" style="width: 20px;margin-top: 5px;">日</a></li>
                <li class="active"><a href="#helpermonth" data-toggle="tab" style="width: 20px;margin-top: 5px;">周</a></li>
            </ul>


            <!--                    <a href="#" style="color:gray;float: right;display: inline-block;margin-top: 5%">日</a>-->
            <!--                    <a href="#" style="color:gray;float: right;display: inline-block;margin-top: 5%">周</a>-->
        </div>
        <!--分割线-->
        <div class="sidebar_divline"></div><!--下面的是列表

                <!--列表内容 需要填写的都用php提取出来就行-->
        <div id="helperTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="helperday">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96答</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">Sun</a>
                        <p style="display: inline-block;float: right">65答</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">joy</a>
                        <p style="display: inline-block;float: right">65答</p>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="helpermonth">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96答</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96答</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96答</p>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--helper-->

    <!--            好问榜-->
    <div class="sidebar_list">
        <div class="sidebar_list_header">
            <p>好问榜</p>
            <!--列表头-->
            <ul id="askerTab" class="nav nav-pills" style="float: right">
                <li><a href="#askerday" data-toggle="tab" style="width: 20px;margin-top: 5px;">日</a></li>
                <li class="active"><a href="#askermonth" data-toggle="tab" style="width: 20px;margin-top: 5px;">周</a></li>
            </ul>


            <!--                   <a href="#" style="color:gray;float: right;display: inline-block;margin-top: 5%">日</a>-->
            <!--                   <a href="#" style="color:gray;float: right;display: inline-block;margin-top: 5%">周</a>-->
        </div>
        <!--分割线-->
        <div class="sidebar_divline"></div><!--下面的是列表

                <!--列表内容 需要填写的都用php提取出来就行-->
        <div id="askerTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="askerday">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96问</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">Sun</a>
                        <p style="display: inline-block;float: right">65问</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">joy</a>
                        <p style="display: inline-block;float: right">65问</p>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="askermonth">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96问</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96问</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php bloginfo("template_url")?>/img/n1.png" style="display: inline-block">
                        <img src="<?php bloginfo("template_url")?>/img/smallava.png" style="display: inline-block">
                        <a href="#" style="display:inline-block;">yangtianming314</a>
                        <p style="display: inline-block;float: right">96问</p>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--asker-->
<?php
}
?>


