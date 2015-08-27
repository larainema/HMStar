<div class="main_box" style="width: 100%">
    <div class="main_nei" style="margin: 40px auto">
        <div class="title">
            <h1>找回密码</h1>
            <div class="title_jindu">
                <p class=""><img src="" alt=""/></p>
                <ul>
                    <li class="re">输入注册邮箱/手机</li>
                    <li>设置新密码</li>
                    <li>完成</li>
                </ul>
            </div>
        </div>
        <div class="main_from">
            <div class="from_left"></div>
            <div class="from_right">
                <form action="/hmstar/user/passwordreset" method="post" name="form1" id="form1">
                    <table border="0px" style="font-size:12px" width="630px">
                        <tr>
                            <td><input name="name" type="text" id="name" style="width:256px;height: 35px;
                            background: url() no-repeat left center;
                            padding-left: 30px" placeholder="请输入邮箱或手机"/></td>
                            <td><div id="nameTip" style="width:250px"></div></td>
                        </tr>
                        <tr>
                            <td><input name="code" type="text" id="code" style="width:110px" placeholder="请输入验证码" />
                                <span><img id="fresh_valicode" src="/hmstar/user/imgcode/" alt=""/></span>
                                <a href="javascript:void(0);" onclick="document.getElementById('fresh_valicode').src='/hmstar/user/imgcode/' + Math.random();">看不清，换一张</a></td>
                            <td style="position: relative"><div id="codeTip" style="margin-top: 30px;*position: absolute;top: 12px"></div></td>
                        </tr>
                    </table>
                    <button id="button" class="btn">下一步</button>
            </div>
        </div>
    </div>
</div>
