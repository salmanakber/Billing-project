@if (!session()->has('resetCodeView'))
    @php
        header('Location: ' . URL::to('/forgot-pass'), true, 302);
        exit();
    @endphp
@endif

@extends('Auth.layout')

@section('title')
reset-code
@endsection

@section('content')

  <!-- Content -->

  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <!-- /Left Text -->
      <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img
            src="{{asset('img/illustrations/auth-verify-email-illustration-light.png')}}"
            alt="auth-verify-email-cover"
            class="img-fluid my-5 auth-illustration"
            data-app-light-img="illustrations/auth-verify-email-illustration-light.png"
            data-app-dark-img="illustrations/auth-verify-email-illustration-dark.png"
          />

          <img
            src="{{asset('img/illustrations/bg-shape-image-light.png')}}"
            alt="auth-verify-email-cover"
            class="platform-bg"
            data-app-light-img="illustrations/bg-shape-image-light.png"
            data-app-dark-img="illustrations/bg-shape-image-dark.png"
          />
        </div>
      </div>
      <!-- /Left Text -->

      <!--  Verify email -->
      <div class="d-flex col-12 col-lg-5 align-items-center p-4 p-sm-5">
        <div class="w-px-400 mx-auto">
          <div class="app-brand mb-4">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0"
                  />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616"
                  />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0"
                  />
                </svg>
              </span>
            </a>
          </div>
          <h3 class="mb-1 fw-bold">Active your account ✉️</h3>
          <p class="text-start mb-4">
            @if (session('success-msg'))
                {{ session('success-msg') }}
            @endif
            @if (session('error-msg'))
                {{ session('error-msg') }}
            @endif
          </p>
            <form id="formAuthentication" class="mb-3" action="{{route('reset-save-code')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="number" class="form-label">Verifycation Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="verify_code"
                  name="verify_code"
                  placeholder="Enter Code"
                  autofocus
                />
              </div>
            <button type="submit" class="btn btn-primary w-100 mb-3"> Submit </button>
          </form>
        </div>
      </div>
      <!-- / Verify email -->
    </div>
  </div>

  <!-- / Content -->



@endsection