@extends('layouts.app')

@section('main')
  <main id="root">
    <ul>
      <li v-for="sport in sports" :key="sport.id">
        <h3>@{{sport.name}}</h3>
        <p>@{{sport.description}}</p>
      </li>
    </ul>
  </main>
@endsection

@section('head')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
@endsection

@section('foot-script')
  <script src="{{ asset('js/sports.js')}}" charset="utf-8"></script>
@endsection