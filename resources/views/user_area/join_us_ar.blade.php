@extends('layouts.app')
@section('header_left_side')
<a href="{{ route('english.form') }}" style="color: #16528f;font-size:18px;font-weight:600">English</a>
@endsection
@section('header_right_side')
<a class="navbar-brand"><img src="{{asset('user_area/white_logoo.png')}}" alt="logo" style="height:100px;"/></a>
@endsection
@section('styles')
<style>
.contact-us .contact-us-form h2:before{
	position:absolute !important;
	content:"" !important;
	right:0 !important;
	bottom:0 !important;
	height:2px !important;
	width:50px !important;
	background:#1A76D1 !important;
}

.checkbox-container label {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.checkbox-container input[type="checkbox"] {
    margin: 0 5px;
}

/* LTR specific styles */
.checkbox-container.ltr label {
    direction: ltr;
}

.checkbox-container.ltr input[type="checkbox"] {
    margin-right: 10px; /* Adjust the padding for LTR */
}

/* RTL specific styles */
.checkbox-container.rtl label {
    direction: rtl;
}

.checkbox-container.rtl input[type="checkbox"] {
    margin-left: 10px; /* Adjust the padding for RTL */
}
.nice-select {
    width: 100%;
    padding: 10px !important;
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
    background-color: #fff !important;
    direction: rtl !important;
    text-align: right !important;
    font-size: 16px !important;
}
.nice-select option {
    text-align: right !important;
    direction: rtl !important;
    padding: 10px !important;
}

.nice-select .option {
    cursor: pointer !important;
    font-weight: 400 !important;
    line-height: 40px !important;
    list-style: none !important;
    padding-left: 18px !important;
    padding-right: 29px !important;
    text-align: right !important; /* Right align text */
    transition: all 0.2s !important;
}
.nice-select:after {

    display: block !important;
    position: absolute;
    right:460px;

}


</style>
@endsection
@section('content')
<!-- Start Contact Us -->
<section class="contact-us section" style="direction: rtl; text-align: right;">
    <div class="container">
        <div class="inner">
            <div class="col-lg-12">
                <div class="contact-us-form" >
                    <h2 style="direction: rtl; text-align: right;">انضم إلينا</h2>
                    <p style="direction: rtl; text-align: right;font-size:18px;">إذا كان لديك أي أسئلة، فلا تتردد في التواصل معنا.</p>
                    <!-- Form -->
                    <form class="form" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="" required="" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" >
                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="الهاتف" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="كلمة المرور" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="department" class="nice-select" >
                                        <option value="">القسم</option>
                                        <option value="1">طبيب أسنان</option>
                                        <option value="2">الجراحة العامة</option>
                                        <option value="3">جراحة التجميل</option>
                                        <option value="4">الأمراض الجلدية</option>
                                        <option value="5">طب الأعصاب</option>
                                        <option value="6">طب الأطفال</option>
                                        <option value="7">طب العيون</option>
                                        <option value="8">جراحة المسالك البولية</option>
                                        <option value="9">طب النساء والتوليد</option>
                                        <option value="10">طب العظام</option>
                                        <option value="11">طب القلب</option>
                                        <option value="12">الأنف والأذن والحنجرة</option>
                                        <option value="13">علم الأورام</option>
                                        <option value="14">التخدير</option>
                                        <option value="15">الطب النفسي</option>
                                        <option value="16">جراحة الأعصاب</option>
                                        <option value="17">العناية المركزة</option>
                                        <option value="18">الطوارئ</option>
                                        <option value="19">طب الشيخوخة</option>
                                        <option value="20">الأشعة</option>
                                        <option value="21">علم الأمراض</option>
                                        <option value="22">الطب النووي</option>
                                        <option value="23">أمراض الدم</option>
                                        <option value="24">الروماتيزم</option>
                                        <option value="25">الأمراض المعدية</option>
                                        <option value="26">الغدد الصماء</option>
                                        <option value="27">طب الكلى</option>
                                        <option value="28">طب الرئة</option>
                                        <option value="29">الحساسية</option>
                                        <option value="30">أمراض الجهاز الهضمي</option>
                                        <option value="31">علم الأدوية السريرية</option>
                                        <option value="32">طب الأسرة</option>
                                        <option value="33">الصحة العامة</option>
                                        <option value="34">صحة العمل</option>
                                        <option value="35">إدارة الصحة</option>
                                        <option value="36">الطب الشرعي</option>
                                        <option value="37">طب الرياضة</option>
                                        <option value="38">طب الشيخوخة</option>
                                        <option value="39">علم السمع</option>
                                        <option value="41">جراحة الدماغ والأعصاب</option>
                                        <option value="42">جراحة العمود الفقري</option>
                                        <option value="43">تقنيات الإنجاب المساعدة (ICSI و IVF)</option>
                                        <option value="44">الروماتيزم</option>
                                        <option value="45">الغدد الصماء</option>
                                        <option value="46">أمراض الجهاز الهضمي</option>
                                        <option value="47">جراحة الأطفال</option>
                                        <option value="49">جراحة القلب والصدر</option>
                                        <option value="50">الحساسية والمناعة</option>
                                        <option value="51">طب الكلى</option>
                                        <option value="52">طب الأسرة</option>
                                        <option value="53">الطب العام</option>
                                        <option value="55">جراحة العظام</option>
                                        <option value="57">طب إدارة الألم</option>
                                        <option value="58">جراحة الأوعية الدموية</option>
                                        <option value="59">الحيوانات الأليفة</option>
                                        <option value="60">جراحة الأورام</option>
                                        <option value="61">الأوعية الدموية</option>
                                        <option value="62">طب القلب</option>
                                        <option value="65">استشاري مشاكل الإدمان</option>
                                        <option value="66">استشاري المشاكل الجنسية</option>
                                        <option value="67">زرع الأسنان</option>
                                        <option value="68">تجميل البشرة</option>
                                        <option value="69">جهاز التناسل</option>
                                        <option value="71">التغذية العلاجية</option>
                                        <option value="73">مراقبة النمو</option>
                                        <option value="74">الطب النفسي</option>
                                        <option value="75">زرع الأعصاب</option>
                                        <option value="77">الإدمان</option>
                                        <option value="78">تعديل السلوك</option>
                                        <option value="79">الإرشاد الأسري</option>
                                        <option value="80">الروماتيزم</option>
                                        <option value="81">الطب الرياضي</option>
                                        <option value="82">جراحة العمود الفقري</option>
                                        <option value="83">المفاصل</option>
                                        <option value="84">التخصيب في المختبر (IVF)</option>
                                        <option value="85">التنظير الداخلي</option>
                                        <option value="87">أمراض الجهاز الهضمي</option>
                                        <option value="88">مرض السكري</option>
                                        <option value="89"></option>
                                        <option value="90">أمراض الكلى</option>
                                        <option value="91">طب القلب</option>
                                        <option value="93">الدم والمناعة</option>
                                        <option value="94">جراحة العيون والليزر</option>
                                        <option value="95">شفط الدهون</option>
                                        <option value="97">علاج الحروق</option>
                                        <option value="99">أمراض الجهاز الهضمي</option>
                                        <option value="100">الطبيب الداخلي</option>
                                        <option value="101">التغذية</option>
                                        <option value="109">جراحة العمود الفقري</option>
                                        <option value="110">طب الأطفال</option>
                                        <option value="111">التغذية</option>
                                        <option value="112">التنظير الداخلي</option>
                                        <option value="113">أمراض الكبد</option>
                                        <option value="115">الروماتيزم</option>
                                        <option value="117">الطب الرياضي</option>
                                        <option value="118">المفاصل</option>
                                        <option value="119">مرض السكري</option>
                                        <option value="120">الأشعة الصوتية</option>
                                        <option value="121">تطعيمات الحيوانات الأليفة</option>
                                        <option value="123">تجميل الحيوانات الأليفة</option>
                                        <option value="124">صعوبة التعلم</option>
                                        <option value="129">جراحة الفم والفك</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-container" style="font-size:18px;">
                                    <label>
                                        <input type="checkbox" name="clinic" value="clinic">
                                        العيادة
                                    </label>
                                    <label>
                                        <input type="checkbox" name="home_visit" value="home_visit">
                                        الزيارة المنزلية
                                    </label>
                                    <label>
                                        <input type="checkbox" name="online_consultant" value="online_consultant">
                                        الاستشارة عبر الإنترنت
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="city" class="nice-select">
                                        <option value="">المدينة</option>
                                        <option value="1">القاهرة</option>
                                        <option value="3">الجيزة</option>
                                        <option value="4">الإسكندرية</option>
                                        <option value="5">قنا</option>
                                        <option value="7">كفر الشيخ</option>
                                        <option value="8">سيناء</option>
                                        <option value="9">المنيا</option>
                                        <option value="10">بورسعيد</option>
                                        <option value="11">السويس</option>
                                        <option value="12">الأقصر</option>
                                        <option value="13">الدقهلية</option>
                                        <option value="14">الغربية</option>
                                        <option value="15">أسيوط</option>
                                        <option value="6">القليوبية</option>
                                        <option value="16">الإسماعيلية</option>
                                        <option value="17">الفيوم</option>
                                        <option value="18">الشرقية</option>
                                        <option value="19">أسوان</option>
                                        <option value="20">دمياط</option>
                                        <option value="21">البحيرة</option>
                                        <option value="22">سوهاج</option>
                                        <option value="23">البحر الأحمر</option>
                                        <option value="24">المنوفية</option>
                                        <option value="25">مطروح</option>
                                        <option value="27">الوادي الجديد</option>
                                        <option value="28">الرياض</option>
                                        <option value="29">جدة</option>
                                        <option value="30">مكة المكرمة</option>
                                        <option value="32">الساحل الشمالي</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text"  name="location" placeholder="الموقع" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size:18px;">صورة الشهادة العلمية * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="scientific_certificate_image" id="scientific-certificate" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="scientific-certificate-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size:18px;">صورة النقابة * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="syndicate_image" id="syndicate-image" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="syndicate-image-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Clinic Photos -->
                                <div class="form-group">
                                    <label style="font-size:18px;">صور العيادة *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="clinic_photos" id="clinic-photos" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="clinic-photos-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label style="font-size:18px;">الشعار * </label>
                                <div class="file-input-container">
                                    <input type="file" name="logo" id="logo" required>
                                    <span class="file-input-label">اختر ملف</span>
                                </div>
                                <div class="file-name" id="logo-name">لم يتم اختيار ملف</div>
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label style="font-size:18px;">صورة الطبيب * </label>
                            <div class="file-input-container">
                                <input type="file" name="doctor_image" id="doctor-image" required>
                                <span class="file-input-label">اختر ملف</span>
                            </div>
                            <div class="file-name" id="doctor-image-name">لم يتم اختيار ملف</div>
                        </div>
                    </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label style="font-size:18px;">الرخصة المهنية * </label>
                        <div class="file-input-container">
                            <input type="file" name="professional_license" id="professional-license" required>
                            <span class="file-input-label">اختر ملف</span>
                        </div>
                        <div class="file-name" id="professional-license-name">لم يتم اختيار ملف</div>
                    </div>
                </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn">إرسال الآن</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact Us -->
@endsection
@section('scripts')
<script>
    document.getElementById('scientific-certificate').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
        document.getElementById('scientific-certificate-name').textContent = fileName;
    });

    document.getElementById('syndicate-image').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
        document.getElementById('syndicate-image-name').textContent = fileName;
    });
    document.getElementById('clinic-photos').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
    document.getElementById('clinic-photos-name').textContent = fileName;
});

document.getElementById('logo').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
    document.getElementById('logo-name').textContent = fileName;
});

document.getElementById('doctor-image').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
    document.getElementById('doctor-image-name').textContent = fileName;
});

document.getElementById('professional-license').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
    document.getElementById('professional-license-name').textContent = fileName;
});
</script>

@endsection
