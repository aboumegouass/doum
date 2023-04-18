<div class="GH_contact_form pl-3 pr-3">
    <div class="GH_contact_form-header">
        <p class="meta">ابقى على تواصل معنا!</p>
        <h3 class="title">اتصل بنا</h3>
    </div>
    
    <div class="alert alert-success form-control-msg js-form-success" role="alert">
        <p class="text-success"><i class="fa fa-check"></i> لقد تم إرسال الرسالة</p>
    </div>
    <form id="GHContactForm" class="needs-validation" novalidate action="" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
        <div class="form-group mb-2">
            <input type="text" placeholder="الاسم الكامل" id="GH_fullname" name="GH_fullname" class="form-control" required>
            <small class="text-danger form-control-msg">الاسم الكامل مطلوب</small>
        </div>

        <div class="form-group mb-2">
            <input required type="email" style="text-align: right" placeholder="ex: example@website.com" id="GH_email" name="GH_email" class="form-control">
            <small class="text-danger form-control-msg">البريد الإلكتروني مطلوب</small>
        </div>

        <div class="form-group">
            <textarea required name="GH_message" id="GH_message" placeholder="نص الرسالة" class="form-control"></textarea>
            <small class="text-danger form-control-msg">حقل نص الرسالة مطلوبة</small>
        </div>

        <div class="form-group py-1 pt-4">
            <button type="submit" style="width: 160px" class="btn butt-sm butt-primary2">إرسال</button>
            <div class="form-control-msg js-form-submession">
                <p class="text-info"> يرجى الانتضار...</p>
            </div>
            <div class="form-control-msg js-form-error">
                <p class="text-danger"><i class="icon remove"></i> حدث خطأ</p>
            </div>
        </div>

    </form>
</div>