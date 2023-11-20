<section class="app-brief" id="account">
    <div class="container left-align">
        <div class="section-header">
            <h2 class="dark-text title">บัญชีผู้ใช้</h2>
        </div>




        <div class="row">
            <div class="col-md-6">
                <h5 class="title">อีเมล์
                    <?= $rs[0]['user_email'] ?>
                </h5>
                <p class="text-success">ได้รับการยืนยันเรียบร้อย</p>
                <p>กรุณาเข้าสู่ระบบเพื่อรับ API Key</p>
            </div>
            <div class="col-md-5">
                <form action="/main/login" method="post">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">อีเมล์</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10 offset-sm-2">
                            <button class="btn btn-primary">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</section>