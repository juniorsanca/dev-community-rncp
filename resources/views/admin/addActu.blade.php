@include('partials.header')
<div class="admin-page" style="display: flex">
    @include('partials.navAdmin')
  <div class="faq-body" id="faq1" style="padding: 50px; width: 75%">
    <h2>Actualités</h2>
        <main style="padding: 30px">
            <a href="/actus/create"><h6>Ajouter une actualité</h3></a>
                <form method="POST" action="{{ route('admin') }}" enctype="multipart/form-data">

                {{-- <form method="POST" action="{{ route('admin.actus.store') }}" enctype="multipart/form-data"> --}}
                    @csrf
    
                    <x-label for="title" :value="__('Title')" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                    <br>
                    @error('title')
                    {{$message}}
                    @enderror
                    <x-label for="resume" :value="__('Résumé de l\'actu')" />
                    <x-input id="resume" class="block mt-1 w-full" type="text" name="resume" :value="old('resume')" required autofocus/>
                    <br>
                    @error('resume')
                    {{$message}}
                    @enderror
    
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input
                            class="form-control"
                            name="image"
                            type="file"
                            id="formFile">
                    </div>
                    @error('image')
                    {{$message}}
                    @enderror
                    <div class="form-floating">
                        <x-label for="actu" :value="__('Actualités :')" />
                        <x-input
                            style="height: 100px"
                            id="content"
                            class="block mt-1 w-full"
                            type="text" name="content"
                            :value="old('content')" required autofocus/>
                        <br>
                    </div>
                    @error('actu')
                    {{$message}}
                    @enderror
                    <br>
                    <button class="btn-info" style="height: 50px;width: 200px; background: #000000; color: #fff" type="submit">Ajouter</button>
                    <br>
                    <br>
                    <div>
                        <label>Publier ?</label>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="true" aria-label="...">
                    </div>
                </form>
        </main>
    </div>
</div>