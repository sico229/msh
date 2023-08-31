@extends('Layouts.template')
@section('contenu')
    <section id="section1">
        <div data-aos="fade-right">
            <div>
                <h2>{!! $version[4] !!}</h2>
                <p>{!! $version[5] !!}</p>
                <div>
                    <a href="">{!! $version[6] !!}</a>
                </div>
            </div>
        </div>
        <div data-aos="fade-left">
            &nbsp;
        </div>
    </section>
    <section id="section2">

        <h2>{!! $version[7] !!}</h2>
        <div>
            <div>
                <div>
                    <i class="bi bi-shield-fill-check"></i>
                    <h2>{!! $version[8] !!}</h2>
                </div>
                <p>{!! $version[9] !!}</p>
            </div>
            <div>
                <div>
                    <i class="bi bi-stopwatch-fill"></i>
                    <h2>{!! $version[10] !!}</h2>
                </div>
                <p>{!! $version[11] !!}</p>
            </div>
            <div>
                <div>
                    <i class="bi bi-piggy-bank-fill"></i>
                    <h2>{!! $version[12] !!}</h2>
                </div>
                <p>{!! $version[13] !!}</p>
            </div>
        </div>
    </section>

    <section id="section3">
        <h2>{!! $version[14] !!}</h2>
    </section>

    <section id="section4">
        <h2>{!! $version[15] !!}</h2>
        <p>{!! $version[16] !!}</p>

        <div class="container">
            <div>
                <div>
                    <i></i>
                    <h2>{!! $version[17] !!}</h2>
                    <p>{!! $version[18] !!}</p>
                </div>
            </div>
            <div>
                <div>
                    <i class="i2"></i>
                    <h2>{!! $version[19] !!}</h2>
                    <p>{!! $version[20] !!}</p>
                </div>
            </div>
            <div>
                <div>
                    <i class="i3"></i>
                    <h2>{!! $version[21] !!}</h2>
                    <p>{!! $version[22] !!}</p>
                </div>
            </div>
        </div>
    </section>


    <section id="section5">
        <div>

        </div>
        <div>
            <h2>{!! $version[23] !!}</h2>
            <p>{!! $version[24] !!}</p>
        </div>
    </section>
    <section id="section6">
        <div>
            <div>
                <div>
                    <i class="bi bi-bank"></i>
                    <span class="counter">7645</span>
                </div>
                <h3>{!! $version[25] !!}</h3>
            </div>
            <div>
                <div>
                    <i class="bi bi-balloon-heart-fill"></i>
                    <span class="counter">18328</span>
                </div>
                <h3>{!! $version[26] !!}</h3>
            </div>
            <div>
                <div>
                    <i class="bi bi-person-fill-add"></i>
                    <span class="counter">2805</span>
                </div>
                <h3>{!! $version[27] !!}</h3>
            </div>
        </div>

    </section>
@endsection
