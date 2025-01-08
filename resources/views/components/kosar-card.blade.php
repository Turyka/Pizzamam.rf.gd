@props(['kosaritem'])
<style>
    .qty {
        width: 40px;
        height: 25px;
        text-align: center;
    }

    input.qtyplus {
        width: 25px;
        height: 25px;
    }

    input.qtyminus {
        width: 25px;
        height: 25px;
    }
</style>
<div id="item-container-{{ $kosaritem['kosarID'] }}" class="row" style="margin-bottom: 10px">
    <div class="col-lg-3 d-flex ftco-animate"></div>
    <div class="col-lg-6 d-flex ftco-animate">
        <div class="services-wrap d-flex">
            <a class="img"
                style="background-image:url('{{ $kosaritem['logo'] ? asset('storage/' . $kosaritem['logo']) : '' }}')"></a>
            </a>
            <div class="text p-4">
                <h3>{{ $kosaritem['cim'] }}</h3>
                <p class="price"><span
                        class="price-{{ $kosaritem['kosarID'] }}">{{ $kosaritem['quantity'] * $kosaritem['ar'] }}
                    </span> Ft</p>
                <br>
                <div class="row">

                    <form class="kosar_remove" action="{{ route('kosar.clear') }}" method="POST">
                        @csrf
                        <input type="hidden" name="clear" value="{{ $kosaritem['kosarID'] }}">
                        <button type="submit" class="ml-2 btn btn-white btn-outline-white"
                            style="border: solid 2px red">-</button>
                    </form>

                    <h3 id="darab-{{ $kosaritem['kosarID'] }}" style="margin:15px;"> {{ $kosaritem['quantity'] }} </h3>

                    <form class="kosar_add" action="{{ route('kosar.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="add" value="{{ $kosaritem['kosarID'] }}">
                        <button type="submit" class="ml-2 btn btn-white btn-outline-white"
                            style="border: solid 2px green">+</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 d-flex ftco-animate"></div>
</div>

<!-- Adatbázisba eltárolt rendelés -->
