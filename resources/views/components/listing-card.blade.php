@props(['listing'])
<div class="col-lg-6 d-flex ftco-animate">
    <div class="services-wrap d-flex">
        <a class="img"
            style="background-image:url('{{ $listing->logo ? asset('storage/' . $listing->logo) : '' }}')"></a>
        <div class="text p-4">
            <form class="kosarForm" action="{{ route('kosar.store') }}" method="POST">
                @csrf
                <h2> {{ $listing->cim }}<input type="hidden" name="cim" value="{{ encrypt($listing->cim) }}"></input>
                </h2>

                <p>Összetevők: <br>{{ $listing->osszetevok }}</p>
                <input type="hidden" name="logo" value="{{ $listing->logo }}">
                <p class="price"> <input type="hidden" name="ar" value="{{ encrypt($listing->ar) }}">
                    <span>{{ $listing->ar }} Ft</span> </input>
                </p>
                <input type="hidden" name="kosarID" value="{{ encrypt($listing->id) }}">
                <input type="hidden" name="quantity" value="{{ encrypt($listing->darabszam) }}">
                <button type="submit" onclick="showPopup('popup1')"
                    class="ml-2 btn btn-white btn-outline-white">Kosárba</button>
            </form>
            <br>
            @auth
                <a href="etlap/{{ $listing->id }}/edit" class="ml-2 btn btn-white btn-outline-white"
                    style="border: solid 2px green">Szerkeztés</a>
                <form method="POST" action="{{ route('etlap.destroy', $listing->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-2 btn btn-white btn-outline-white"
                        style="border: solid 2px red">Törlés</button>
                </form>
            @endauth
        </div>
    </div>
</div>
