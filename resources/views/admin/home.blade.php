@include('partials.header')
<div class="admin-page" style="display: flex">
    @include('partials.navAdmin')
  <div class="faq-body" id="faq1" style="padding: 50px; width: 75%">
    @if(session('success'))
    <ul>
        <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
    </ul>
@endif
    <h2>Actualités</h2>
        <main style="padding: 30px">
            <a href="/admin/actus/create"><h6>Ajouter une actualité</h3></a>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">Liste d'actualités</h6>
                
                @if($actus->isNotEmpty())
                @foreach ($actus as $actu)

                <div class="d-flex text-muted pt-3">
                    <img src="{{asset('imgs/' . $actu->image)}}" class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32" alt="image">
                 
                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">{{ $actu->title }}</strong>
                        <div>
                            <a href="#">Modifier</a>
                            {{-- <a href="#">Suprimer</a> --}}

                            <form action="{{route('admin.destroy', $actu->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Êtes vous sûr de vouloir supprimer cet élement ?')" type="submit">Suprimer</button>
                            </form>


                        </div>
                        </div>
                        <p class="d-block">{{ $actu->resume }}</p>
                        <div>
                            <small> {{ $actu->content }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <li>Il y a pas de actualités dans la base de donné !</li>
                @endif
              </div>
        </main>
    </div>
</div>