  @extends('layout/master')

  @section('body')
        <h1>Hello All.whats up?</h1>
      <?php print_r($mysub); ?>  <br>
      <?php print_r($marks); ?>
     <br>
     <h2>
     <?php echo $mysub;?>
     {{ $mysub }} <br>
     @{{ $mysub }} <br>  //to print as it is <br>
     <br>
     {!! $mysub !!} // to run a script inside   <br>

     {{ isset($mysub) ? $mysub : 'Data not found.' }}

     <br>
    </h2>
     <h1>
     {{ $mysub or 'DATA NOT FOUND'}}<br>
     <br>
     <br>

      <?php $u = "Data missing"; ?>
     @if($mysub =="Hello")
                {{$mysub }}
     @elseif($mysub == "Hi")
                {{ $mysub }}
     @else
                {{ $u }}
     @endif

     </h1>
   @endsection