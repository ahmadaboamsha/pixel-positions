@props(['width' => 90])

<img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}" alt="" class='rounded-xl'>


{{-- @props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}
