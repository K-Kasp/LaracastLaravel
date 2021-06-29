@foreach ($posts as $post)
    <article>
        <h1>
        <a href="/posts/{{ $post->slug }}">
           <?=$post->title;?>
        </h1>

         </a>

        <p>
{{--            Patikriname ar $post turi relationship su category --}}
            @if($post->category)
            <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a>
                @endif
        </p>



        <div>
            {{ $post->excerpt }}
        </div>
    </article>
@endforeach
