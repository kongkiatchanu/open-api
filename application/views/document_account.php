<section class="app-brief" id="account">
				<div class="container left-align">
					<div class="section-header">
						<h2 class="dark-text title">บัญชีผู้ใช้</h2>
					</div>

					<div class="row">
						<div class="col-md-5">

							<div class="content-bx">
								<h5 class="title">Step 1 - ลงทะเบียนเพื่อขอใช้งาน APIs</h5>
								<p>กรุณากรอกข้อมูลตามแบบฟอร์มที่กำหนดให้ถูกต้อง
									ผู้ดูแลระบบสามารถลบบัญชีของท่านภายหลังได้ หากเห็นว่าข้อมูลที่ท่านสมัครมาไม่ถูกต้อง
								</p>
							</div>
							<div class="content-bx">
								<h5 class="title">Step 2 - ยืนยันอีเมล์</h5>
								<p>ระบบจะส่งอีเมล์ให้ท่านยืนยันการสมัคร</p>

							</div>
							<div class="content-bx">
								<h5 class="title">Step 3 - เข้าสู่ระบบเพื่อใช้งาน</h5>
								<p>ท่านสามารถเข้าสู่ระบบโดย อีเมล์ และ รหัสผ่าน ที่ท่านกำหนดตอนลงทะเบียน</p>
							</div>
						</div>
						<div class="col-md-5 offset-md-2">
							
							<div class="containerz" style="display:none">
								<div class="alert alert-warning">
								<h5 class="text-warning">กรุณาตรวจสอบข้อมูล</h5>
								<ol></ol>
								</div>
							</div>

							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingOne">
										<button class="accordion-button" type="button"
											data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
											aria-expanded="true" aria-controls="flush-collapseOne">
											ลงทะเบียน
										</button>
									</h2>
									<div id="flush-collapseOne" class="accordion-collapse collapse show"
										aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<form id="frm_register" action="<?=base_url('main/register')?>" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_name" class="form-label">ชื่อ - นามสกุล</label>
															<input type="text" class="form-control" name="access_name" required title="ชื่อ-นามสกุล">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_org"
																class="form-label">หน่วยงาน/สังกัด</label>
															<input type="text" class="form-control" name="access_org" required title="หน่วยงาน/สังกัด">
														</div>
													</div>
												</div>

												<div class="mb-3">
													<label for="access_purpose" class="form-label">วัตถุประสงค์การใช้งาน</label>
													<textarea class="form-control" name="access_purpose" rows="3" title="วัตถุประสงค์การใช้งาน"></textarea>
												</div>
												<div class="mb-3">
													<label for="access_email" class="form-label">อีเมล์ติดต่อ</label>
													<input type="email" class="form-control" name="access_email" id="access_email" required title="อีเมล์ติดต่อ">
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_password"
																class="form-label">รหัสผ่าน</label>
															<input type="password" class="form-control"
																name="access_password" id="access_password" required title="รหัสผ่าน">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_password_c"
																class="form-label">ยืนยันรหัสผ่าน</label>
															<input type="password" class="form-control"
																name="access_password_c" id="access_password_c" required title="ยืนยันรหัสผ่าน">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12 mb-3">
													<div class="g-recaptcha" data-sitekey="6LfegkgUAAAAAL-jtSQ3Bz8XR6M_usJU_-vZ6ozo"></div>
													</div>
												</div>

												<div class="mb-3">
													<div class="d-grid gap-2">
														<button type="submit" class="btn btn-primary">ลงทะเบียน</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingTwo">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
											aria-expanded="false" aria-controls="flush-collapseTwo">
											เข้าสู่ระบบ
										</button>
									</h2>
									<div id="flush-collapseTwo" class="accordion-collapse collapse"
										aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
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

							</div>

							
						</div>
					</div>

				</div>
			</section>

			<script type="text/javascript" src="<?= base_url('template') ?>/plugins/jquery-validation/js/jquery.validate.min.js"></script>
			<script type="text/javascript" src="<?= base_url('template') ?>/plugins/jquery-validation/js/additional-methods.min.js"></script>