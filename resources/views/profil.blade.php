<x-app-layout>
    <x-slot name="header">
        @include('partials.nav')
    </x-slot>

    @if(session('success'))
        <ul>
            <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
        </ul>
    @endif

    <div class="profil-div">
            <div class="profil-div1" style="background-color: #EEF2F5; heigth: 100vh">
                <div class="dash-div1_profil">
                    <img src="" />
                    <p>@Username</p>
                    <p>Développeur web</p>
                </div>
    
                <div style="margin-top: 20%">
                    <h2 class="dash-div3_actu_title" style="margin: 5px">Contacts</h2>
                    <div class="dash-div1_contact">
                        <img src="" />
                        <p>@Username</p>
                    </div>
                    <div class="dash-div1_contact">
                        <img src="" />
                        <p>@Username</p>
                    </div>
                    <div class="dash-div1_contact">
                        <img src="" />
                        <p>@Username</p>
                    </div>
                    <div class="dash-div1_contact">
                        <img src="" />
                        <p>@Username</p>
                    </div>
                </div>
            </div>
 

    <div class="profil-div2" style="background-color: #EEF2F5;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- 
                width: 100%;
                height: 40px;
                background-color: #ffffff;
            --}}

            <div class="profil-div2-header" style="border: #fff 2px">
                <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="/community">
                    <span class="text-xs ml-1" style="font-size: 25px; margin: 10px">←</span>
                    <span :href="route('dashboard')" style="font-size: 20px; color: rgb(122, 121, 121)"> {{ Auth::user()->name }}</span>
                </a>
            </div><hr>

            <div class="">
                <!-- Carousel Body -->
                <div class="relative block md:flex items-center bg-gray-100 " style="min-height: 19rem; display: block">

                    <div class="">
                        <div class="" style="background-color: #ffffff">
                            <div class="relative w-full md:w-2/5 h-full overflow-hidden" style="width: 100%; display: flex">
                                <!--  IMAGE  -->
                                <div class="profil-image">
                                    @if(Auth::user()->photo)
                                        <img style="padding: 5% 45% 0% 10%; border-radius: 50%" src=" {{ url("imgs/".Auth::user()->photo) }}" class="card-img-top m-auto my-auto" alt="">
                                    @endif
                                </div>
                            </div>
                            <div style="padding: 20px">
                                <h1 style="color: lightslategrey; margin-top: 20px"> {{ Auth::user()->name }} </h1>
                                        <br>
                                <p style="color: lightslategrey">{{ Auth::user()->bio }}</p>

                                <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="/edit/{{ Auth::user()->id }}">
                                    <span :href="route('edit')">  {{ __('Modifier Profil') }} </span>
                                    <span class="text-xs ml-1">➜</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Display Container (not part of component) END -->
        </div>
    </div>

    <div class="profil-div3">
        <p class="dash-div3_actu_title">Actualités</p>
        <div class="dash-div3_actus">
            <div class="dash-div3_actu">
                <img class="dash-div3_actu_img" src="{{asset('./imgs/carnav.png')}}" alt="">
                <div class="dash-div3_actu_img-div" >
                    <p>Titre de la news</p>
                    <small>Vérifiez les câbles réseau, le modem et le routeur.</small>
                </div>
            </div>
            <div class="dash-div3_actu">
                <img class="dash-div3_actu_img" src="{{asset('./imgs/carnav.png')}}" alt="">
                <div class="dash-div3_actu_img-div" >
                    <p>Titre de la news</p>
                    <small>Vérifiez les câbles réseau, le modem et le routeur.</small>
                </div>
            </div>
            <div class="dash-div3_actu">
                <img class="dash-div3_actu_img" src="{{asset('./imgs/carnav.png')}}" alt="">
                <div class="dash-div3_actu_img-div" >
                    <p>Titre de la news</p>
                    <small>Vérifiez les câbles réseau, le modem et le routeur.</small>
                </div>
            </div>
            <div class="dash-div3_actu">
                <img class="dash-div3_actu_img" src="{{asset('./imgs/carnav.png')}}" alt="">
                <div class="dash-div3_actu_img-div" >
                    <p>Titre de la news</p>
                    <small>Vérifiez les câbles réseau, le modem et le routeur.</small>
                </div>
            </div>
        </div>
    </div>

</div>
</x-app-layout>

