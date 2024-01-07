<?php
// Fetch data using your Eloquent model
$data = \App\Models\UserInfo::all();
$settings = \App\Models\Setting::all();
?>
@foreach ($data as $item)


<div class="bg-primary">
    <div class="container flex flex-col justify-between py-6 sm:flex-row">
        @foreach ($settings as $setting)
      <p class="text-center font-body text-white md:text-left">

          {{$setting->copyright_section}}, {{$setting->site_name}}.
      </p>
      @endforeach
      <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
        <a href="{{$item->socialmedia_1_link}}">
          <i
            class="bx bxl-{{$item->socialmedia_1_icon}} text-2xl text-white hover:text-yellow"
          ></i>
        </a>
        <a href="{{$item->socialmedia_2_link}}" class="pl-4">
          <i class="bx bxl-{{$item->socialmedia_2_icon}} text-2xl text-white hover:text-yellow"></i>
        </a>
        <a href="{{$item->socialmedia_3_link}}" class="pl-4">
          <i class="bx bxl-{{$item->socialmedia_3_icon}} text-2xl text-white hover:text-yellow"></i>
        </a>
        <a href="{{$item->socialmedia_4_link}}" class="pl-4">
          <i class="bx bxl-{{$item->socialmedia_4_icon}} text-2xl text-white hover:text-yellow"></i>
        </a>
        <a href="{{$item->socialmedia_5_link}}" class="pl-4">
          <i class="bx bxl-{{$item->socialmedia_5_icon}} text-2xl text-white hover:text-yellow"></i>
        </a>
      </div>
    </div>
  </div>
  @endforeach
