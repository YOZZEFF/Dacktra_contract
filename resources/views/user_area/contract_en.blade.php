@extends('layouts.app')

@section('header_left_side')
<a class="navbar-brand">
    <img src="{{ asset('user_area/white_logoo.png') }}" alt="logo" style="height: 100px;" />
</a>
@endsection

@section('header_right_side')
<a href="{{ route('arabic.contract') }}" style="color: #1A76D1; font-size: 18px; font-weight: 600;">عربي</a>
@endsection

@section('styles')
<style>
    .page-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 150vh;
        background-color: #f8f9fa;
        padding: 20px;
        text-align: left; /* Align text to the left */
    }

    .contract-text {
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: 600;
    }

    .pdf-container {
        width: 100%;
        max-width: 1200px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* overflow: hidden; */
    }

    .pdf-container iframe {
        width: 100%;
        height: 100vh;
    }
    .form-container {
        width: 100%;
        max-width: 600px; /* Limit form width for better readability */
        padding: 20px;
        margin-top: 30px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .form-container label {
        display: flex;
        align-items: center;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .form-container input[type="checkbox"] {
        margin-right: 10px;
        accent-color: #1A76D1; /* Customize the checkbox color */
    }

    .form-container button {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #1A76D1; /* Primary button color */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-container button:hover {
        background-color: #155a8a; /* Darker shade on hover */
    }
</style>
@endsection

@section('content')
<div class="page-container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="contract-text container">
        <h4>Please read the contract carefully and if you agree to join us, click on the checkbox at the bottom of the contract.</h4>
    </div>
    <div class="pdf-container">

        <iframe src="{{ $pdfUrl }}" frameborder="0"></iframe>

        </iframe>
    </div>
    <div class="form-container">
        <form action="{{route('submit.contract')}}" method="POST">
            @csrf
            <label>
                <input type="checkbox" name="agreement" value="yes" required>
                I agree to the terms and conditions
            </label>
            <button type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
