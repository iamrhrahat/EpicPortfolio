
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

  <title>Homepage | {{$setting->site_name}}</title>

  <meta property="og:title" content="Homepage | Atom Template" />

  <meta property="og:locale" content="en_US" />

  <link
    rel="canonical"
    href="//"
  />

  <meta
    property="og:url"
    content="//"
  />

  <meta
    name="description"
    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  />

  <link rel="icon" type="image/png" href="{{asset ('storage/' . $setting->favicon)}}" />

  <meta name="theme-color" content="#5540af" />

  <meta property="og:site_name" content="Atom Template" />

  <meta property="og:image" content="{{asset ('assets/img/social.jpg')}}" />

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
    href="{{asset ('assets/styles/main.min.css')}}"
    media="screen"
    rel="stylesheet"
  />

  <script
    defer
    src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
  ></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


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
  <div class="w-full z-50 top-0 py-3 sm:py-5  absolute
  ">
  <div class="container flex items-center justify-between">
    <div>
      <a href="/">
        <img src="{{asset ('storage/' . $setting->logo)}}" class="w-24 lg:w-48" alt="{{$setting->site_name}}" />
      </a>
    </div>
    <div class="hidden lg:block">
      <ul class="flex items-center">

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#about')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >About</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#services')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Services</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#portfolio')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Portfolio</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#clients')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Clients</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#work')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Work</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#statistics')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Statistics</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#blog')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Blog</span
          >

          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">

          <span
            @click="triggerNavItem('#contact')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Contact</span
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
      <img src="{{asset ('assets/img/icon-close.svg')}}" class="h-10 w-auto" alt="" />
    </button>

    <ul class="mt-8 flex flex-col">

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#about')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >About</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#services')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Services</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#portfolio')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Portfolio</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#clients')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Clients</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#work')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Work</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#statistics')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Statistics</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#blog')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Blog</span
        >

      </li>

      <li class="py-2">

        <span
          @click="triggerMobileNavItem('#contact')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Contact</span
        >

      </li>

    </ul>
  </div>
</div>


      <div><div
  class="relative bg-cover bg-center bg-no-repeat py-8"
  style="background-image: {{asset (' url(/assets/img/bg-hero.jpg)')}}"
>
  <div
    class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"
  ></div>

  <div
    class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48"
  >
    <div class="flex flex-col items-center justify-center lg:flex-row">
        <?php
