@extends('layouts.app')


@section('content')

  @include('comp.firstComp')
  <div id="app1">

    <h1>@{{ fullname }}</h1>

    <label>Name</label>
    <input v-model="name">

    <label>Surname</label>
    <input v-model="surname">

    <h1>Static set of result functions</h1>
    <h2>@{{ getRandNum }}</h2>
    <h3>@{{ getRandNum }}</h3>
    <p>@{{ getRandNum }}</p>

    <h1>Dinameic set of result functions</h1>
    <h2>@{{ methRandNum() }}</h2>
    <h3>@{{ methRandNum() }}</h3>
    <p>@{{ methRandNum() }}</p>

  </div><br><br>

  <div id='app2'>

    <first-component></first-component>

  </div>



@endsection
