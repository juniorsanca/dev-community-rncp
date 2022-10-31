<x-app-layout>
    <x-slot name="header">   @include('partials.nav')    </x-slot>

<div class="profil-div" style="background-color: #eef2f5;">
    <div class="edit-profil-div1" style="background-color: #EEF2F5; heigth: 100vh">
        <div style="margin: 20px">
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
    </div>

    <!-- component -->
        <div class="edit-profil-div2">
            <div class="grid gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-lg mr-auto">Éditer le profil</h2>
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>

                    <form method="POST" action="{{ route("update", $user) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="mt-5">
                        <div class="form">
                            <div class="md:space-y-2 mb-3">
                                <label class="text-xs font-semibold text-gray-600 py-2">Photo<abbr class="hidden" title="required">*</abbr></label>
                                <div class="flex items-center py-6">

                                         <div class="mb-3">
                                            <label for="formFile" class="form-label">Image</label>
                                            <input
                                                class="form-control"
                                                name="photo"
                                                type="file"
                                                value="{{$user->photo}}"
                                                id="formFile">
                                                {{$user->photo}}

                                                <img src="{{asset('imgs/' . $user->photo)}}" class="card-img-top" alt="..." style="height: 50px;width: 50px">
                                        </div>

                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2"> Nom <abbr title="required">*</abbr></label>
                                    <input placeholder="Company Name"
                                           class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter h-10 px-4"
                                           type="text"
                                           name="name"
                                           value="{{ old('name', $user->name) }}"
                                           id="name"
                                    >
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Adresse email <abbr title="required">*</abbr></label>
                                    <input placeholder="Email ID"
                                           class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter h-10 px-4"
                                           type="text"
                                           name="email"
                                           value="{{ old('email', $user->email) }}"
                                           id="email">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                <label class="font-semibold text-gray-600 py-2">Bio</label>
                                <textarea name="bio" id="bio"
                                          class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter py-4 px-4"
                                          placeholder="Enter your comapny info"
                                          spellcheck="false"> {{ old('bio', $user->bio) }} </textarea>
                                @if($errors->has('bio'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('bio') }}
                                    </div>
                                @endif
                            </div>

                            {{--
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('New password')" />

                                <input id="password"
                                         class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                <input id="password_confirmation"
                                         class="block mt-1 w-full"
                                         type="password"
                                         name="password_confirmation" />
                            </div>
                            --}}
                            <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 hover:shadow-lg hover:bg-gray-100"> Annuler </button>
                                <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white hover:shadow-lg hover:bg-green-500" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="edit-profil-div3">

        </div>
</div>
</x-app-layout>

