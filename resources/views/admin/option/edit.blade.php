@extends('admin.admin')
@section('title',$property->exists ? "Editer une Option" : "Créer une Option")
@section('content')
    <h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{url($options->exists ? 'admin.option.edit' : 'admin.option.create',$options)}}" method="post">
        @csrf
        @method($options->exists ? 'put':'post')
        <div class="row">
            @include('shared.input',['class'=>'col','label'=>'Nom','name'=>'name','value'=>$options->name])
            <div class="col row">
                @include('shared.input',['class'=>'col','name'=>'email','label'=>'Email','value'=>$options->email])
                @include('shared.input',['class'=>'col','name'=>'Num_Tel','label'=>'phone','value'=>$options->phone])
            </div>
        </div>
    </form>
@endsection

@section('tilte',$property->exists ? "Editer un bien" : "Créer un bien")
@section('content')
    <h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{route($property->exists ? 'admin.property.update':'admin.property.store',$property)}}" method="post">
        @csrf
        @method($property->exists ? 'put':'post')
        <div class="row">
            @include('shared.input',['class'=>'col','label'=>'Titre','name'=>'title','value'=>$property->title])
            <div class="col row">
                @include('shared.input',['class'=>'col','name'=>'surface','value'=>$property->surface])
                @include('shared.input',['class'=>'col','name'=>'price','label'=>'Prix','value'=>$property->price])
            </div>
        </div>
        @include('shared.input',['type'=>'textarea','name'=>'description','value'=>$property->description])
        <div class="row">
            @include('shared.input',['class'=>'col','name'=>'rooms','label'=>'Piéce','value'=>$property->rooms])
            @include('shared.input',['class'=>'col','name'=>'bedrooms','label'=>'Chambres','value'=>$property->bedrooms])
            @include('shared.input',['class'=>'col','name'=>'floor','label'=>'Etage','value'=>$property->floor])
        </div>
        <div class="row">
            @include('shared.input',['class'=>'col','name'=>'address','label'=>'Address','value'=>$property->adress])
            @include('shared.input',['class'=>'col','name'=>'city','label'=>'Ville','value'=>$property->city])
            @include('shared.input',['class'=>'col','name'=>'postal_code','label'=>'Code Postal','value'=>$property->postal_code])
        </div>
        @include('shared.select',['name'=>'options','label'=>'Options','value'=>$property->options()->pluck('id'),'multiple'=>true])
        @include('shared.checkbox',['name'=>'sold','label'=>'Vendu','value'=>$property->sold,'options'=>$options])
        <button class="btn btn-primary">
            @if($property->exists)
                Modifier
            @else
                Crée
            @endif
        </button>
    </form>
@endsection
