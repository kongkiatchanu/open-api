<?php $member = $this->session->userdata('member_logged_in');?>
<section class="app-brief" id="account">
    <div class="container left-align">
        <div class="section-header">
            <h2 class="dark-text title">บัญชีผู้ใช้</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title">อีเมล์
                    <?= $member['user_email'] ?> ได้รับการยืนยันเรียบร้อย
                </h5>
                <p class="m-0">API Key</p>
                <pre class="brush: javascript;"><?=$member['user_key']?></pre>
                <p><a href="/main/logout" class="btn btn-sm btn-dander"> ออกจากระบบ</a></p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1544377193-33dcf4d68fb5?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="">
            </div>
    </div>
</section>