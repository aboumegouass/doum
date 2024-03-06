<div class="relative isolate overflow-hidden bg-gray-900 py-6 sm:py-10 max-sm:my-3 lg:py-12 rounded-md">
    <div class="px-4 lg:px-6">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">ابقى على تواصل معنا!</h2>
                <p class="mt-1 mb-3 text-xl text-white/40">اتصل بنا</p>
                <div class="GH_contact_form">
                    <div class="GH_contact_form-header">
                        <h3 class="title"></h3>
                    </div>

                    <div class="alert alert-success form-control-msg js-form-success" role="alert">
                        <p class="text-success"><i class="fa fa-check"></i> لقد تم إرسال الرسالة</p>
                    </div>
                    <form id="GHContactForm" class="needs-validation" novalidate action="" method="post"
                        data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                        <div class="mb-2">
                            <input type="text" placeholder="الاسم الكامل" id="GH_fullname" name="GH_fullname"
                                class="form-control block p-2 px-3 w-full rounded-lg bg-white/10 border border-black/20"
                                required>
                            <small class="text-danger form-control-msg">الاسم الكامل مطلوب</small>
                        </div>

                        <div class="mb-2">
                            <input required type="email" style="text-align: right" placeholder="ex: example@website.com"
                                id="GH_email" name="GH_email"
                                class="form-control block p-2 px-3 w-full rounded-lg bg-white/10 border border-black/20">
                            <small class="text-danger form-control-msg">البريد الإلكتروني مطلوب</small>
                        </div>

                        <div class="">
                            <textarea required name="GH_message" id="GH_message" placeholder="نص الرسالة"
                                class="form-control block p-2 px-3 w-full rounded-lg bg-white/10 border border-black/20"></textarea>
                            <small class="text-danger form-control-msg">حقل نص الرسالة مطلوبة</small>
                        </div>

                        <div class="py-1 pt-4">
                            <button type="submit"
                                class="rounded-md font-bold justify-center bg-white text-[#20232e] flex w-full py-2 p-3">إرسال</button>
                            <div class="form-control-msg js-form-submession">
                                <p class="text-info"> يرجى الانتضار...</p>
                            </div>
                            <div class="form-control-msg js-form-error">
                                <p class="text-danger"><i class="icon remove"></i> حدث خطأ</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
</div>