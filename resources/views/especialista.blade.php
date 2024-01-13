<div class="cbp-l-member-img">
	<img src="{{asset('img/'.$especialista['foto_especialista'])}}" width="15%">
</div>
<div class="cbp-l-member-info">
	<div class="cbp-l-member-name">{{ $especialista['nome']}}</div>
	<div class="cbp-l-member-position">{{ $especialidade['titulo'] }}</div>
	<div class="cbp-l-member-desc">
    {{ $especialista['descricao_especialista']}}
</div>
</div>
