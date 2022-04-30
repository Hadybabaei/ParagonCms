@extends('layouts.master')
@section('content')
<form method='post' action={{route('article-update',$articles->id)}}>
    @csrf
    @method('put')
    <input name='title' value={{$articles->title}}>
    <input name='description' value={{$articles->description}}>
    <select id="categories" name="category_id">
    @foreach ($categories as $category)
            <option value={{$category->id}}>{{$category->name}}</option>
    @endforeach
    </select>
    <textarea name="body">{{$articles->body}}</textarea>
    <button type="submit">Submit</button>
</form>
@endsection