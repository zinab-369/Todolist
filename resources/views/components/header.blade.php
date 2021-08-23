<div>
  <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

  <h1> this is the header component</h1>
  <h3> Hello{{$name}}</h3>
  <h3> fruits are:</h3>
  <ul>
      @foreach($fruits as $fruit)
<li>{{$fruit}}</li>
@endforeach
  </ul>
</div>