// Fetch data using your Eloquent model
$data = \App\Models\UserInfo::all();
$a_data = \App\Models\AboutModel::all();
$image = \App\Models\Portfolio::all();
$clients = \App\Models\Client::all();
$experiences = \App\Models\Experience::all();
$services = \App\Models\Service::all();
$achivements = \App\Models\Achivement::all();
$posts = \App\Models\Blog::all()->where('active', '=', true);
?>
 @foreach ($data as $item)
      <div class="rounded-full border-8 border-primary shadow-xl">
        <img
          src="{{asset ('storage/' . $item->image)}}"
          class="h-48 rounded-full sm:h-56 object-scale-down"
          alt="{{$item->name}}" style="width: 224px;"
        />
      </div>




      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1
          class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl"
        >
          Hello I'm {{$item->name}}!
        </h1>
        <div
          class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start"
        >
          <div
            class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"
          >
            <p class="font-body text-lg uppercase text-white">Let's connect</p>
            <div class="hidden sm:block">
              <i class="bx bx-chevron-right text-3xl text-yellow"></i>
            </div>
          </div>
          <div
            class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
          >
            <a href="{{$item->socialmedia_1_link}}">
              <i
                class="bx bxl-{{$item->socialmedia_1_icon}} text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_2_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_2_icon}} text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_3_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_3_icon}} text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_4_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_4_icon}} text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_5_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_5_icon}} text-2xl text-white hover:text-yellow"
              ></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="bg-grey-50" id="about">
  <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
    @foreach ($a_data as $about)


    <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
      <h2
        class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
      >
      {{$about->Section}}
      </h2>
      <h4
        class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
        {{$about->title}}
      </h4>
      <p class="pt-6 font-body leading-relaxed text-grey-20">
        {{$about->description}}
      </p>
      <div
        class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start"
      >
        <div class="flex items-center justify-center sm:justify-start">
          <p class="font-body text-lg font-semibold uppercase text-grey-20">
            Connect with me
          </p>
          <div class="hidden sm:block">
            <i class="bx bx-chevron-right text-2xl text-primary"></i>
          </div>
        </div>
        <div
            class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
          >
            <a href="{{$item->socialmedia_1_link}}">
              <i
                class="bx bxl-{{$item->socialmedia_1_icon}} text-2xl text-primary hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_2_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_2_icon}} text-2xl text-primary hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_3_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_3_icon}} text-2xl text-primary hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_4_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_4_icon}} text-2xl text-primary hover:text-yellow"
              ></i>
            </a>
            <a href="{{$item->socialmedia_5_link}}" class="pl-4">
              <i
                class="bx bxl-{{$item->socialmedia_5_icon}} text-2xl text-primary hover:text-yellow"
              ></i>
            </a>
          </div>
      </div>
    </div>
    @endforeach
    <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
      <div>
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">
            {{$about->skill_1}}
          </h4>
          <h3 class="font-body text-3xl font-bold text-primary">{{$about->skill_1_p}}%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: {{$about->skill_1_p}}%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">{{$about->skill_2}}</h4>
          <h3 class="font-body text-3xl font-bold text-primary">{{$about->skill_2_p}}%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: {{$about->skill_2_p}}%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">
            {{$about->skill_3}}
          </h4>
          <h3 class="font-body text-3xl font-bold text-primary">{{$about->skill_3_p}}%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: {{$about->skill_3_p}}%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">{{$about->skill_4}}</h4>
          <h3 class="font-body text-3xl font-bold text-primary">{{$about->skill_4_p}}%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: {{$about->skill_4_p}}%"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="services">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Here's what I'm good at
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    These are the services I offer
  </h3>

  <div
    class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
  >
  @foreach ($services as $service)
    <div class="group rounded px-8 py-12 shadow bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">

        <div class="block group-hover:block">
          <img
            src="{{asset ('storage/' . $service->service_image)}}"
            alt="development icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-yellow lg:text-xl"
        >
          {{$service->service_title}}
        </h3>
        <p class="text-grey pt-4 text-sm text-white md:text-base">
            {{$service->service_description}}
        </p>
      </div>
    </div>
    @endforeach

  </div>
</div>

<div class="container py-16 md:py-20" id="portfolio">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Check out my Portfolio
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Here's what I have done with the past
  </h3>

  <div
    class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2"
  >
  @foreach ($image as $img)


    <a
      href="{{$img->link}}"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="{{asset ('storage/' . $img->image)}}" class="w-full shadow"
        alt="portfolio image"
      />
    </a>
    @endforeach
  </div>
</div>

<div class="bg-grey-50" id="clients">
  <div class="container py-16 md:py-20">
    <div class="mx-auto w-full sm:w-3/4 lg:w-full">
      <h2
        class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
      >
        My latest clients
      </h2>
      <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
        @foreach ($clients as $client)
        <span class="m-8 block">
          <img
            src="{{asset ('storage/' . $client->image)}}"
            alt="{{$client->name}}"
            class="mx-auto block h-12 w-auto"
          />
        </span>

        @endforeach

      </div>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="work">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    My work experience
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Here's what I did before freelancing
  </h3>

  <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
    <span
      class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"
    ></span>
    @foreach ($experiences as $experience)
    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
      <div class="md:w-2/5">
        <div class="flex justify-center md:justify-start">
          <span class="shrink-0">
            <img
              src="{{asset ('storage/' . $experience->company_logo)}}"
              class="h-auto w-32"
              alt="{{$experience->title}}"
            />
          </span>
          <div class="relative ml-3 hidden w-full md:block">
            <span
              class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"
            ></span>
          </div>
        </div>
      </div>
      <div class="md:w-3/5">
        <div class="relative flex md:pl-18">
          <span
            class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"
          ></span>

          <div class="mt-1 flex">
            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
            <div class="md:-mt-1 md:pl-8">
              <span class="block font-body font-bold text-grey-40"
                >{{$experience->work_start}} - {{$experience->work_end}}</span
              >
              <span
                class="block pt-2 font-header text-xl font-bold uppercase text-primary"
                >{{$experience->title}}</span
              >
              <div class="pt-2">
                <span class="block font-body text-black"
                  >{{$experience->description}}</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </div>
</div>

