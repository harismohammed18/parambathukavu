@extends('layouts.app')

@section('content')
    <div class="margin-adjust">
      <div class="col-sm-12 ">
        <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card border-black card-inverse">
              <img  class="card-img-top lazy" data-src="{{ asset('/img/festival.jpg')}}" alt="FESTIVALS">
              <div class="card-img-overlay">
                <h4 class="card-text text-center text-light" style="font-weight:bolder;margin-top:65%;">FESTIVALS</h4>
              </div>
            </div>
            <div class="card border-black card-inverse">
              <img class="card-img-top lazy" data-src="{{ asset('/img/pooja.jpg')}}" alt="POOJAAS">
              <div class="card-img-overlay">
                <h4 class="card-text text-center text-light" style="font-weight:bolder;margin-top:65%;">POOJAAS</h4>
              </div>
            </div>
            <div class="card border-black card-inverse">
              <img class="card-img-top lazy" data-src="{{ asset('/img/VAZHIPADU.jpg')}}" alt="VAZHIPADU">
              <div class="card-img-overlay">
                <h4 class="card-text text-center text-light" style="font-weight:bolder;margin-top:65%;">VAZHIPADU</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12 text-center up-div">
    <h1 class="up-h1">News</h1>
  </div>
  <div class="container">
    <div class="row margin-top-20-event">
      @if(isset($news) && $news->count() > 0)
        @foreach ($news as $value)
          <div class="col-sm-4 margin-top-5">
            <div class="card">
              <div class="card-title text-center">
                <h3 class="event-name">{{$value->title}}</h3>
                <h4 class="event-date">@php $date=date_create($value->date); @endphp {{ date_format($date,"d/M/Y ")}}</h4>
              </div>
              <div class="card-body event-line">
                <p class="text-justify">
                @php $news=substr($value->news,0,100); @endphp  {!! $news !!}...
                </p>
                <a class="btn btn-info" href="{{ url('/newsOpen').'/'.$value->id }}">View Details</a>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <h4 class="text-danger"> No News</h4>
      @endif
    </div>
  </div>
  <div class="parallaxQuote">
    <div class="quote text-center">
      <blockquote class="blockquote">
        <p class="mb-0 quotep"><big>&#10077;</big> You have to grow from the inside out. None can teach you, none can make you spiritual. There is no other teacher but your own soul. <big>&#10078;</big></p>
        <footer class="blockquote-footer"><cite title="Source Title"><b>Swami Vivekananda</b></cite></footer>
      </blockquote>
    </div>
  </div>
  <div class="container-fluid bg-gray" style="margin-top:-20px;padding-bottom:30px;">
    <h3 class="about-us text-center about-heading">ഐതീഹ്യം</h3>
    <div class="col">
      <p class="text-justify about-p malayalam">
        യുഗാന്തരങ്ങളിൽ തന്നെ ഋഷീശ്വരന്മാരുടെ തപസ്സു കൊണ്ടും സാന്നിദ്ധ്യം കൊണ്ടും പരിപാവനമാണ് പറമ്പത്ത്കാവ് പ്രദേശം. നിബന്ധനവും, ഗുഹാമുഖങ്ങളെകൊണ്ട് നിറഞ്ഞതുമായ പ്രദേശമാണ്. രണ്ടായിരം വർഷങ്ങൾക്കു മുമ്പ് ശ്രീവിദ്വോപാസകനായ വിശിഷ്ട  ബ്രാഹ്മണന്   പ്രത്യക്ഷമായി അന്തർധാനം  ചെയ്ത തേജസ്സ്, ദേവി ചൈതന്യമാണെന്നു മനസ്സിലാക്കി  ഗർത്തത്തിൽ സംരക്ഷിച്ചുകൊണ്ട് ശ്രീ ചക്രം സമ്പുടം ചെയ്തു ആരാധിച്ചു വന്നതാണ് ദുർഗ്ഗാസങ്കേതം.  അതിന്റെ തന്നെ രാജസവും താമസവുമായ കലകളെ ആരാധനാ സൗകര്യാർത്ഥം സംവിധാനം ചെയ്തതാണ് ഭദ്രകാളി സങ്കേതവും കാരാഭഗവതി സങ്കേതവും. പ്രകൃത്യാരാധനക്ക് പ്രാമുഖ്യ നൽകി കൊണ്ടാണ്  പൗരാണിക കാലം മുതൽക്കേ ആരാധന നടത്തി കൊണ്ടിരിക്കുന്നത്.
        അപൂർവ്വമായ ഒരു പ്രത്യേക കൗളാചാര സമ്ബ്രദായത്തോടുകൂടി ചിട്ടപ്പെടുത്തിയതാണ് ഇവിടത്തെ നിത്യനൈമിത്തിക ആചാരങ്ങൾ . ത്രിഗുണങ്ങളോട് കൂടിയ നിവേദ്യം അപൂർവ്വതയാണ്. ഭഗവതിയുടെ പരിവാരങ്ങളായ ഭൂതഗണങ്ങളാൽ നിർമ്മിക്കപ്പെട്ടതാണ് ഭൂതത്താൻ കുഴിയും നർത്തക സ്‌മൃതി മണ്ഡപവും ഉണ്ട് .
      </p>
      <p class="text-center">
        <a href="{{ route('showHistoryPage')}}" class="btn btn-info">Read More</a>
      </p>
    </div>
  </div>
  <div class="container-fluid text-center loc-div">
    <h3 class="loc-hed">Location</h3>
  </div>
  <div class="container-fluid bg-gray">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15672.679887896365!2d76.0756263!3d10.8746735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8b96f565a3d8721!2sParambath+Kavu+Temple!5e0!3m2!1sen!2sin!4v1519706811977" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen></iframe>
  </div>

@endsection
