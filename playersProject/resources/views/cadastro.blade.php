@extends('layouts.app')
@section('content')

<div id="painel-container" class="component">
    <x-painel />
</div>

<div id="insert-container" class="component">
    <x-insert />
</div>

<div id="list-container" class="component">
    <x-list-card :jogadores="$jogadores" />
</div>

@endsection