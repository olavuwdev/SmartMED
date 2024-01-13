<x-app1>
<x-slot name="dias">
{!! $dias !!}
</x-slot>
<x-slot name="facebook">
{!! $contact->facebook !!}
</x-slot>
<x-slot name="youtube">
{!! $contact->youtube !!}
</x-slot>
<x-slot name="telegram">
{!! $contact->telegram !!}
</x-slot>
<x-slot name="instagram">
{!! $contact->instagram !!}
</x-slot>
<x-slot name="numero_ctt">
    {!! $numero_ctt !!}
</x-slot>
<!-- Section: intro -->
<x-slot name="email">
    {!! $email !!}
</x-slot>

	<!-- /Section: pricing -->

	<section id="partner" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-left">
					<h2 class="h-bold">BLOG <img src="img/LOGO PNG/COLORIDO/V1.1.png" width="100"</h2>
					<p>Pagina de noticia e postagens</p>
                </div>
            </div>
            <div class="divider-long"></div>
        </div>
    </div>
</div>

    <section>
        <div class="container">
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="display-5 link-body-emphasis mb-1"> {{ $post->titulo }} </h2>
                    <p class="display-5 link-body-emphasis mb-1"> publicado em: {{ $post->data }} </p>

                    <p class="p-3">{!! $post->texto !!}</p>
                    <img src="{{asset('img/'.$post['imagem'])}}" width="100%">
                    <div class="divider-short" style="margin-top: 20px;"></div>
                </div>
            @endforeach
        </div>
        <div class="postpage">
        {{ $posts->links() }}
        </div>
    </div>
        </section>
        </x-app1>
