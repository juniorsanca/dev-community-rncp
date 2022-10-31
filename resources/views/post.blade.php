<!-- POST -->
<div class="flex py-4 px-4 border-b-2" style="background-color: #ffffff; margin: 20px 0px;">
    <div class="">
    </div>
    <div class="px-2 pt-2 flex-grow">
        <header style="display: flex">
            @if($post->user->photo) <img style="width: 10%;border-radius: 50%;" class="" src=" {{ url("imgs/".$post->user->photo) }}"> @endif
            <a href="#" style="width:85%; margin-top: 10px" class="text-black no-underline"> <span style="margin-left: 10px;" class="font-medium">{{ $post->user->name }}</span> </a>
        </header>
        <article class="py-4 text-grey-darkest"> {{ $post->body }} </article>

        <footer class="border-t border-grey-lighter text-sm flex" style="display: flex; width: 100%">
            <div style="width: 50%; display: flex;">
            <form action="{{ route('posts.like', ['post' => $post->id]) }}" method="post">
                @csrf
                <button type="submit"
                        class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                        <path
                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                        </path>
                        <span> {{ $post->likes()->count() }} </span>
                    </svg>
                </button>
            </form>

            <form action="{{ route('posts.comment', ['post' => $post->id]) }}" method="post">
                @csrf
                <button type="submit"
                        class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-message-circle h-6 w-6 mr-1">
                        <path
                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                    <span>{{ $post->comments()->count() }}</span>
                </button>
            </form>
        </div>
            <div class="text-xs text-grey flex items-center my-1" style="width: 50%">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="h-4 w-4 mr-1 feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <span>{{ $post->created_at }}</span>
            </div>
        </footer>

        <!-- COMMENTER -->
        <div class="py-4 border-b-2">
            <form method="post" action="{{ route('posts.comment', ['post' => $post->id]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="bg-grey-lighter p-4">
                    <div class="flex">
                        {{-- @if(Auth::user()->photo)
                            <img
                                src=" {{ url("imgs/".Auth::user()->photo) }}"
                                alt="photo-profil"
                                class=""
                                style="width: 45px;"
                            >
                        @endif --}}
                        <textarea
                            id="body"
                            name="body"
                            class="w-full border-blue"
                        ></textarea>
                    </div>


                    @error('body')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                    @enderror

                    <div class="flex justify-end mt-2">
                        <button
                            type="submit"
                            class="py-2 px-4 bg-white border border-blue hover:bg-blue hover:text-white" 
                            style="    
                                background-color: #4E44E3;
                                color: #ffffff;">
                            Répondre
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!-- LISTE DES COMMENTAIRES -->
        @if($comments)
            @foreach($comments as $comment)

                @if($comment->post_id == $post->id)

                    <div class="" style="width: 100%">
                        <div class="px-2 pt-2 flex-grow">
                            <div class="" style="display: flex">
                                <div class="" style="width: 10%">
                                    @if($comment->user->photo) <img style="border-radius: 50%" class="" src="{{ url("imgs/".$comment->user->photo) }}"> @endif
                                </div>
                                <div style="margin-left: 10px">
                                    <header>
                                        <a href="#" class="text-black no-underline">
                                            <span class="font-medium">{{ $comment->user->name }}</span>
                                        </a>
                                    </header>
                                    <article class="text-grey-darkest">
                                        {{ $comment->body }}
                                    </article>
                                    <div class="text-xs text-grey flex items-center my-1" style="margin-top: 5px">
                                        <span>{{ $comment->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <footer class="border-t border-grey-lighter text-sm flex">
                                <form
                                    action="{{ route('comments.like', ['post' => $post->id, 'comment' => $comment->id]) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit"
                                            class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24"
                                             height="24"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                                            <path
                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                                            <span> {{ $comment->likes()->count() }} </span>
                                        </svg>

                                    </button>
                                </form>
                            </footer>

                        </div>



                    </div>
                @endif
            @endforeach
        @endif

    </div>
</div>
