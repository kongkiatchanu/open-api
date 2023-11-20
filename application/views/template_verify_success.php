<section class="app-brief" id="account">
    <div class="container left-align">
        <div class="section-header">
            <h2 class="dark-text title">บัญชีผู้ใช้</h2>
        </div>

        <div class="content-bx">
            <h5 class="title">อีเมล์ <?=$rs[0]['user_email']?> ได้รับการยืนยันเรียบร้อย</h5>
            <p>API Key</p>
            <pre class="brush: javascript; h-100">
            <?=$rs[0]['user_key']?>
            </pre>
        </div>
    </div>
</section>