<div class="bg-cover bg-top bg-no-repeat pb-16 md:py-16 lg:py-24" id="statistics"
  style="background-image: {{asset ('url(/assets/img/experience-figure.png)')}}">
  <div class="container">
    <div
      class="mx-auto w-5/6 bg-white py-16 shadow md:w-11/12 lg:py-20 xl:py-24 2xl:w-full"
    >
      <div class="grid grid-cols-2 gap-5 md:gap-8 xl:grid-cols-4 xl:gap-5">
        @foreach ($achivements as $achivement)

        <div
          class="flex flex-col items-center justify-center text-center md:flex-row md:text-left"
        >
          <div>
            <img
              src="{{asset ('storage/' . $achivement->image)}}"
              class="mx-auto h-12 w-auto md:h-20"
              alt="{{$achivement->title}}"
            />
          </div>
          <div class="pt-5 md:pl-5 md:pt-0">
            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                {{$achivement->number}}
            </h1>
            <h4
              class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl"
            >
            {{$achivement->title}}
            </h4>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="blog">

  <div class="container py-16 md:py-20">
    <h2
      class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
    >
      I also like to write
    </h2>
    <h4
      class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
    >
      Check out my latest posts!
    </h4>
    <div
      class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10"
    >
    @forelse ($latestPosts as $post)
      <a href="{{route('view', $post)}}" class="shadow">
        <div class="group relative  "
        >
        <img class="flex h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72" src="{{asset ('storage/' . $post->thumbnail)}}" />
          <span
            class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"
          ></span>

          <span
            class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base"
            >Read More</span
          >
        </div>
        <div class="bg-white py-6 px-5 xl:py-8">
          <span class="block font-body text-lg font-semibold text-black"
            >{{$post->title}}
          <p class="block pt-2 font-body text-grey-20">
            {{$post->shortBody(10)}}</p
          >
        </div>
      </a>
      @empty
      <p>No active and published blog posts available.</p>
  @endforelse


    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="contact">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Here's a contact form
  </h2>
  <h4
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Have Any Questions?
  </h4>
  <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
    <p class="font-body text-grey-10">
        Get in touch with us! Fill out the form below to send a message. We'll respond promptly to your inquiries.
    </p>
  </div>

  <form class="mx-auto w-full pt-10 sm:w-3/4" method="POST" action="{{route ('contact.store')}}">
    @csrf
    <div class="flex flex-col md:flex-row">
      <input
        class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
        placeholder="Name"
        type="text"
        id="name"
        name="name"
        required
      />
      <input
        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
        placeholder="Email"
        type="text"
        id="email"
        name="email"
        required
      />
    </div>
    <textarea
      class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
      placeholder="Message"
      id="message"
      cols="30"
      rows="10"
      name="message"
      required
    ></textarea>

    <button
      class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
    type="submit">
      Send
      <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
    </button>

  </form>
  <div class="flex flex-col pt-16 lg:flex-row">
    <div
      class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
    >
      <div class="flex items-center">
        <i class="bx bx-phone text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Phone
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        {{$setting->phone}}
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-envelope text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Email
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        {{$setting->email}}
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-map text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Address
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        {{$setting->address}}
      </p>
    </div>
  </div>
</div>

<div
  class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96"
  style="background-image: {{asset ('url(/assets/img/map.png)')}}"
></div>

<div class="relative bg-primary bg-cover bg-center bg-no-repeat py-16 bg-blend-multiply lg:py-24"
  style="background-image: {{asset ('url(/assets/img/bg-cta.jpg)')}}">
  <div class="container relative z-30">
    <h3
      class="text-center font-header text-3xl uppercase leading-tight tracking-wide text-white sm:text-4xl lg:text-5xl"
    >
      Keep <span class="font-bold">up-to-date</span> <br />
      with what I'm up to
    </h3>
    <form class="mt-6 flex flex-col justify-center sm:flex-row" method="POST" action="{{route ('newsletter.store')}}">
        @csrf
      <input
        class="w-full rounded px-4 py-3 font-body text-black sm:w-2/5 sm:py-4 lg:w-1/3"
        type="text"
        id="email"
        name="email"
        placeholder="Give me your Email"
      />
      <button
        class="mt-2 rounded bg-yellow px-8 py-3 font-body text-base font-bold uppercase text-primary transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring focus:ring-yellow sm:ml-2 sm:mt-0 sm:py-4 md:text-lg"
        type="submit"
      >
        Join the club
      </button>
    </form>
  </div>
</div>
</div>

@extends('footer')

    </div>
    @endforeach
    <script src="{{asset ('assets/js/main.js')}}"></script>


  </body>
  @endforeach
</html>
