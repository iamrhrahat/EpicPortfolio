<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
            $settings = \App\Models\Setting::all();
        ?>
            @foreach ($settings as $setting)
  <meta charset="utf-8" />

  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

  <meta
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    name="viewport"
  />

  <title>{{$post->title}} | {{$setting->site_name}}</title>
  <meta name="description" content="{{$post->meta_description ?: $post->shortBody(250)}}" />
  <meta name="keywords" content="{{$post->meta_keyword}}" />



  <meta property="og:title" content="{{$post->meta_title ?: $post->title}} | {{$setting->site_name}}" />
  <meta property="og:description" content="{{$post->shortBody(150)}}" />
<meta property="og:image" content="{{asset ('storage/' . $post->thumbnail)}}" />


  <meta property="og:locale" content="en_US" />

  <link
    rel="canonical"
    href="//post"
  />

  <meta
    property="og:url"
    content="//post"
  />

  <meta
    name="description"
    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  />

  <link rel="icon" type="image/png" href="{{asset ('storage/' . $setting->favicon)}}" />

  <meta name="theme-color" content="#5540af" />

  <meta property="og:site_name" content="Atom Template" />

  <meta property="og:image" content="//assets/img/social.jpg" />

  <meta name="twitter:card" content="summary_large_image" />

  <meta name="twitter:site" content="@tailwindmade" />

  <link
    crossorigin="crossorigin"
    href="https://fonts.gstatic.com"
    rel="preconnect"
  />

  <link
    as="style"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="preload"
  />

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <link
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    rel="stylesheet"
  />

  <link
    crossorigin="anonymous"
    href="/assets/styles/main.min.css"
    media="screen"
    rel="stylesheet"
  />

  <script
    defer
    src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
  ></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/atom-one-dark.min.css"
  />

  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>

  <script>
    hljs.highlightAll();
  </script>

</head>


  <body
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative"
    x-data="{ mobileMenu: false }"
  >

    <div id="main" class="relative">
      <div
  x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        mobileMenu = false;
        this.triggerNavItem(id)
    }
}"
>
  <div class="w-full z-50 top-0 py-3 sm:py-5  bg-primary ">
  <div class="container flex items-center justify-between">
    <div>
      <a href="/">
        <img src="{{asset ('storage/' . $setting->logo)}}" class="w-24 lg:w-48" alt="{{$setting->site_name}}" />
      </a>
    </div>
    @endforeach
    <div class="hidden lg:block">
      <ul class="flex items-center">

        <li class="group pl-6">

          <a
            href="/#about"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >About</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#services"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Services</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#portfolio"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Portfolio</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#clients"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Clients</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#work"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Work</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#statistics"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Statistics</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#blog"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Blog</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <a
            href="/#contact"
            class="cursor-pointe pt-0.5 font-header font-semibold uppercase text-white"
            >Contact</a
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

      </ul>
    </div>
    <div class="block lg:hidden">
      <button @click="mobileMenu = true">
        <i class="bx bx-menu text-4xl text-white"></i>
      </button>
    </div>
  </div>
</div>

<div
  class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
  :class="{ 'opacity-100 pointer-events-auto': mobileMenu }"
>
  <div
    class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3"
  >
    <button
      class="absolute top-0 right-0 mt-4 mr-4"
      @click="mobileMenu = false"
    >
      <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
    </button>

    <ul class="mt-8 flex flex-col">

      <li class="py-2">

        <a
          href="/#about"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >About</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#services"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Services</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#portfolio"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Portfolio</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#clients"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Clients</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#work"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Work</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#statistics"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Statistics</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#blog"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Blog</a
        >

      </li>

      <li class="py-2">

        <a
          href="/#contact"
          class="pt-0.5 font-header font-semibold uppercase text-white"
          >Contact</a
        >

      </li>

    </ul>
  </div>
</div>


