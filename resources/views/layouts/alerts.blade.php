

@if(request()->message)
<div class="alert alert-info " >
    <strong>{{request()->message }}</strong>
    <button type="button " class="close">
        <span>&times;</span>
    </button>
</div>
@endif

    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
          {{ $error}}
      </div>
    @endforeach

@if(session()->has("errorLink"))
    <div class="alert alert-errorLink alert-dismissible fade show" >
        <strong>{!! session()->get("danger") !!}</strong>
        <button type="button " class="close">
            <span>&times;</span>
        </button>
    </div>
@endif

@if(session()->has("info"))
    <div class="alert alert-info alert-dismissible fade show" >
        <strong>{{ session()->get("info") }}</strong>
        <button type="button " class="close">
            <span>&times;</span>
        </button>
    </div>
@endif

@if (request()->input(""))
<h6> {{ $products -> total() }}resultat(s) pour la recherche "{{request()->q }}" </h6>
@endif

