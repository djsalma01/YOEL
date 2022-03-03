@extends('layouts.front')

@section('search')
<div class="categories-search-wrapper">

                    <div class="categories-wrapper">
                        <form action="{{route('products.search')}}" method="GET">
                            <input name="query" placeholder="Enter Your key word" type="text">
                            <button type="submit"> Search </button>
                        </form>
                    </div>
</div>

@endsection