<div><div class="container py-6 md:py-10">
    <div class="mx-auto max-w-4xl">
      <div class="">
        <h1
          class="pt-5 font-body text-3xl font-semibold text-primary sm:text-4xl md:text-5xl xl:text-6xl"
        >
        {{$post->title}}
        </h1>
        <div class="w-full mt-10">
        <img class="flex h-full w-full bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-full" src="{{asset ('storage/' . $post->thumbnail)}}" />
    </div>

        <div class="flex items-center pt-5 md:pt-10">
            <?php
            $data = \App\Models\UserInfo::all();
            ?>
          <div>

            <img
              src="{{asset ('storage/' . $data->first()->image)}}"
              class="h-20 w-20 rounded-full border-2 border-grey-70 shadow"
              alt="author image"
            />

          </div>
          <div class="pl-5">


            @if($data->isNotEmpty())
                <span class="block font-body text-xl font-bold text-grey-10">{{$data->first()->name}}</span>
            @else
                <span class="block font-body text-xl font-bold text-grey-10">No user found</span>
            @endif

            <span class="block pt-1 font-body text-xl font-bold text-grey-30"
              >{{$post->getFormattedDate()}}</span
            >
          </div>
        </div>
      </div>
  <div class="prose max-w-none pt-8"><p>
    {!! $post->body !!}
  </p>
  </div>

    <div class="mt-10 flex justify-between border-t border-lila py-12">
        @if ($prev)

      <a href="{{route('view', $prev)}}" class="flex items-center text-left">
        <i class="bx bx-left-arrow-alt text-2xl text-primary"></i>
        <span
          class="block pl-2 font-body text-lg font-bold uppercase text-primary md:pl-5"
          >Previous Post</span
        >
      </a>

      @endif
      @if ($next)

      <a href="{{route('view', $next)}}" class="flex items-center text-right">
        <span
          class="block pr-2 font-body text-lg font-bold uppercase text-primary md:pr-5"
          >Next Post</span
        >
        <i class="bx bx-right-arrow-alt text-2xl text-primary"></i>
      </a>

      @endif
    </div>
    <div
      class="flex flex-col items-center border-t border-lila py-12 pt-12 md:flex-row md:items-start xl:pb-20"
    >
      <div class="w-3/4 sm:w-2/5 lg:w-1/4 xl:w-1/5">
        <img
          src="{{asset ('storage/' . $data->first()->image)}}"
          class="rounded-full shadow"
          alt="{{$data->first()->name}}"
        />
      </div>
      <div class="ml-0 text-center md:ml-10 md:w-5/6 md:text-left">
        <h3 class="pt-10 font-body text-2xl font-bold text-secondary md:pt-0">
          {{$data->first()->name}}
        </h3>
        <p
          class="pt-5 font-body text-lg leading-8 text-secondary sm:leading-9 md:text-xl md:leading-9 lg:leading-9 xl:leading-9"
        >
        {{$data->first()->about_user}}

        </p>
        <div class="flex items-center justify-center pt-5 md:justify-start">
          <a href="{{$data->first()->socialmedia_1_link}}">
            <i
              class="bx bxl-{{$data->first()->socialmedia_1_icon}} text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="{{$data->first()->socialmedia_2_link}}" class="pl-4">
            <i
              class="bx bxl-{{$data->first()->socialmedia_2_icon}} text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="{{$data->first()->socialmedia_3_link}}" class="pl-4">
            <i
              class="bx bxl-{{$data->first()->socialmedia_3_icon}} text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="{{$data->first()->socialmedia_4_link}}" class="pl-4">
            <i
              class="bx bxl-{{$data->first()->socialmedia_4_icon}} text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="{{$data->first()->socialmedia_5_link}}" class="pl-4">
            <i
              class="bx bxl-{{$data->first()->socialmedia_5_icon}} text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

      @include('footer')

    </div>

    <script src="/assets/js/main.js"></script>


  </body>
</html>
