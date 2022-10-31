<x-app-layout>
    <x-slot name="header">
        @include('partials.nav')
    </x-slot>

    <div class="dash-div">
        <div class="dash-div1">
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

        <div class="dash-div2">

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative max-w-3xl mx-auto">
                    <strong> {{ session('error') }} </strong>
                </div>
            @endif
    
            <div class=" mx-auto lg:px-8">
                <!-- component -->
                <div class="dash-div2-component font-sans">
                    {{-- <div class="bg-white max-w-md mx-auto my-3 border border-grey-light rounded-t-lg overflow-hidden"> --}}
                    <div class=" ">
                    {{-- <div class="bg-white border border-grey-light"> --}}

                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <form method="POST" class="" action="{{ route('posts') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="dash-div2-input bg-grey-lighter" style="margin-top: 2%; margin-bottom: 2%">
                                <div class="dash-div2-input_textarea flex">
                                    <textarea
                                        id="textarea"
                                        name="body"
                                        class="w-full border"
                                        placeholder="Quoi de neuf ?"
                                    ></textarea>
                                </div>
    
                                <div class=" dash-div2-input_button">
                                    <button type="submit" 
                                        class="dash-div2-input_button_btn border text-white" 
                                        style="background-color: #4E44E3;                                    ">
                                        Publier
                                    </button>
                                </div>
                                <br>
                            </div>
                        </form>
                        @error('body')
                            <p class="text-red-500 text-sm mt-2" style="text-align: center">
                                {{ $message }}
                            </p>
                        @enderror
                        <!-- POSTS -->
                        @foreach($posts as $post)
                            @include('post')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="dash-div3">
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

