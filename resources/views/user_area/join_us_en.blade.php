@extends('layouts.app')

@section('header_left_side')
<a class="navbar-brand"><img src="{{asset('user_area/white_logoo.png')}}" alt="logo" style="height:100px;"/></a>
@endsection

@section('header_right_side')
<a href="{{ route('arabic.form') }}" style="color: #1A76D1;font-size:18px;font-weight:600">عربي</a>
@endsection

@section('content')
<!-- Start Contact Us -->
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="col-lg-12">
                <div class="contact-us-form">
                    <h2>Join With Us</h2>
                    <p>If you have any questions please feel free to contact with us.</p>
                    <!-- Form -->
                    <form class="form" method="post" action="{{ route('english.form.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="department" class="nice-select">
                                        <option value="">Department</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="General surgery">General surgery</option>
                                        <option value="Plastic surgery">Plastic surgery</option>
                                        <option value="Dermatology">Dermatology</option>
                                        <option value="Neurology">Neurology</option>
                                        <option value="Pediatrics">Pediatrics</option>
                                        <option value="Ophthalmology">Ophthalmology</option>
                                        <option value="Urology">Urology</option>
                                        <option value="Gynecology">Gynecology</option>
                                        <option value="Orthopedics">Orthopedics</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="ENT">ENT</option>
                                        <option value="Oncology">Oncology</option>
                                        <option value="Anesthesia">Anesthesia</option>
                                        <option value="Psychiatry">Psychiatry</option>
                                        <option value="Neurosurgery">Neurosurgery</option>
                                        <option value="ICU">ICU</option>
                                        <option value="Emergency">Emergency</option>
                                        <option value="Geriatrics">Geriatrics</option>
                                        <option value="Radiology">Radiology</option>
                                        <option value="Pathology">Pathology</option>
                                        <option value="Nuclear medicine">Nuclear medicine</option>
                                        <option value="Hematology">Hematology</option>
                                        <option value="Rheumatology">Rheumatology</option>
                                        <option value="Infectious diseases">Infectious diseases</option>
                                        <option value="Endocrinology">Endocrinology</option>
                                        <option value="Nephrology">Nephrology</option>
                                        <option value="Pulmonology">Pulmonology</option>
                                        <option value="Allergy">Allergy</option>
                                        <option value="Gastroenterology">Gastroenterology</option>
                                        <option value="Clinical pharmacology">Clinical pharmacology</option>
                                        <option value="Family medicine">Family medicine</option>
                                        <option value="Public health">Public health</option>
                                        <option value="Occupational health">Occupational health</option>
                                        <option value="Health management">Health management</option>
                                        <option value="Forensic medicine">Forensic medicine</option>
                                        <option value="Sports medicine">Sports medicine</option>
                                        <option value="Geriatric medicine">Geriatric medicine</option>
                                        <option value="Audiology">Audiology</option>
                                        <option value="Neurobrain surgery">Neurobrain surgery</option>
                                        <option value="Spine surgery">Spine surgery</option>
                                        <option value="ICSI and IVF">ICSI and IVF</option>
                                        <option value="Rheumatology">Rheumatology</option>
                                        <option value="Endocrinology">Endocrinology</option>
                                        <option value="Gastroenterology">Gastroenterology</option>
                                        <option value="Pediatric surgery">Pediatric surgery</option>
                                        <option value="Cardiothoracic surgery">Cardiothoracic surgery</option>
                                        <option value="Allergy and immunology">Allergy and immunology</option>
                                        <option value="Nephrology">Nephrology</option>
                                        <option value="Family medicine">Family medicine</option>
                                        <option value="General medicine">General medicine</option>
                                        <option value="Orthopedics surgery">Orthopedics surgery</option>
                                        <option value="Pain management medicine">Pain management medicine</option>
                                        <option value="Vascular Surgery">Vascular Surgery</option>
                                        <option value="Pets">Pets</option>
                                        <option value="Oncology surgery">Oncology surgery</option>
                                        <option value="Vascular">Vascular</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="Addiction problems consultant">Addiction problems consultant</option>
                                        <option value="Sexual problems consultant">Sexual problems consultant</option>
                                        <option value="Tooth implant">Tooth implant</option>
                                        <option value="Skin beautification">Skin beautification</option>
                                        <option value="Reproductive system">Reproductive system</option>
                                        <option value="Therapeutic feeding">Therapeutic feeding</option>
                                        <option value="Growth monitoring">Growth monitoring</option>
                                        <option value="Psychiatry">Psychiatry</option>
                                        <option value="Nerve implantation">Nerve implantation</option>
                                        <option value="Addiction">Addiction</option>
                                        <option value="Behavior modification">Behavior modification</option>
                                        <option value="Family Guidance">Family Guidance</option>
                                        <option value="Rheumatism">Rheumatism</option>
                                        <option value="Athletic Medicine">Athletic Medicine</option>
                                        <option value="Spine surgery">Spine surgery</option>
                                        <option value="Joints">Joints</option>
                                        <option value="IVF">IVF</option>
                                        <option value="Endoscopy">Endoscopy</option>
                                        <option value="Gastroenterology">Gastroenterology</option>
                                        <option value="Diabetes">Diabetes</option>
                                        <option value=""></option>
                                        <option value="Kidney diseases">Kidney diseases</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="Blood & Immunology">Blood & Immunology</option>
                                        <option value="Ophthalmic surgery & laser">Ophthalmic surgery & laser</option>
                                        <option value="Liposuction">Liposuction</option>
                                        <option value="Burn treatment">Burn treatment</option>
                                        <option value="Gastroenterology">Gastroenterology</option>
                                        <option value="Internist">Internist</option>
                                        <option value="Nutrition">Nutrition</option>
                                        <option value="Spine surgery">Spine surgery</option>
                                        <option value="Pediatric">Pediatric</option>
                                        <option value="Nutrition">Nutrition</option>
                                        <option value="Endoscopy">Endoscopy</option>
                                        <option value="Liver diseases">Liver diseases</option>
                                        <option value="Rheumatology">Rheumatology</option>
                                        <option value="Athletic Medicine">Athletic Medicine</option>
                                        <option value="Joints">Joints</option>
                                        <option value="Diabetes">Diabetes</option>
                                        <option value="Echo">Echo</option>
                                        <option value="Pets Vaccinations">Pets Vaccinations</option>
                                        <option value="Pets Grooming">Pets Grooming</option>
                                        <option value="Difficulty learning">Difficulty learning</option>
                                        <option value="Oral and MaxillSurgery">Oral and MaxillSurgery</option>
                                    </select>
                                    @error('department')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="checkbox-container">
                                    <label>
                                        <input type="checkbox" name="job[]" value="clinic">
                                        Clinic
                                    </label>
                                    <label>
                                        <input type="checkbox" name="job[]" value="home_visit">
                                        Home Visit
                                    </label>
                                    <label>
                                        <input type="checkbox" name="job[]" value="online_consultant">
                                        Online Consultant
                                    </label>
                                    @error('job')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="city" class="nice-select">
                                        <option value="">City</option>
                                        <option value="Cairo">Cairo</option>
                                        <option value="Giza">Giza</option>
                                        <option value="Alexandria">Alexandria</option>
                                        <option value="Qena">Qena</option>
                                        <option value="Kafr el-Sheikh">Kafr el-Sheikh</option>
                                        <option value="Sinai">Sinai</option>
                                        <option value="Minya">Minya</option>
                                        <option value="Port Said">Port Said</option>
                                        <option value="Suez">Suez</option>
                                        <option value="Luxor">Luxor</option>
                                        <option value="Dakahlia">Dakahlia</option>
                                        <option value="Gharbia">Gharbia</option>
                                        <option value="Assiut">Assiut</option>
                                        <option value="Qalyubia">Qalyubia</option>
                                        <option value="Ismailia">Ismailia</option>
                                        <option value="Faiyum">Faiyum</option>
                                        <option value="Sharqia">Sharqia</option>
                                        <option value="Aswan">Aswan</option>
                                        <option value="Damietta">Damietta</option>
                                        <option value="Beheira">Beheira</option>
                                        <option value="Sohag">Sohag</option>
                                        <option value="Red Sea">Red Sea</option>
                                        <option value="Monufia">Monufia</option>
                                        <option value="Matrouh">Matrouh</option>
                                        <option value="Wadi Geded">Wadi Geded</option>
                                        <option value="Riyadh">Riyadh</option>
                                        <option value="Jeddah">Jeddah</option>
                                        <option value="Mecca">Mecca</option>
                                        <option value="North Coast - Sahel">North Coast - Sahel</option>
                                    </select>
                                    @error('city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="location" placeholder="Location">
                                    @error('location')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Scientific Certificate Image *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="scientific_certificate_image" id="scientific-certificate" >
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="scientific-certificate-name">No file chosen</div>
                                    @error('scientific_certificate_image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Syndicate Image *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="syndicate_image" id="syndicate-image" >
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="syndicate-image-name">No file chosen</div>
                                    @error('syndicate_image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Clinic Photos *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="clinic_photos" id="clinic-photos" >
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="clinic-photos-name">No file chosen</div>
                                    @error('clinic_photos')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Logo *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="logo" id="logo" >
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="logo-name">No file chosen</div>
                                    @error('logo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Doctor Image *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="doctor_image" id="doctor-image" >
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="doctor-image-name">No file chosen</div>
                                    @error('doctor_image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Professional License *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="professional_license" id="professional-license" >
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="professional-license-name">No file chosen</div>
                                    @error('professional_license')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn">Submit</button>
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
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('scientific-certificate-name').textContent = fileName;
    });

    document.getElementById('syndicate-image').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('syndicate-image-name').textContent = fileName;
    });

    document.getElementById('clinic-photos').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('clinic-photos-name').textContent = fileName;
    });

    document.getElementById('logo').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('logo-name').textContent = fileName;
    });

    document.getElementById('doctor-image').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('doctor-image-name').textContent = fileName;
    });

    document.getElementById('professional-license').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('professional-license-name').textContent = fileName;
    });
</script>

@endsection
