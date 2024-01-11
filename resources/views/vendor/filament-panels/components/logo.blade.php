<?php
            $settings = \App\Models\Setting::all();
        ?>
            @foreach ($settings as $setting)
<img src="{{asset ('storage/' . $setting->logo)}}" class=" h-16" alt="{{$setting->site_name}}" />
@endforeach
