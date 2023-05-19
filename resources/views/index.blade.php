<x-guest-layout>
    <div class="text-center">
        @foreach ($letras as $item)
            <p>{{$item}}</p>
        @endforeach
    </div>
</x-guest-layout>
