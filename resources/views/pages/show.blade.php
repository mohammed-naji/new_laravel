{{-- {{ $name }} - {{ $age }} - {{ $education }} --}}
<!-- -->

{{-- {{ $cars[0] }} - {{ $cars[1] }} - {{ $cars[2] }} --}}

{{-- @if (count($cars) != 0)
    @foreach($cars as $aa)
    {{ $aa }}
    @if( $loop->last != 1)
    -
    @endif
    @endforeach
@else
    <p>Thre is no cars found</p>
@endif --}}

{{-- @forelse ( $cars as $car )
    <p>{{ $car }}</p>
@empty
    <p>There is no cars</p>
@endforelse --}}


@foreach ($names as $name => $age)
    <p>{{ $name }} age = {{ $age }}</p>
@endforeach
