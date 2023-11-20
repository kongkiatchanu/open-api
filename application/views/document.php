<?php $member = $this->session->userdata('member_logged_in'); ?>
<section class="app-brief" id="account">
    <div class="container left-align">
        <div class="section-header">
            <h2 class="dark-text title">บัญชีผู้ใช้</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title">คุณ
                    <?= $member['user_name'] ?> ได้รับการยืนยันเรียบร้อย
                </h5>
                <p class="m-0">API Key</p>
                <pre class="brush: javascript;"><?= $member['user_key'] ?></pre>
                <p><a href="/main/logout" class="btn btn-sm btn-danger"> ออกจากระบบ</a></p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</section>