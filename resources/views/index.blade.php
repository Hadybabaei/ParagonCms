@extends('layouts.master')
@section('content')
@include('admin.header')
@include('designs.bigbanner')
@foreach ($positions as $position)
    <section id={{$position->en_name}}>
       @foreach($position->Category as $cat)
            @isset($cat->Designalgoritm->name)
            <?php $des=$cat->Designalgoritm->name?>
                @include("designs.$des")
            @endisset
       @endforeach
    </section>
@endforeach
@include('layouts.footer')
@endsection